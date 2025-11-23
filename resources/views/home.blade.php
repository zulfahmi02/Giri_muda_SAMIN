@extends('layouts.app')

@section('title', 'Suku Samin - Budaya Bojonegoro')

@section('styles')
<style>
    .hero-overlay {
        background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4));
    }
    .card-hover {
        transition: all 0.3s ease;
    }
    .card-hover:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }
</style>
@endsection

@section('content')

<!-- Hero Section -->
<section id="home" class="relative h-screen flex items-center justify-center" style="background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ asset('images/bg.webp') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="text-center text-white px-6">
        <h1 class="font-poppins text-6xl md:text-8xl font-black mb-6 tracking-wider">
            PITUTUR SAMIN
        </h1>
        <p class="text-xl md:text-2xl mb-8 font-light tracking-wide">
            Laku Jujur, Sabar, Trokal Lan Nrimo
        </p>
        <a href="{{ route('vr.index') }}" class="inline-block px-8 py-4 bg-cyan-400 text-white rounded-lg hover:bg-cyan-500 transition font-semibold text-lg">
            VR 360°
        </a>
    </div>
</section>

<!-- Tentang Samin Section -->
<section id="tentang" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-5xl font-bold text-center mb-16 text-gray-800">Tentang Samin</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Card 1: Ajaran -->
            <a href="{{ route('detail.ajaran') }}" class="card-hover bg-white rounded-2xl overflow-hidden shadow-lg block">
                <div class="relative h-80">
                    <img src="images/ajaran.jpg" alt="Ajaran Samin" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-6">
                        <h3 class="text-white text-3xl font-bold mb-2">Ajaran</h3>
                        <button class="bg-gray-700/80 text-white px-4 py-2 rounded-lg w-fit text-sm hover:bg-gray-600 transition">
                            Selengkapnya
                        </button>
                    </div>
                </div>
            </a>
            
            <!-- Card 2: Sejarah -->
            <a href="{{ route('detail.sejarah') }}" class="card-hover bg-white rounded-2xl overflow-hidden shadow-lg block">
                <div class="relative h-80">
                    <img src="images/sejarah.jpg" alt="Sejarah Samin" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-6">
                        <h3 class="text-white text-3xl font-bold mb-2">Sejarah</h3>
                        <button class="bg-gray-700/80 text-white px-4 py-2 rounded-lg w-fit text-sm hover:bg-gray-600 transition">
                            Selengkapnya
                        </button>
                    </div>
                </div>
            </a>
            
            <!-- Card 3: Tokoh -->
            <a href="{{ route('detail.tokoh') }}" class="card-hover bg-white rounded-2xl overflow-hidden shadow-lg block">
                <div class="relative h-80">
                    <img src="images/tokoh.jpg" alt="Tokoh Samin" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-6">
                        <h3 class="text-white text-3xl font-bold mb-2">Tokoh</h3>
                        <button class="bg-gray-700/80 text-white px-4 py-2 rounded-lg w-fit text-sm hover:bg-gray-600 transition">
                            Selengkapnya
                        </button>
                    </div>
                </div>
            </a>
            
            <!-- Card 4: Kepercayaan -->
            <a href="{{ route('detail.kepercayaan') }}" class="card-hover bg-white rounded-2xl overflow-hidden shadow-lg block">
                <div class="relative h-80">
                    <img src="images/kepercayaan.jpg" alt="Kepercayaan Samin" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end p-6">
                        <h3 class="text-white text-3xl font-bold mb-2">Kepercayaan</h3>
                        <button class="bg-gray-700/80 text-white px-4 py-2 rounded-lg w-fit text-sm hover:bg-gray-600 transition">
                            Selengkapnya
                        </button>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Narasi Samin Section -->
<section id="narasi" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <h2 class="text-5xl font-bold mb-12 text-gray-800">Narasi Samin</h2>
        
        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
            <p class="mb-6">
                Indonesia/ Bumi Nusantara (Jawa) lama sekali dijajah oleh Belanda, sejak sebelum perang Diponegoro yang berakhir tahun 1830. Waktu itu di Jawa Timur ada Kabupaten yang Besar yaitu Sumoroto yang termasuk wilayah Tulungagung. Bupati Sumoroto yang disebut pangeran saat itu adalah Raden Mas Adipati Brotodiningrat yang berkuasa tahun 1802-1826. Urut-urutan yang pernah berkuasa di Sumoroto adalah sebagai berikut:
            </p>
            
            <ol class="list-decimal list-inside space-y-3 mb-6 ml-4">
                <li>Raden Mas Tumenggung Prawirodirdjo, tahun 1746-1751.</li>
                <li>Raden Mas Tumenggung Somonegoro, tahun 1751-1772.</li>
                <li>Raden Mas Adipati Brotodirdjo, tahun 1772-1802.</li>
                <li>Raden Mas Adipati Brotodiningrat, tahun 1802-1826.</li>
            </ol>
            
            <p class="mb-6">
                Gelar pangeran para penguasa tersebut merupakan pemberian Pemerintahan Hindia Belanda. RM Dipati Brotodiningrat juga mempunyai sebutan Pangeran Kusumaningayu, yang mengandung arti "Orang ningrat yang mendapat anugerah wahyu kerajaan untuk memimpin negara". RM Adipati Brotodiningrat mempunyai 2 (dua) anak yaitu:
            </p>
            
            <ol class="list-decimal list-inside space-y-3 mb-6 ml-4">
                <li>Raden Ronggowirjodiningrat</li>
                <li>Raden Surowidjojo</li>
            </ol>
            
            <p class="mb-6">
                Raden Ronggowirjodiningrat berkuasa di Tulungagung sebagai Bupati – Wedono pada tahun 1826 – 1844, yang diawasi Belanda dan wilayahnya semakin sempit. Raden Surowidjojo bukan bendoro Raden Mas, tetpi cukup Raden Aryo, menurut kebiasaan orang-orang Jawa Timur. Raden Surowidjojo memiliki "kemuliaan dan kewibawaan yang besar". Menurut lingkungan ningrat Jawa, Raden Surowidjojo adalah nama tua, sedang nama kecilnya adalah Raden Surosentiko atau Suratmoko yang memakai julukan "SAMIN" yang artinya " SAMI- SAMI AMIN" atau dengan arti lain bila semua setuju dianggap sah karena mendapat dukungan rakyat banyak.
            </p>
        </div>
    </div>
</section>

@endsection