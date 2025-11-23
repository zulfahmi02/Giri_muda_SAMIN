@extends('layouts.detail')

@section('title', 'Ajaran Samin')

@section('content')

<!-- Back Button Fixed -->
<div class="fixed top-8 left-8 z-50">
    <a href="{{ route('home') }}#tentang" class="inline-flex items-center space-x-3 px-6 py-3 bg-white shadow-lg rounded-full hover:shadow-xl transition-all group border border-gray-100">
        <i class="fas fa-arrow-left text-teal-500 group-hover:-translate-x-1 transition-transform"></i>
        <span class="font-semibold text-gray-800">Kembali</span>
    </a>
</div>

<!-- Hero Section -->
<section class="relative h-[60vh] flex items-center justify-center" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('images/bg.webp') }}') center/cover no-repeat;">
    <div class="text-center text-white px-6">
        <h1 class="font-playfair text-6xl md:text-8xl font-black mb-6 tracking-wider">
            AJARAN SAMIN
        </h1>
        <p class="text-xl md:text-2xl font-light tracking-wide">
            Filosofi Hidup Laku Jujur, Sabar, Trokal Lan Nrimo
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 max-w-4xl">
        
        <!-- Introduction -->
        <div class="mb-16">
            <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-2xl p-8 mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Pengantar</h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Ajaran Samin merupakan filosofi hidup yang diajarkan oleh Raden Surowdjojo (Samin Surosentiko) yang menekankan pada kesederhanaan, kejujuran, dan keharmonisan dengan alam. Ajaran ini telah diwariskan turun-temurun dan menjadi pedoman hidup masyarakat Samin hingga saat ini.
                </p>
            </div>
        </div>

        <!-- Core Teachings -->
        <div class="mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-8">Ajaran Pokok</h2>
            
            <div class="space-y-8">
                <!-- Teaching 1 -->
                <div class="bg-white border-l-4 border-teal-500 p-6 rounded-r-xl shadow-md hover:shadow-lg transition">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3 flex items-center">
                        <span class="bg-teal-500 text-white rounded-full w-10 h-10 flex items-center justify-center mr-4 text-lg">1</span>
                        Laku Jujur (Berbuat Jujur)
                    </h3>
                    <p class="text-gray-700 leading-relaxed ml-14">
                        Kejujuran adalah landasan utama dalam kehidupan masyarakat Samin. Mereka percaya bahwa dengan berbuat jujur, kehidupan akan menjadi lebih damai dan harmonis. Kejujuran bukan hanya dalam perkataan, tetapi juga dalam perbuatan dan niat.
                    </p>
                </div>

                <!-- Teaching 2 -->
                <div class="bg-white border-l-4 border-teal-500 p-6 rounded-r-xl shadow-md hover:shadow-lg transition">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3 flex items-center">
                        <span class="bg-teal-500 text-white rounded-full w-10 h-10 flex items-center justify-center mr-4 text-lg">2</span>
                        Sabar (Kesabaran)
                    </h3>
                    <p class="text-gray-700 leading-relaxed ml-14">
                        Kesabaran dalam menghadapi segala cobaan hidup. Masyarakat Samin diajarkan untuk tidak mudah terpancing emosi dan selalu bersikap tenang dalam menghadapi berbagai situasi. Kesabaran juga berarti menerima segala pemberian dengan ikhlas.
                    </p>
                </div>

                <!-- Teaching 3 -->
                <div class="bg-white border-l-4 border-teal-500 p-6 rounded-r-xl shadow-md hover:shadow-lg transition">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3 flex items-center">
                        <span class="bg-teal-500 text-white rounded-full w-10 h-10 flex items-center justify-center mr-4 text-lg">3</span>
                        Trokal (Setia/Konsisten)
                    </h3>
                    <p class="text-gray-700 leading-relaxed ml-14">
                        Konsisten dalam menjalankan prinsip hidup dan komitmen. Masyarakat Samin diajarkan untuk teguh pada pendirian dan tidak mudah terpengaruh oleh hal-hal yang bertentangan dengan nilai-nilai luhur yang mereka yakini.
                    </p>
                </div>

                <!-- Teaching 4 -->
                <div class="bg-white border-l-4 border-teal-500 p-6 rounded-r-xl shadow-md hover:shadow-lg transition">
                    <h3 class="text-2xl font-bold text-gray-800 mb-3 flex items-center">
                        <span class="bg-teal-500 text-white rounded-full w-10 h-10 flex items-center justify-center mr-4 text-lg">4</span>
                        Nrimo (Menerima dengan Ikhlas)
                    </h3>
                    <p class="text-gray-700 leading-relaxed ml-14">
                        Menerima segala pemberian Tuhan dengan ikhlas dan penuh rasa syukur. Nrimo bukan berarti pasrah tanpa usaha, tetapi menerima hasil dengan lapang dada setelah berusaha maksimal. Ini mengajarkan untuk tidak serakah dan selalu bersyukur.
                    </p>
                </div>
            </div>
        </div>

        <!-- Five Prohibitions -->
        <div class="mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-8">Lima Larangan (Panca Patrap)</h2>
            
            <div class="bg-gradient-to-br from-red-50 to-orange-50 rounded-2xl p-8">
                <p class="text-gray-700 leading-relaxed mb-6">
                    Dalam ajaran Samin, terdapat lima larangan utama yang harus dihindari oleh setiap pengikutnya:
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-start space-x-4">
                        <div class="bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-times"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 mb-2">Drengki (Iri Hati)</h4>
                            <p class="text-sm text-gray-600">Larangan untuk iri terhadap keberuntungan orang lain</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-times"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 mb-2">Srei (Serakah)</h4>
                            <p class="text-sm text-gray-600">Larangan untuk tamak dan serakah dalam hidup</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-times"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 mb-2">Dahwen (Memfitnah)</h4>
                            <p class="text-sm text-gray-600">Larangan untuk memfitnah atau menjelek-jelekkan orang lain</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-times"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 mb-2">Kemeren (Pelit)</h4>
                            <p class="text-sm text-gray-600">Larangan untuk kikir dan tidak mau berbagi dengan sesama</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4 md:col-span-2">
                        <div class="bg-red-500 text-white rounded-full w-8 h-8 flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-times"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800 mb-2">Nyiyo (Egois)</h4>
                            <p class="text-sm text-gray-600">Larangan untuk mementingkan diri sendiri tanpa peduli orang lain</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Daily Practice -->
        <div class="mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-8">Praktik Dalam Kehidupan Sehari-hari</h2>
            
            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                <p class="mb-6">
                    Ajaran Samin tidak hanya berupa filosofi abstrak, tetapi diterapkan dalam kehidupan sehari-hari masyarakat Samin. Mereka menjalankan prinsip-prinsip tersebut dalam berbagai aspek kehidupan:
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 my-8">
                    <div class="bg-teal-50 rounded-xl p-6 text-center">
                        <i class="fas fa-seedling text-4xl text-teal-500 mb-4"></i>
                        <h4 class="font-bold text-gray-800 mb-2">Pertanian</h4>
                        <p class="text-sm text-gray-600">Bertani dengan cara organik dan harmonis dengan alam</p>
                    </div>
                    
                    <div class="bg-teal-50 rounded-xl p-6 text-center">
                        <i class="fas fa-hands-helping text-4xl text-teal-500 mb-4"></i>
                        <h4 class="font-bold text-gray-800 mb-2">Gotong Royong</h4>
                        <p class="text-sm text-gray-600">Saling membantu dalam kehidupan bermasyarakat</p>
                    </div>
                    
                    <div class="bg-teal-50 rounded-xl p-6 text-center">
                        <i class="fas fa-leaf text-4xl text-teal-500 mb-4"></i>
                        <h4 class="font-bold text-gray-800 mb-2">Kesederhanaan</h4>
                        <p class="text-sm text-gray-600">Hidup sederhana tanpa berlebihan</p>
                    </div>
                </div>
                
                <p>
                    Masyarakat Samin juga dikenal dengan cara hidup mereka yang sangat sederhana. Mereka menolak kemewahan dan lebih memilih untuk hidup selaras dengan alam. Ajaran ini mengajarkan bahwa kebahagiaan sejati bukan dari materi, tetapi dari ketenangan hati dan keharmonisan dengan sesama serta alam.
                </p>
            </div>
        </div>

        <!-- Quote Section -->
        <div class="bg-gradient-to-r from-teal-500 to-cyan-500 rounded-2xl p-12 text-white text-center mb-16">
            <i class="fas fa-quote-left text-5xl mb-6 opacity-50"></i>
            <p class="text-2xl md:text-3xl font-bold mb-4 italic">
                "Urip iku kudu prasojo, ojo ngapusi, ojo nyolong, lan ojo ngrusuhi"
            </p>
            <p class="text-lg opacity-90">
                Hidup itu harus jujur, jangan berbohong, jangan mencuri, dan jangan merusak
            </p>
            <i class="fas fa-quote-right text-5xl mt-6 opacity-50"></i>
        </div>

        <!-- Back Button Bottom -->
        <div class="text-center">
            <a href="{{ route('home') }}#tentang" class="inline-flex items-center space-x-3 px-8 py-4 bg-teal-500 text-white rounded-xl hover:bg-teal-600 transition-all shadow-lg hover:shadow-xl">
                <i class="fas fa-arrow-left"></i>
                <span class="font-semibold">Kembali ke Halaman Utama</span>
            </a>
        </div>
    </div>
</section>

@endsection