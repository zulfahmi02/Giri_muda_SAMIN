import '@photo-sphere-viewer/core/index.css';
import '@photo-sphere-viewer/markers-plugin/index.css';

import { Viewer } from '@photo-sphere-viewer/core';
import { MarkersPlugin } from '@photo-sphere-viewer/markers-plugin';

const viewerElement = document.getElementById('viewer');

if (!viewerElement) {
    // VR assets are loaded on a dedicated page entry.
} else {
    const galleryUrl = viewerElement.dataset.galleryUrl;
    const sceneBaseUrl = viewerElement.dataset.sceneBaseUrl;
    const panoramaBaseUrl = viewerElement.dataset.panoramaBaseUrl;
    const sceneTitleElement = document.getElementById('scene-title');
    const transitionOverlay = document.getElementById('transition-overlay');
    const transitionText = document.getElementById('transition-text');
    const controlsPanel = document.getElementById('controls-panel');
    const isTouchDevice = window.matchMedia('(pointer: coarse)').matches
        || 'ontouchstart' in window
        || navigator.maxTouchPoints > 0;

    const sceneConnections = {
        'rumah-tradisional': [
            { id: 'ladang-pertanian', name: 'Ladang Pertanian', yaw: 0.785, pitch: 0 },
            { id: 'kehidupan-sehari', name: 'Kehidupan Sehari-hari', yaw: 2.356, pitch: 0 },
        ],
        'ladang-pertanian': [
            { id: 'rumah-tradisional', name: 'Rumah Tradisional', yaw: -0.785, pitch: 0 },
            { id: 'upacara-adat', name: 'Upacara Adat', yaw: 1.571, pitch: 0 },
        ],
        'upacara-adat': [
            { id: 'ladang-pertanian', name: 'Ladang Pertanian', yaw: -1.571, pitch: 0 },
            { id: 'pemandangan-alam', name: 'Pemandangan Alam', yaw: 3.142, pitch: 0 },
        ],
        'kehidupan-sehari': [
            { id: 'rumah-tradisional', name: 'Rumah Tradisional', yaw: -2.356, pitch: 0 },
            { id: 'kerajinan-tangan', name: 'Kerajinan Tangan', yaw: 0.785, pitch: 0 },
        ],
        'kerajinan-tangan': [
            { id: 'kehidupan-sehari', name: 'Kehidupan Sehari-hari', yaw: -0.785, pitch: 0 },
            { id: 'pemandangan-alam', name: 'Pemandangan Alam', yaw: 1.571, pitch: 0 },
        ],
        'pemandangan-alam': [
            { id: 'upacara-adat', name: 'Upacara Adat', yaw: 0, pitch: 0 },
            { id: 'kerajinan-tangan', name: 'Kerajinan Tangan', yaw: -1.571, pitch: 0 },
        ],
    };

    const sceneInfoMarkers = {
        'rumah-tradisional': [
            {
                id: 'info-1',
                yaw: 0,
                pitch: -0.175,
                html: '<div class="psv-marker-info psv-marker-custom-hotspot"><i class="fas fa-info"></i></div>',
                tooltip: 'Rumah tradisional Suku Samin dibangun dengan bahan alami seperti bambu dan kayu. Desainnya sederhana namun fungsional, mencerminkan filosofi hidup mereka yang menghargai kesederhanaan.',
            },
        ],
        'ladang-pertanian': [
            {
                id: 'info-1',
                yaw: 0,
                pitch: -0.175,
                html: '<div class="psv-marker-info psv-marker-custom-hotspot"><i class="fas fa-info"></i></div>',
                tooltip: 'Masyarakat Samin bertani secara organik dan ramah lingkungan. Mereka tidak menggunakan pestisida kimia dan selalu menjaga keseimbangan ekosistem.',
            },
        ],
        'upacara-adat': [
            {
                id: 'info-1',
                yaw: 0,
                pitch: -0.175,
                html: '<div class="psv-marker-info psv-marker-custom-hotspot"><i class="fas fa-info"></i></div>',
                tooltip: 'Upacara adat Samin sangat sederhana, tanpa kemewahan. Yang terpenting adalah kebersamaan dan rasa syukur kepada Sang Pencipta.',
            },
        ],
    };

    let currentScene = viewerElement.dataset.scene;
    let viewer;
    let markersPlugin;
    let isTransitioning = false;

    function formatSceneName(sceneName) {
        return sceneName
            .split('-')
            .map((word) => word.charAt(0).toUpperCase() + word.slice(1))
            .join(' ');
    }

    function sceneUrl(sceneName) {
        return `${sceneBaseUrl}/${sceneName}`;
    }

    function panoramaUrl(sceneName) {
        return `${panoramaBaseUrl}/${sceneName}.jpg`;
    }

    function setControlsVisible(isVisible) {
        if (!controlsPanel) {
            return;
        }

        controlsPanel.classList.toggle('hidden', !isVisible);
    }

    function destroyViewer() {
        if (!viewer) {
            return;
        }

        try {
            viewer.destroy();
        } catch (error) {
            console.warn('Failed to destroy viewer cleanly:', error);
        }

        viewer = null;
        markersPlugin = null;
    }

    function createElement(tagName, className, textContent) {
        const element = document.createElement(tagName);

        if (className) {
            element.className = className;
        }

        if (textContent !== undefined) {
            element.textContent = textContent;
        }

        return element;
    }

    function createActionLink(href, label, className) {
        const link = createElement('a', className, label);
        link.href = href;

        return link;
    }

    function showError({
        sceneName = formatSceneName(currentScene),
        message = 'Foto 360° untuk scene ini masih dalam proses pengambilan.',
        fallbackUrl = galleryUrl,
        fallbackLabel = 'Kembali ke Galeri VR',
    } = {}) {
        isTransitioning = false;
        transitionOverlay?.classList.remove('active');
        setControlsVisible(false);
        destroyViewer();

        const outer = createElement('div', 'flex items-center justify-center h-full bg-slate-100 px-4 py-10');
        const card = createElement('div', 'w-full max-w-xl rounded-3xl bg-white p-8 text-center shadow-2xl ring-1 ring-slate-200');
        const iconShell = createElement('div', 'mx-auto mb-5 flex h-20 w-20 items-center justify-center rounded-full bg-amber-100');
        const icon = createElement('i', 'fas fa-exclamation-triangle text-4xl text-amber-500');
        const eyebrow = createElement('p', 'mb-2 text-sm font-semibold uppercase tracking-[0.24em] text-slate-500', 'Panorama Error');
        const title = createElement('h3', 'mb-3 text-3xl font-bold text-slate-900', sceneName);
        const description = createElement('p', 'mx-auto max-w-md text-base leading-7 text-slate-600', message);
        const actions = createElement('div', 'mt-8 flex flex-col gap-3 sm:flex-row sm:justify-center');

        iconShell.appendChild(icon);
        actions.append(
            createActionLink(
                fallbackUrl,
                fallbackLabel,
                'inline-flex items-center justify-center rounded-full bg-teal-500 px-6 py-3 font-semibold text-white transition hover:bg-teal-600'
            ),
            createActionLink(
                galleryUrl,
                'Lihat Daftar Panorama',
                'inline-flex items-center justify-center rounded-full border border-slate-300 px-6 py-3 font-semibold text-slate-700 transition hover:border-slate-400 hover:bg-slate-50'
            )
        );

        card.append(iconShell, eyebrow, title, description, actions);
        outer.appendChild(card);
        viewerElement.replaceChildren(outer);
    }

    function loadMarkers() {
        if (!markersPlugin) {
            return;
        }

        markersPlugin.clearMarkers();

        const connections = sceneConnections[currentScene] || [];

        connections.forEach((connection) => {
            markersPlugin.addMarker({
                id: `hotspot-${connection.id}`,
                position: { yaw: connection.yaw, pitch: connection.pitch },
                html: `<div class="psv-marker-custom-hotspot"><i class="fas fa-map-marker-alt"></i></div>`,
                tooltip: {
                    content: `Pindah ke: ${connection.name}`,
                    position: 'bottom center',
                },
                data: {
                    sceneId: connection.id,
                    sceneName: connection.name,
                    yaw: connection.yaw,
                    pitch: connection.pitch,
                },
            });
        });

        const infoMarkers = sceneInfoMarkers[currentScene] || [];

        infoMarkers.forEach((info) => {
            markersPlugin.addMarker({
                id: info.id,
                position: { yaw: info.yaw, pitch: info.pitch },
                html: info.html,
                tooltip: {
                    content: info.tooltip,
                    position: 'bottom center',
                },
            });
        });
    }

    function handleMarkerClick({ marker }) {
        if (marker.data && marker.data.sceneId && !isTransitioning) {
            transitionToScene(marker.data.sceneId, marker.data.sceneName, marker.data.yaw, marker.data.pitch);
        }
    }

    function transitionToScene(targetScene, targetName, markerYaw, markerPitch) {
        if (isTransitioning || !viewer) {
            return;
        }

        isTransitioning = true;
        const previousScene = currentScene;
        const isFullscreen = !!document.fullscreenElement;

        if (transitionText) {
            transitionText.textContent = `Menuju ${targetName}...`;
        }

        viewer.animate({
            yaw: markerYaw,
            pitch: markerPitch,
            zoom: 80,
            speed: '3rpm',
        }).then(() => {
            transitionOverlay?.classList.add('active');

            setTimeout(() => {
                let arrivalYaw = markerYaw + Math.PI;
                const arrivalPitch = markerPitch;

                while (arrivalYaw > Math.PI) {
                    arrivalYaw -= 2 * Math.PI;
                }

                while (arrivalYaw < -Math.PI) {
                    arrivalYaw += 2 * Math.PI;
                }

                viewer.setPanorama(panoramaUrl(targetScene), {
                    transition: false,
                    showLoader: false,
                    position: { yaw: arrivalYaw, pitch: arrivalPitch },
                    zoom: 80,
                }).then(() => {
                    currentScene = targetScene;

                    if (sceneTitleElement) {
                        sceneTitleElement.textContent = targetName;
                    }

                    window.history.pushState({ scene: targetScene }, '', sceneUrl(targetScene));
                    viewer.setOption(
                        'caption',
                        `${formatSceneName(targetScene)}${isTouchDevice
                            ? ' - Tap marker untuk berpindah lokasi'
                            : ' - Klik marker untuk berpindah lokasi'}`
                    );
                    loadMarkers();

                    viewer.animate({
                        yaw: arrivalYaw,
                        pitch: 0,
                        zoom: 40,
                        speed: '2rpm',
                    }).then(() => {
                        setTimeout(() => {
                            transitionOverlay?.classList.remove('active');
                            isTransitioning = false;

                            if (isFullscreen && !document.fullscreenElement && viewerElement.requestFullscreen) {
                                viewerElement.requestFullscreen().catch((error) => {
                                    console.log('Could not re-enter fullscreen:', error);
                                });
                            }
                        }, 300);
                    });
                }).catch((error) => {
                    console.error('Error loading panorama:', error);
                    transitionOverlay?.classList.remove('active');
                    isTransitioning = false;
                    showError({
                        sceneName: targetName,
                        message: `Panorama untuk ${targetName} belum tersedia atau gagal dimuat.`,
                        fallbackUrl: sceneUrl(previousScene),
                        fallbackLabel: `Kembali ke ${formatSceneName(previousScene)}`,
                    });
                });
            }, 600);
        });
    }

    function initViewer() {
        setControlsVisible(true);

        viewer = new Viewer({
            container: viewerElement,
            panorama: panoramaUrl(currentScene),
            touchmoveTwoFingers: false,
            mousewheelCtrlKey: false,
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
                            viewerElement.requestFullscreen?.();
                        } else {
                            document.exitFullscreen();
                        }
                    },
                },
                'caption',
                'fullscreen',
            ],
            caption: `${formatSceneName(currentScene)}${isTouchDevice
                ? ' - Tap marker untuk berpindah lokasi'
                : ' - Klik marker untuk berpindah lokasi'}`,
            plugins: [
                [MarkersPlugin, { markers: [] }],
            ],
        });

        markersPlugin = viewer.getPlugin(MarkersPlugin);
        markersPlugin?.addEventListener('select-marker', handleMarkerClick);

        viewer.addEventListener('ready', loadMarkers);
        viewer.addEventListener('panorama-error', ({ error, panorama }) => {
            console.error('Photo Sphere Viewer panorama error:', panorama, error);
            showError({
                sceneName: formatSceneName(currentScene),
                message: `Foto 360° untuk ${formatSceneName(currentScene)} belum tersedia atau gagal dimuat.`,
                fallbackUrl: galleryUrl,
                fallbackLabel: 'Kembali ke Galeri VR',
            });
        });

        if (!isTouchDevice) {
            viewer.addEventListener('click', (data) => {
                if (!data.data.marker && !document.fullscreenElement && !isTransitioning) {
                    viewerElement.requestFullscreen?.().catch((error) => {
                        console.log('Could not enter fullscreen:', error);
                    });
                }
            });
        }
    }

    window.addEventListener('popstate', (event) => {
        if (event.state && event.state.scene) {
            const targetScene = event.state.scene;

            if (!viewer) {
                window.location.href = sceneUrl(targetScene);
                return;
            }

            transitionToScene(targetScene, formatSceneName(targetScene), 0, 0);
        }
    });

    initViewer();
    window.history.replaceState({ scene: currentScene }, '', sceneUrl(currentScene));
}
