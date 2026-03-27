@extends('layouts.app')

@section('title', 'VR 360° - ' . ucwords(str_replace('-', ' ', $scene)))

@section('styles')
    @vite(['resources/css/vr.css', 'resources/js/vr-viewer.js'])
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
<div
    id="viewer"
    data-scene="{{ $scene }}"
    data-gallery-url="{{ route('vr.index') }}"
    data-scene-base-url="{{ url('/vr') }}"
    data-panorama-base-url="{{ asset('images/360') }}"
></div>

<!-- Controls Info Panel -->
<div id="controls-panel" class="fixed bottom-8 left-1/2 -translate-x-1/2 z-40">
    <div class="bg-white/95 backdrop-blur-sm shadow-xl rounded-xl px-4 py-4 border border-gray-100 w-[calc(100vw-1.5rem)] max-w-4xl md:w-auto">
        <div class="grid grid-cols-1 gap-4 md:flex md:items-center md:space-x-6 md:gap-0">
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center">
                    <i class="fas fa-hand-pointer text-white"></i>
                </div>
                <span class="text-sm text-gray-700">Geser 1 jari atau drag untuk melihat</span>
            </div>

            <div class="hidden md:block w-px h-8 bg-gray-300"></div>

            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center">
                    <i class="fas fa-search-plus text-white"></i>
                </div>
                <span class="text-sm text-gray-700">Cubit atau scroll untuk zoom</span>
            </div>

            <div class="hidden md:block w-px h-8 bg-gray-300"></div>

            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center">
                    <i class="fas fa-map-marker-alt text-white"></i>
                </div>
                <span class="text-sm text-gray-700">Tap atau klik marker untuk pindah</span>
            </div>
        </div>
    </div>
</div>

@endsection
