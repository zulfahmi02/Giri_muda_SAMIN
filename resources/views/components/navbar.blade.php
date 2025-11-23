<nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-xl border-b border-white/20 shadow-lg">
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-grey rounded-full flex items-center justify-center shadow-lg">
                    {{-- <i class="fas fa-mountain text-white text-xl"></i> --}}
                    <img src="images/logo4.png" alt="">
                </div>
                <span class="text-xl font-bold text-gray-900">Suku Samin</span>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="{{ Request::is('/') ? 'text-teal-500 font-semibold border-b-2 border-teal-500' : 'text-gray-800 hover:text-teal-500' }} transition">BERANDA</a>
                
                <!-- Dropdown Tentang -->
                <div class="relative group">
                    <button class="text-gray-800 hover:text-teal-500 transition flex items-center space-x-1 font-medium">
                        <span>TENTANG</span>
                        <i class="fas fa-chevron-down text-xs group-hover:rotate-180 transition-transform"></i>
                    </button>
                    
                    <!-- Dropdown Menu with Glassmorphism -->
                    <div class="absolute top-full left-0 mt-2 w-56 bg-white backdrop-blur-xl rounded-xl shadow-2xl border border-gray opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:translate-y-0 translate-y-2 z-50">
                        <div class="py-2">
                            <a href="{{ route('detail.ajaran') }}" class="flex items-center space-x-3 px-4 py-3 hover:bg-white/30 transition group/item rounded-lg mx-2">
                                <div class="w-10 h-10 bg-teal-500/20 backdrop-blur-sm rounded-lg flex items-center justify-center group-hover/item:bg-teal-500 transition border border-white/20">
                                    <i class="fas fa-book text-teal-600 group-hover/item:text-white"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900 group-hover/item:text-teal-500">Ajaran</p>
                                    <p class="text-xs text-gray-700">Filosofi hidup Samin</p>
                                </div>
                            </a>
                            
                            <a href="{{ route('detail.sejarah') }}" class="flex items-center space-x-3 px-4 py-3 hover:bg-white/30 transition group/item rounded-lg mx-2">
                                <div class="w-10 h-10 bg-teal-500/20 backdrop-blur-sm rounded-lg flex items-center justify-center group-hover/item:bg-teal-500 transition border border-white/20">
                                    <i class="fas fa-history text-teal-600 group-hover/item:text-white"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900 group-hover/item:text-teal-500">Sejarah</p>
                                    <p class="text-xs text-gray-700">Perjalanan Saminisme</p>
                                </div>
                            </a>
                            
                            <a href="{{ route('detail.tokoh') }}" class="flex items-center space-x-3 px-4 py-3 hover:bg-white/30 transition group/item rounded-lg mx-2">
                                <div class="w-10 h-10 bg-teal-500/20 backdrop-blur-sm rounded-lg flex items-center justify-center group-hover/item:bg-teal-500 transition border border-white/20">
                                    <i class="fas fa-user-tie text-teal-600 group-hover/item:text-white"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900 group-hover/item:text-teal-500">Tokoh</p>
                                    <p class="text-xs text-gray-700">Pemimpin Samin</p>
                                </div>
                            </a>
                            
                            <a href="{{ route('detail.kepercayaan') }}" class="flex items-center space-x-3 px-4 py-3 hover:bg-white/30 transition group/item rounded-lg mx-2">
                                <div class="w-10 h-10 bg-teal-500/20 backdrop-blur-sm rounded-lg flex items-center justify-center group-hover/item:bg-teal-500 transition border border-white/20">
                                    <i class="fas fa-praying-hands text-teal-600 group-hover/item:text-white"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900 group-hover/item:text-teal-500">Kepercayaan</p>
                                    <p class="text-xs text-gray-700">Spiritualitas Samin</p>
                                </div>
                            </a>
                            
                            <div class="border-t border-white/20 my-2 mx-2"></div>
                            
                            <a href="{{ route('home') }}#tentang" class="flex items-center space-x-3 px-4 py-3 hover:bg-white/30 transition group/item rounded-lg mx-2">
                                <div class="w-10 h-10 bg-gray-500/20 backdrop-blur-sm rounded-lg flex items-center justify-center group-hover/item:bg-teal-500 transition border border-white/20">
                                    <i class="fas fa-th-large text-gray-600 group-hover/item:text-white"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900 group-hover/item:text-teal-500">Lihat Semua</p>
                                    <p class="text-xs text-gray-700">Kembali ke overview</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                
                <a href="{{ route('home') }}#narasi" class="text-gray-800 hover:text-teal-500 transition">NARASI</a>
                {{-- <a href="{{ route('vr.index') }}" class="{{ Request::is('vr*') ? 'text-teal-500 font-semibold border-b-2 border-teal-500' : 'text-gray-800 hover:text-teal-500' }} transition">VR 360°</a> --}}
            </div>
            
            <!-- Right Icons -->
            <div class="hidden md:flex items-center space-x-4">
                <button id="searchBtn" class="text-gray-800 hover:text-teal-500 transition">
                    <i class="fas fa-search text-lg"></i>
                </button>
                {{-- <button class="text-gray-800 hover:text-teal-500 transition">
                    <i class="fas fa-user text-lg"></i>
                </button> --}}
                <a href="{{ route('vr.index') }}" class="px-6 py-2 bg-gradient-to-r from-teal-500 to-cyan-500 text-white rounded-lg hover:shadow-xl hover:scale-105 transition-all font-medium">
                    VR 360°
                </a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-gray-800">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
        
        <!-- Mobile Menu with Glassmorphism -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4 border-t border-white/20 pt-4">
            <div class="flex flex-col space-y-3">
                <a href="{{ route('home') }}" class="{{ Request::is('/') ? 'text-teal-500 font-semibold' : 'text-gray-800' }}">HOME</a>
                
                <!-- Mobile Dropdown Tentang -->
                <div>
                    <button id="mobile-tentang-btn" class="text-gray-800 font-medium w-full text-left flex items-center justify-between">
                        <span>TENTANG</span>
                        <i class="fas fa-chevron-down text-xs transition-transform" id="mobile-tentang-icon"></i>
                    </button>
                    <div id="mobile-tentang-dropdown" class="hidden mt-2 ml-4 space-y-2 bg-white/10 backdrop-blur-lg rounded-lg p-3 border border-white/20">
                        <a href="{{ route('detail.ajaran') }}" class="block py-2 text-gray-700 hover:text-teal-500 text-sm">
                            <i class="fas fa-book w-5"></i> Ajaran
                        </a>
                        <a href="{{ route('detail.sejarah') }}" class="block py-2 text-gray-700 hover:text-teal-500 text-sm">
                            <i class="fas fa-history w-5"></i> Sejarah
                        </a>
                        <a href="{{ route('detail.tokoh') }}" class="block py-2 text-gray-700 hover:text-teal-500 text-sm">
                            <i class="fas fa-user-tie w-5"></i> Tokoh
                        </a>
                        <a href="{{ route('detail.kepercayaan') }}" class="block py-2 text-gray-700 hover:text-teal-500 text-sm">
                            <i class="fas fa-praying-hands w-5"></i> Kepercayaan
                        </a>
                        <a href="{{ route('home') }}#tentang" class="block py-2 text-gray-700 hover:text-teal-500 text-sm">
                            <i class="fas fa-th-large w-5"></i> Lihat Semua
                        </a>
                    </div>
                </div>
                
                <a href="{{ route('home') }}#narasi" class="text-gray-800">NARASI</a>
                <a href="{{ route('vr.index') }}" class="{{ Request::is('vr*') ? 'text-teal-500 font-semibold' : 'text-gray-800' }}">VR 360°</a>
                <a href="{{ route('vr.index') }}" class="px-6 py-2 bg-gradient-to-r from-teal-500 to-cyan-500 text-white rounded-lg text-center shadow-lg">
                    Explore Now
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Search Modal with Glassmorphism -->
<div id="searchModal" class="hidden fixed inset-0 z-[100] bg-black/60 backdrop-blur-md">
    <div class="container mx-auto px-6 h-full flex items-start justify-center pt-32">
        <div class="bg-white/20 backdrop-blur-2xl rounded-2xl w-full max-w-2xl shadow-2xl border border-white/30 transform transition-all">
            <!-- Header -->
            <div class="p-6 border-b border-white/20 flex items-center justify-between">
                <h3 class="text-2xl font-bold text-gray-900">Cari Konten</h3>
                <button id="closeSearchBtn" class="text-gray-700 hover:text-gray-900 transition">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
            
            <!-- Search Input -->
            <div class="p-6">
                <div class="relative">
                    <input 
                        type="text" 
                        id="searchInput" 
                        placeholder="Ketik kata kunci... (contoh: sejarah, ajaran, tokoh)"
                        class="w-full px-6 py-4 bg-white/30 backdrop-blur-sm border-2 border-white/40 rounded-xl focus:border-teal-500 focus:outline-none text-lg text-gray-900 placeholder-gray-600"
                        autofocus
                    >
                    <i class="fas fa-search absolute right-6 top-1/2 -translate-y-1/2 text-gray-600 text-xl"></i>
                </div>
            </div>
            
            <!-- Search Results -->
            <div id="searchResults" class="px-6 pb-6 max-h-96 overflow-y-auto">
                <p class="text-gray-700 text-center py-8">Mulai ketik untuk mencari...</p>
            </div>
        </div>
    </div>
