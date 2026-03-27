<nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-xl border-b border-white/20 shadow-lg">
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <div class="w-12 h-12 rounded-full flex items-center justify-center shadow-lg overflow-hidden bg-white">
                    {{-- <i class="fas fa-mountain text-white text-xl"></i> --}}
                    <img src="{{ asset('images/logo4.png') }}" alt="Logo Suku Samin" class="w-full h-full object-cover">
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
                <button id="searchBtn" type="button" class="text-gray-800 hover:text-teal-500 transition">
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
            <button id="mobile-menu-btn" type="button" class="md:hidden text-gray-800">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
        
        <!-- Mobile Menu with Glassmorphism -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4 border-t border-white/20 pt-4">
            <div class="flex flex-col space-y-3">
                <a href="{{ route('home') }}" class="{{ Request::is('/') ? 'text-teal-500 font-semibold' : 'text-gray-800' }}">BERANDA</a>
                
                <!-- Mobile Dropdown Tentang -->
                <div>
                    <button id="mobile-tentang-btn" type="button" class="text-gray-800 font-medium w-full text-left flex items-center justify-between">
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
<div
    id="searchModal"
    class="hidden fixed inset-0 z-[100] bg-slate-950/55 backdrop-blur-xl"
    data-ajaran-url="{{ route('detail.ajaran') }}"
    data-sejarah-url="{{ route('detail.sejarah') }}"
    data-tokoh-url="{{ route('detail.tokoh') }}"
    data-kepercayaan-url="{{ route('detail.kepercayaan') }}"
    data-home-tentang-url="{{ route('home') }}#tentang"
    data-home-narasi-url="{{ route('home') }}#narasi"
    data-vr-rumah-url="{{ route('vr.view', 'rumah-tradisional') }}"
    data-vr-ladang-url="{{ route('vr.view', 'ladang-pertanian') }}"
    data-vr-upacara-url="{{ route('vr.view', 'upacara-adat') }}"
    data-vr-kehidupan-url="{{ route('vr.view', 'kehidupan-sehari') }}"
>
    <div class="container mx-auto px-6 h-full flex items-start justify-center pt-32">
        <div class="search-glass-panel backdrop-blur-3xl rounded-[28px] w-full max-w-2xl border border-white/45 ring-1 ring-slate-900/8 transform transition-all overflow-hidden">
            <!-- Header -->
            <div class="p-6 border-b border-slate-200/45 flex items-center justify-between">
                <h3 class="text-2xl font-bold text-slate-900">Cari Konten</h3>
                <button id="closeSearchBtn" type="button" class="grid h-11 w-11 place-items-center rounded-full bg-white/45 text-slate-500 transition hover:bg-white/70 hover:text-slate-800">
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
                        class="search-glass-input w-full px-6 py-4 backdrop-blur-sm border border-white/70 rounded-2xl focus:border-teal-500 focus:outline-none focus:ring-4 focus:ring-teal-500/15 text-lg text-slate-900 placeholder-slate-500"
                        autofocus
                    >
                    <i class="fas fa-search absolute right-6 top-1/2 -translate-y-1/2 text-slate-500 text-xl"></i>
                </div>
            </div>
            
            <!-- Search Results -->
            <div id="searchResults" class="px-6 pb-6 max-h-96 overflow-y-auto">
                <p class="text-slate-600 text-center py-8">Mulai ketik untuk mencari...</p>
            </div>
        </div>
    </div>
</div>
