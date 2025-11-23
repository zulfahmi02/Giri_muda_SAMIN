@extends('layouts.app')

@section('title', 'VR 360° - Suku Samin')

@section('content')

<!-- Hero Section -->
<section class="pt-32 pb-20 bg-gradient-to-br from-teal-50 to-cyan-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h1 class="text-5xl md:text-6xl font-bold text-gray-800 mb-4">Jelajahi Suku Samin dalam VR 360°</h1>
            <p class="text-xl text-gray-600">Klik pada thumbnail untuk merasakan pengalaman immersive</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- VR Card 1 -->
            <a href="{{ route('vr.view', 'rumah-tradisional') }}" class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group block">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=600" 
                         alt="Rumah Tradisional Samin" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-all duration-300 flex items-center justify-center">
                        <div class="bg-white/90 backdrop-blur-sm rounded-full p-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-vr-cardboard text-4xl text-teal-500"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Rumah Tradisional</h3>
                    <p class="text-gray-600 mb-4">Jelajahi arsitektur rumah tradisional Suku Samin yang unik dan sederhana</p>
                    <div class="inline-flex items-center space-x-2 text-teal-500 font-semibold group-hover:text-teal-600 transition">
                        <span>Lihat VR 360°</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
            <!-- VR Card 2 -->
            <a href="{{ route('vr.view', 'ladang-pertanian') }}" class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group block">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1500534623283-312aade485b7?w=600" 
                         alt="Ladang Suku Samin" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-all duration-300 flex items-center justify-center">
                        <div class="bg-white/90 backdrop-blur-sm rounded-full p-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-vr-cardboard text-4xl text-teal-500"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Ladang & Pertanian</h3>
                    <p class="text-gray-600 mb-4">Saksikan aktivitas pertanian dan hubungan harmonis dengan alam</p>
                    <div class="inline-flex items-center space-x-2 text-teal-500 font-semibold group-hover:text-teal-600 transition">
                        <span>Lihat VR 360°</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
            <!-- VR Card 3 -->
            <a href="{{ route('vr.view', 'upacara-adat') }}" class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group block">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?w=600" 
                         alt="Upacara Adat Samin" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-all duration-300 flex items-center justify-center">
                        <div class="bg-white/90 backdrop-blur-sm rounded-full p-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-vr-cardboard text-4xl text-teal-500"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Upacara Adat</h3>
                    <p class="text-gray-600 mb-4">Rasakan suasana upacara adat dan tradisi Suku Samin</p>
                    <div class="inline-flex items-center space-x-2 text-teal-500 font-semibold group-hover:text-teal-600 transition">
                        <span>Lihat VR 360°</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
            <!-- VR Card 4 -->
            <a href="{{ route('vr.view', 'kehidupan-sehari') }}" class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group block">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1533038590840-1cde6e668a91?w=600" 
                         alt="Kehidupan Sehari-hari" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-all duration-300 flex items-center justify-center">
                        <div class="bg-white/90 backdrop-blur-sm rounded-full p-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-vr-cardboard text-4xl text-teal-500"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Kehidupan Sehari-hari</h3>
                    <p class="text-gray-600 mb-4">Lihat bagaimana masyarakat Samin menjalani kehidupan sehari-hari</p>
                    <div class="inline-flex items-center space-x-2 text-teal-500 font-semibold group-hover:text-teal-600 transition">
                        <span>Lihat VR 360°</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
            <!-- VR Card 5 -->
            <a href="{{ route('vr.view', 'kerajinan-tangan') }}" class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group block">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1519904981063-b0cf448d479e?w=600" 
                         alt="Kerajinan Tangan" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-all duration-300 flex items-center justify-center">
                        <div class="bg-white/90 backdrop-blur-sm rounded-full p-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-vr-cardboard text-4xl text-teal-500"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Kerajinan Tangan</h3>
                    <p class="text-gray-600 mb-4">Eksplorasi kerajinan tangan tradisional Suku Samin</p>
                    <div class="inline-flex items-center space-x-2 text-teal-500 font-semibold group-hover:text-teal-600 transition">
                        <span>Lihat VR 360°</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
            <!-- VR Card 6 -->
            <a href="{{ route('vr.view', 'pemandangan-alam') }}" class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 group block">
                <div class="relative h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1501594907352-04cda38ebc29?w=600" 
                         alt="Pemandangan Alam" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-all duration-300 flex items-center justify-center">
                        <div class="bg-white/90 backdrop-blur-sm rounded-full p-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-vr-cardboard text-4xl text-teal-500"></i>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Pemandangan Alam</h3>
                    <p class="text-gray-600 mb-4">Nikmati keindahan alam di sekitar pemukiman Suku Samin</p>
                    <div class="inline-flex items-center space-x-2 text-teal-500 font-semibold group-hover:text-teal-600 transition">
                        <span>Lihat VR 360°</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </div>
                </div>
            </a>
            
        </div>
    </div>
</section>

<!-- Info Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="bg-gradient-to-r from-teal-500 to-cyan-500 rounded-3xl p-12 text-white">
            <div class="max-w-3xl mx-auto text-center">
                <i class="fas fa-info-circle text-6xl mb-6"></i>
                <h2 class="text-3xl font-bold mb-4">Tips Menikmati VR 360°</h2>
                <ul class="text-left space-y-3 text-lg">
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-check-circle mt-1"></i>
                        <span>Gunakan headphone untuk pengalaman audio yang lebih immersive</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-check-circle mt-1"></i>
                        <span>Drag & klik pada layar untuk melihat ke segala arah</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-check-circle mt-1"></i>
                        <span>Gunakan mode fullscreen untuk pengalaman maksimal</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-check-circle mt-1"></i>
                        <span>Untuk mobile: gunakan gyroscope dengan menggerakkan ponsel Anda</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection