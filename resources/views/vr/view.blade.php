@extends('layouts.app')

@section('title', 'VR 360° - ' . ucwords(str_replace('-', ' ', $scene)))

@section('styles')
<!-- Photo Sphere Viewer CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/core@5.7.4/index.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/markers-plugin@5.7.4/index.min.css">

<style>
    #viewer {
        width: 100%;
        height: calc(100vh - 80px);
    }
    
    /* Transition overlay */
    #transition-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgba(0,0,0,0.8) 0%, rgba(0,0,0,1) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.6s ease-in-out;
    }
    
    #transition-overlay.active {
        opacity: 1;
        pointer-events: all;
    }
    
    /* Custom marker styles */
    .psv-marker-custom-hotspot {
        width: 60px;
        height: 60px;
        background: rgba(20, 184, 166, 0.9);
        border: 3px solid white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }
    
    .psv-marker-custom-hotspot:hover {
        transform: scale(1.2);
        background: rgba(6, 182, 212, 1);
        box-shadow: 0 6px 20px rgba(20, 184, 166, 0.5);
    }
    
    .psv-marker-custom-hotspot i {
        color: white;
        font-size: 24px;
    }
    
    /* Info marker */
    .psv-marker-info {
        background: rgba(59, 130, 246, 0.9);
    }
    
    .psv-marker-info:hover {
        background: rgba(37, 99, 235, 1);
    }
    
    .transition-content {
        text-align: center;
        color: white;
    }
    
    .transition-icon {
        font-size: 64px;
        margin-bottom: 20px;
        animation: zoomPulse 1s ease-in-out infinite;
    }
    
    @keyframes zoomPulse {
        0%, 100% { 
            transform: scale(1); 
            opacity: 0.8; 
        }
        50% { 
            transform: scale(1.3); 
            opacity: 1; 
        }
    }
</style>
@endsection

@section('content')

<!-- Transition Overlay -->
<div id="transition-overlay">
    <div class="transition-content">
        <div class="transition-icon">
            <i class="fas fa-route"></i>
        </div>
        <h3 class="text-3xl font-bold mb-2">Berpindah Lokasi</h3>
        <p class="text-xl text-gray-300" id="transition-text">Menuju lokasi baru...</p>
    </div>
</div>

<!-- Back Button Fixed -->
<div class="fixed top-24 left-8 z-50">
    <a href="{{ route('vr.index') }}" class="inline-flex items-center space-x-2 px-4 py-2 bg-white shadow-lg rounded-full hover:shadow-xl transition-all group border border-gray-100">
        <i class="fas fa-arrow-left text-teal-500 group-hover:-translate-x-1 transition-transform"></i>
        <span class="font-semibold text-gray-800 text-sm">Kembali</span>
    </a>
</div>

<!-- Scene Info -->
<div class="fixed top-24 right-8 z-50">
    <div class="bg-white/95 backdrop-blur-sm shadow-lg rounded-xl px-6 py-3 border border-gray-100">
        <p class="text-sm text-gray-500 mb-1">Lokasi:</p>
        <h2 class="text-lg font-bold text-gray-800" id="scene-title">{{ ucwords(str_replace('-', ' ', $scene)) }}</h2>
    </div>
</div>

<!-- VR Viewer Container -->
<div id="viewer"></div>

<!-- Controls Info Panel -->
<div class="fixed bottom-8 left-1/2 -translate-x-1/2 z-40">
    <div class="bg-white/95 backdrop-blur-sm shadow-xl rounded-xl px-6 py-4 flex items-center space-x-6 border border-gray-100">
        <div class="flex items-center space-x-2">
            <div class="w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center">
                <i class="fas fa-mouse text-white"></i>
            </div>
            <span class="text-sm text-gray-700">Drag untuk melihat</span>
        </div>
        
        <div class="w-px h-8 bg-gray-300"></div>
        
        <div class="flex items-center space-x-2">
            <div class="w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center">
                <i class="fas fa-search-plus text-white"></i>
            </div>
            <span class="text-sm text-gray-700">Scroll untuk zoom</span>
        </div>
        
        <div class="w-px h-8 bg-gray-300"></div>
        
        <div class="flex items-center space-x-2">
            <div class="w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center">
                <i class="fas fa-map-marker-alt text-white"></i>
            </div>
            <span class="text-sm text-gray-700">Klik marker untuk pindah</span>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<!-- Photo Sphere Viewer JS -->