</div>

<style>
/* Custom scrollbar for search results */
#searchResults::-webkit-scrollbar {
    width: 8px;
}

#searchResults::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
}

#searchResults::-webkit-scrollbar-thumb {
    background: rgba(20, 184, 166, 0.5);
    border-radius: 10px;
}

#searchResults::-webkit-scrollbar-thumb:hover {
    background: rgba(20, 184, 166, 0.7);
}

/* Enhance glassmorphism effect */
.backdrop-blur-xl {
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
}

.backdrop-blur-2xl {
    backdrop-filter: blur(24px);
    -webkit-backdrop-filter: blur(24px);
}
</style>

<script>
    // Mobile menu toggle
    document.getElementById('mobile-menu-btn').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
    
    // Mobile Tentang dropdown toggle
    document.getElementById('mobile-tentang-btn').addEventListener('click', function() {
        const dropdown = document.getElementById('mobile-tentang-dropdown');
        const icon = document.getElementById('mobile-tentang-icon');
        dropdown.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    });
    
    // Search modal
    const searchModal = document.getElementById('searchModal');
    const searchBtn = document.getElementById('searchBtn');
    const closeSearchBtn = document.getElementById('closeSearchBtn');
    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');
    
    // Open search modal
    searchBtn.addEventListener('click', function() {
        searchModal.classList.remove('hidden');
        searchInput.focus();
    });
    
    // Close search modal
    closeSearchBtn.addEventListener('click', function() {
        searchModal.classList.add('hidden');
        searchInput.value = '';
        searchResults.innerHTML = '<p class="text-gray-700 text-center py-8">Mulai ketik untuk mencari...</p>';
    });
    
    // Close on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !searchModal.classList.contains('hidden')) {
            closeSearchBtn.click();
        }
    });
    
    // Close on outside click
    searchModal.addEventListener('click', function(e) {
        if (e.target === searchModal) {
            closeSearchBtn.click();
        }
    });
    
    // Search functionality
    const searchData = [
        {
            title: 'Ajaran Samin',
            description: 'Filosofi hidup sederhana: Laku Jujur, Sabar, Trokal Lan Nrimo',
            url: '{{ route("home") }}#tentang',
            category: 'Tentang'
        },
        {
            title: 'Sejarah Samin',
            description: 'Sejarah Suku Samin dari masa Raden Surowdjojo hingga kini',
            url: '{{ route("home") }}#tentang',
            category: 'Tentang'
        },
        {
            title: 'Tokoh Samin',
            description: 'Tokoh-tokoh penting dalam sejarah Suku Samin',
            url: '{{ route("home") }}#tentang',
            category: 'Tentang'
        },
        {
            title: 'Kepercayaan Samin',
            description: 'Kepercayaan dan spiritualitas Suku Samin',
            url: '{{ route("home") }}#tentang',
            category: 'Tentang'
        },
        {
            title: 'Narasi Samin',
            description: 'Indonesia/Bumi Nusantara (Jawa) lama sekali dijajah oleh Belanda. Sejarah lengkap Suku Samin dari Kabupaten Sumoroto.',
            url: '{{ route("home") }}#narasi',
            category: 'Sejarah'
        },
        {
            title: 'Raden Surowdjojo',
            description: 'Pendiri gerakan Samin yang memiliki julukan "SAMI-SAMI AMIN"',
            url: '{{ route("home") }}#narasi',
            category: 'Tokoh'
        },
        {
            title: 'VR 360° - Rumah Tradisional',
            description: 'Jelajahi arsitektur rumah tradisional Suku Samin',
            url: '{{ route("vr.view", "rumah-tradisional") }}',
            category: 'VR'
        },
        {
            title: 'VR 360° - Ladang Pertanian',
            description: 'Saksikan aktivitas pertanian Suku Samin',
            url: '{{ route("vr.view", "ladang-pertanian") }}',
            category: 'VR'
        },
        {
            title: 'VR 360° - Upacara Adat',
            description: 'Rasakan suasana upacara adat Suku Samin',
            url: '{{ route("vr.view", "upacara-adat") }}',
            category: 'VR'
        },
        {
            title: 'VR 360° - Kehidupan Sehari-hari',
            description: 'Lihat kehidupan sehari-hari masyarakat Samin',
            url: '{{ route("vr.view", "kehidupan-sehari") }}',
            category: 'VR'
        }
    ];
    
    searchInput.addEventListener('input', function() {
        const query = this.value.toLowerCase().trim();
        
        if (query.length === 0) {
            searchResults.innerHTML = '<p class="text-gray-700 text-center py-8">Mulai ketik untuk mencari...</p>';
            return;
        }
        
        // Filter search data
        const results = searchData.filter(item => 
            item.title.toLowerCase().includes(query) || 
            item.description.toLowerCase().includes(query) ||
            item.category.toLowerCase().includes(query)
        );
        
        // Display results
        if (results.length === 0) {
            searchResults.innerHTML = `
                <div class="text-center py-8">
                    <i class="fas fa-search text-4xl text-gray-400 mb-4"></i>
                    <p class="text-gray-700">Tidak ada hasil untuk "<strong>${query}</strong>"</p>
                    <p class="text-sm text-gray-600 mt-2">Coba kata kunci lain seperti: sejarah, ajaran, tokoh, vr</p>
                </div>
            `;
        } else {
            searchResults.innerHTML = results.map(item => `
                <a href="${item.url}" class="block p-4 hover:bg-white/20 rounded-xl transition-all group mb-2 border border-transparent hover:border-white/30">
                    <div class="flex items-start space-x-4">
                        <div class="bg-teal-500/30 backdrop-blur-sm text-teal-700 rounded-lg p-3 group-hover:bg-teal-500 group-hover:text-white transition-all border border-white/20">
                            <i class="fas fa-${item.category === 'VR' ? 'vr-cardboard' : item.category === 'Tokoh' ? 'user' : 'book'} text-xl"></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center space-x-2 mb-1">
                                <h4 class="font-bold text-gray-900 group-hover:text-teal-500 transition">${item.title}</h4>
                                <span class="text-xs bg-white/30 backdrop-blur-sm text-gray-800 px-2 py-1 rounded border border-white/20">${item.category}</span>
                            </div>
                            <p class="text-sm text-gray-700 line-clamp-2">${item.description}</p>
                        </div>
                        <i class="fas fa-arrow-right text-gray-600 group-hover:text-teal-500 transition-all group-hover:translate-x-1"></i>
                    </div>
                </a>
            `).join('');
        }
    });
</script>