<script src="https://cdn.jsdelivr.net/npm/three@0.152.0/build/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/core@5.7.4/index.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@photo-sphere-viewer/markers-plugin@5.7.4/index.min.js"></script>

<script>
    // Scene connections - Define which scenes connect to each other
    const sceneConnections = {
        'rumah-tradisional': [
            { id: 'ladang-pertanian', name: 'Ladang Pertanian', yaw: 0.785, pitch: 0 },
            { id: 'kehidupan-sehari', name: 'Kehidupan Sehari-hari', yaw: 2.356, pitch: 0 }
        ],
        'ladang-pertanian': [
            { id: 'rumah-tradisional', name: 'Rumah Tradisional', yaw: -0.785, pitch: 0 },
            { id: 'upacara-adat', name: 'Upacara Adat', yaw: 1.571, pitch: 0 }
        ],
        'upacara-adat': [
            { id: 'ladang-pertanian', name: 'Ladang Pertanian', yaw: -1.571, pitch: 0 },
            { id: 'pemandangan-alam', name: 'Pemandangan Alam', yaw: 3.142, pitch: 0 }
        ],
        'kehidupan-sehari': [
            { id: 'rumah-tradisional', name: 'Rumah Tradisional', yaw: -2.356, pitch: 0 },
            { id: 'kerajinan-tangan', name: 'Kerajinan Tangan', yaw: 0.785, pitch: 0 }
        ],
        'kerajinan-tangan': [
            { id: 'kehidupan-sehari', name: 'Kehidupan Sehari-hari', yaw: -0.785, pitch: 0 },
            { id: 'pemandangan-alam', name: 'Pemandangan Alam', yaw: 1.571, pitch: 0 }
        ],
        'pemandangan-alam': [
            { id: 'upacara-adat', name: 'Upacara Adat', yaw: 0, pitch: 0 },
            { id: 'kerajinan-tangan', name: 'Kerajinan Tangan', yaw: -1.571, pitch: 0 }
        ]
    };

    // Info markers for each scene
    const sceneInfoMarkers = {
        'rumah-tradisional': [
            { 
                id: 'info-1', 
                yaw: 0, 
                pitch: -0.175,
                html: '<div class="psv-marker-info psv-marker-custom-hotspot"><i class="fas fa-info"></i></div>',
                tooltip: 'Rumah tradisional Suku Samin dibangun dengan bahan alami seperti bambu dan kayu. Desainnya sederhana namun fungsional, mencerminkan filosofi hidup mereka yang menghargai kesederhanaan.'
            }
        ],
        'ladang-pertanian': [
            { 
                id: 'info-1', 
                yaw: 0, 
                pitch: -0.175,
                html: '<div class="psv-marker-info psv-marker-custom-hotspot"><i class="fas fa-info"></i></div>',
                tooltip: 'Masyarakat Samin bertani secara organik dan ramah lingkungan. Mereka tidak menggunakan pestisida kimia dan selalu menjaga keseimbangan ekosistem.'
            }
        ],
        'upacara-adat': [
            { 
                id: 'info-1', 
                yaw: 0, 
                pitch: -0.175,
                html: '<div class="psv-marker-info psv-marker-custom-hotspot"><i class="fas fa-info"></i></div>',
                tooltip: 'Upacara adat Samin sangat sederhana, tanpa kemewahan. Yang terpenting adalah kebersamaan dan rasa syukur kepada Sang Pencipta.'
            }
        ]
    };

    // Current scene
    let currentScene = '{{ $scene }}';
    let viewer;
    let markersPlugin;
    let isTransitioning = false;
    
    // Format scene name
    function formatSceneName(sceneName) {
        return sceneName.split('-').map(word => 
            word.charAt(0).toUpperCase() + word.slice(1)
        ).join(' ');
    }
    
    // Initialize Photo Sphere Viewer
    function initViewer() {
        viewer = new PhotoSphereViewer.Viewer({
            container: 'viewer',
            panorama: `/images/360/${currentScene}.jpg`,
            touchmoveTwoFingers: true,
            mousewheelCtrlKey: false,
            
            // Perbaikan untuk kualitas lebih baik
            defaultZoomLvl: 40,
            minFov: 30,
            maxFov: 90,
            fisheye: false,
            
            navbar: [
                'zoom',
                'moveUp',
                'moveDown',
                'moveLeft', 
                'moveRight',
                {
                    title: 'Fullscreen',
                    content: '⛶',
                    onClick: () => {
                        if (!document.fullscreenElement) {
                            document.getElementById('viewer').requestFullscreen();
                        } else {
                            document.exitFullscreen();
                        }
                    }
                },
                'caption',
                'fullscreen'
            ],
            caption: formatSceneName(currentScene) + ' - Klik marker untuk berpindah lokasi',
            
            plugins: [
                [PhotoSphereViewer.MarkersPlugin, {
                    markers: []
                }]
            ]
        });

        markersPlugin = viewer.getPlugin(PhotoSphereViewer.MarkersPlugin);
        
        // Load markers after viewer is ready
        viewer.addEventListener('ready', () => {
            console.log('Viewer ready, adding markers...');
            loadMarkers();
        });

        // Error handling
        viewer.addEventListener('error', (err) => {
            console.error('Photo Sphere Viewer error:', err);
            showError();
        });
    }
    
    // Load markers for current scene
    function loadMarkers() {
        // Clear existing markers
        markersPlugin.clearMarkers();
        
        // Add navigation markers
        const connections = sceneConnections[currentScene] || [];
        
        connections.forEach((connection) => {
            markersPlugin.addMarker({
                id: `hotspot-${connection.id}`,
                position: { yaw: connection.yaw, pitch: connection.pitch },
                html: `<div class="psv-marker-custom-hotspot">
                    <i class="fas fa-map-marker-alt"></i>
                </div>`,
                tooltip: {
                    content: `Pindah ke: ${connection.name}`,
                    position: 'bottom center'
                },
                data: {
                    sceneId: connection.id,
                    sceneName: connection.name,
                    yaw: connection.yaw,
                    pitch: connection.pitch
                }
            });
        });

        // Add info markers
        const infoMarkers = sceneInfoMarkers[currentScene] || [];
        infoMarkers.forEach(info => {
            markersPlugin.addMarker({
                id: info.id,
                position: { yaw: info.yaw, pitch: info.pitch },
                html: info.html,
                tooltip: {
                    content: info.tooltip,
                    position: 'bottom center'
                }
            });
        });

        console.log(`Added ${connections.length} navigation markers and ${infoMarkers.length} info markers`);
        
        // Setup marker click handler
        markersPlugin.addEventListener('select-marker', handleMarkerClick);
    }
    
    // Handle marker click with smooth transition
    function handleMarkerClick({ marker }) {
        console.log('Marker clicked:', marker.id, marker.data);
        
        if (marker.data && marker.data.sceneId && !isTransitioning) {
            const targetScene = marker.data.sceneId;
            const targetName = marker.data.sceneName;
            const markerYaw = marker.data.yaw;
            const markerPitch = marker.data.pitch;
            transitionToScene(targetScene, targetName, markerYaw, markerPitch);
        }
    }
    
    // Smooth zoom + fade transition WITHOUT exiting fullscreen
    function transitionToScene(targetScene, targetName, markerYaw, markerPitch) {
        if (isTransitioning) return;
        
        isTransitioning = true;
        
        // Check if in fullscreen mode
        const isFullscreen = !!document.fullscreenElement;
        
        console.log('Starting zoom transition to:', targetName, 'Fullscreen:', isFullscreen);
        
        // Get overlay element
        const overlay = document.getElementById('transition-overlay');
        const transitionText = document.getElementById('transition-text');
        transitionText.textContent = `Menuju ${targetName}...`;
        
        // Step 1: Animate camera to look at marker (zoom in effect)
        viewer.animate({
            yaw: markerYaw,
            pitch: markerPitch,
            zoom: 80,  // Zoom in heavily
            speed: '3rpm'
        }).then(() => {
            
            // Step 2: Show black overlay (fade to black)
            overlay.classList.add('active');
            
            // Step 3: Wait for overlay fade in, then change panorama
            setTimeout(() => {
                
                // Update URL without reload
                const newUrl = `/vr/${targetScene}`;
                window.history.pushState({ scene: targetScene }, '', newUrl);
                
                // Update scene info
                document.getElementById('scene-title').textContent = targetName;
                currentScene = targetScene;
                
                // Calculate arrival position (opposite of where we clicked)
                // We should arrive from the OPPOSITE direction of the marker we clicked
                let arrivalYaw = markerYaw + Math.PI; // Add 180 degrees (opposite direction)
                let arrivalPitch = markerPitch;
                
                // Normalize yaw to be within -PI to PI range
                while (arrivalYaw > Math.PI) arrivalYaw -= 2 * Math.PI;
                while (arrivalYaw < -Math.PI) arrivalYaw += 2 * Math.PI;
                
                // Change panorama (this happens while screen is black)
                viewer.setPanorama(`/images/360/${targetScene}.jpg`, {
                    transition: false,
                    showLoader: false,
                    position: { yaw: arrivalYaw, pitch: arrivalPitch },  // Start from arrival position
                    zoom: 80  // Start zoomed in (same as we left)
                }).then(() => {
                    
                    // Update caption
                    viewer.setOption('caption', formatSceneName(targetScene) + ' - Klik marker untuk berpindah lokasi');
                    
                    // Reload markers for new scene
                    loadMarkers();
                    
                    // Step 4: Zoom out effect in new scene (from zoomed in to normal)
                    viewer.animate({
                        yaw: arrivalYaw,
                        pitch: 0,
                        zoom: 40,  // Zoom out to normal
                        speed: '2rpm'
                    }).then(() => {
                        
                        // Step 5: Fade out overlay (reveal new scene)
                        setTimeout(() => {
                            overlay.classList.remove('active');
                            isTransitioning = false;
                            
                            console.log('Transition complete!');
                            
                            // Re-enter fullscreen if was in fullscreen (safety check)
                            if (isFullscreen && !document.fullscreenElement) {
                                const viewerElement = document.querySelector('.psv-container') || document.getElementById('viewer');
                                if (viewerElement && viewerElement.requestFullscreen) {
                                    viewerElement.requestFullscreen().catch(err => {
                                        console.log('Could not re-enter fullscreen:', err);
                                    });
                                }
                            }
                            
                        }, 300);
                    });
                    
                }).catch(err => {
                    console.error('Error loading panorama:', err);
                    overlay.classList.remove('active');
                    isTransitioning = false;
                });
                
            }, 600);  // Wait for overlay fade in
        });
    }
    
    // Show error message
    function showError() {
        document.getElementById('viewer').innerHTML = `
            <div class="flex items-center justify-center h-full bg-gray-100">
                <div class="text-center p-8">
                    <i class="fas fa-exclamation-triangle text-6xl text-yellow-500 mb-4"></i>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Gambar 360° Belum Tersedia</h3>
                    <p class="text-gray-600 mb-6">Foto 360° untuk scene ini masih dalam proses pengambilan.</p>
                    <a href="{{ route('vr.index') }}" class="inline-block px-6 py-3 bg-teal-500 text-white rounded-lg hover:bg-teal-600 transition">
                        Kembali ke Galeri
                    </a>
                </div>
            </div>
        `;
    }
    
    // Handle browser back/forward buttons
    window.addEventListener('popstate', (event) => {
        if (event.state && event.state.scene) {
            const targetScene = event.state.scene;
            const targetName = formatSceneName(targetScene);
            // For back/forward, use default position
            transitionToScene(targetScene, targetName, 0, 0);
        }
    });
    
    // Initialize viewer
    initViewer();
    
    // Set initial state
    window.history.replaceState({ scene: currentScene }, '', `/vr/${currentScene}`);
</script>
@endsection