@extends('layouts.detail')

@section('title', 'Sejarah Samin')

@section('content')

<!-- Back Button Fixed -->
<div class="fixed top-8 left-8 z-50">
    <a href="{{ route('home') }}#tentang" class="inline-flex items-center space-x-3 px-6 py-3 bg-white shadow-lg rounded-full hover:shadow-xl transition-all group border border-gray-100">
        <i class="fas fa-arrow-left text-teal-500 group-hover:-translate-x-1 transition-transform"></i>
        <span class="font-semibold text-gray-800">Kembali</span>
    </a>
</div>

<!-- Hero Section -->
<section class="relative h-[60vh] flex items-center justify-center" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1528459801416-a9e53bbf4e17?w=1920') center/cover no-repeat;">
    <div class="text-center text-white px-6">
        <h1 class="font-playfair text-6xl md:text-8xl font-black mb-6 tracking-wider">
            SEJARAH SAMIN
        </h1>
        <p class="text-xl md:text-2xl font-light tracking-wide">
            Perjalanan Panjang Gerakan Saminisme di Nusantara
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 max-w-4xl">
        
        <!-- Timeline Introduction -->
        <div class="mb-16">
            <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-2xl p-8 mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Asal Usul Suku Samin</h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Gerakan Saminisme bermula dari perlawanan terhadap penjajahan Belanda di akhir abad ke-19. Dipimpin oleh Raden Surowdjojo atau yang lebih dikenal dengan nama Samin Surosentiko, gerakan ini berkembang di wilayah Blora, Jawa Tengah, dan meluas hingga ke Bojonegoro, Jawa Timur.
                </p>
            </div>
        </div>

        <!-- Timeline -->
        <div class="mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-12">Garis Waktu Sejarah</h2>
            
            <div class="relative">
                <!-- Timeline Line -->
                <div class="absolute left-8 top-0 bottom-0 w-1 bg-teal-200"></div>
                
                <!-- Timeline Items -->
                <div class="space-y-12">
                    <!-- 1746-1826 -->
                    <div class="relative pl-20">
                        <div class="absolute left-0 top-0 w-16 h-16 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                            <i class="fas fa-crown text-2xl"></i>
                        </div>
                        <div class="bg-white border-2 border-teal-200 rounded-xl p-6 hover:shadow-lg transition">
                            <span class="text-sm font-bold text-teal-500">1746 - 1826</span>
                            <h3 class="text-2xl font-bold text-gray-800 mt-2 mb-3">Era Pangeran Bupati Sumoroto</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Masa kejayaan Kabupaten Sumoroto di Tulungagung dengan serangkaian Bupati dari dinasti Raden Mas Tumenggung Prawirodirdjo hingga Raden Mas Adipati Brotodiningrat. Periode ini menandai awal terbentuknya struktur kepemimpinan yang nantinya melahirkan gerakan Saminisme.
                            </p>
                        </div>
                    </div>

                    <!-- 1850-an -->
                    <div class="relative pl-20">
                        <div class="absolute left-0 top-0 w-16 h-16 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                            <i class="fas fa-baby text-2xl"></i>
                        </div>
                        <div class="bg-white border-2 border-teal-200 rounded-xl p-6 hover:shadow-lg transition">
                            <span class="text-sm font-bold text-teal-500">Sekitar 1859</span>
                            <h3 class="text-2xl font-bold text-gray-800 mt-2 mb-3">Kelahiran Raden Surowdjojo</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Lahir di Randublatung, Blora, Jawa Tengah dengan nama Raden Surosentiko atau Suratmoko. Ia adalah putra dari Raden Adipati Brotodiningrat, seorang bangsawan yang pernah menjabat sebagai Bupati Sumoroto. Sejak kecil, Samin sudah menunjukkan kepedulian terhadap rakyat kecil.
                            </p>
                        </div>
                    </div>

                    <!-- 1890-an -->
                    <div class="relative pl-20">
                        <div class="absolute left-0 top-0 w-16 h-16 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                            <i class="fas fa-flag text-2xl"></i>
                        </div>
                        <div class="bg-white border-2 border-teal-200 rounded-xl p-6 hover:shadow-lg transition">
                            <span class="text-sm font-bold text-teal-500">1890 - 1907</span>
                            <h3 class="text-2xl font-bold text-gray-800 mt-2 mb-3">Awal Gerakan Saminisme</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Samin Surosentiko mulai menyebarkan ajarannya sebagai bentuk perlawanan pasif terhadap penjajahan Belanda. Gerakan ini menekankan pada penolakan untuk membayar pajak, menolak kerja rodi (kerja paksa), dan menolak mengakui pemerintahan kolonial. Ajarannya cepat menyebar di kalangan petani di wilayah Blora dan sekitarnya.
                            </p>
                        </div>
                    </div>

                    <!-- 1907 -->
                    <div class="relative pl-20">
                        <div class="absolute left-0 top-0 w-16 h-16 bg-red-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                            <i class="fas fa-user-slash text-2xl"></i>
                        </div>
                        <div class="bg-white border-2 border-red-200 rounded-xl p-6 hover:shadow-lg transition">
                            <span class="text-sm font-bold text-red-500">1907</span>
                            <h3 class="text-2xl font-bold text-gray-800 mt-2 mb-3">Wafatnya Samin Surosentiko</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Raden Surowdjojo wafat di usia sekitar 48 tahun. Meskipun pemimpinnya telah tiada, gerakan Saminisme tidak berhenti. Pengikutnya terus menyebarkan dan mempraktikkan ajaran-ajarannya hingga ke berbagai daerah di Jawa.
                            </p>
                        </div>
                    </div>

                    <!-- 1920-an -->
                    <div class="relative pl-20">
                        <div class="absolute left-0 top-0 w-16 h-16 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                            <i class="fas fa-expand-arrows-alt text-2xl"></i>
                        </div>
                        <div class="bg-white border-2 border-teal-200 rounded-xl p-6 hover:shadow-lg transition">
                            <span class="text-sm font-bold text-teal-500">1920 - 1940</span>
                            <h3 class="text-2xl font-bold text-gray-800 mt-2 mb-3">Penyebaran ke Bojonegoro</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Ajaran Saminisme menyebar hingga ke Bojonegoro, Jawa Timur. Masyarakat Samin membentuk komunitas-komunitas kecil yang tetap mempertahankan nilai-nilai luhur ajaran Samin. Mereka dikenal dengan gaya hidup sederhana dan menolak segala bentuk penindasan.
                            </p>
                        </div>
                    </div>

                    <!-- Modern Era -->
                    <div class="relative pl-20">
                        <div class="absolute left-0 top-0 w-16 h-16 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg">
                            <i class="fas fa-calendar-check text-2xl"></i>
                        </div>
                        <div class="bg-white border-2 border-teal-200 rounded-xl p-6 hover:shadow-lg transition">
                            <span class="text-sm font-bold text-teal-500">Era Modern</span>
                            <h3 class="text-2xl font-bold text-gray-800 mt-2 mb-3">Suku Samin di Era Modern</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Hingga saat ini, masyarakat Samin masih mempertahankan tradisi dan ajaran leluhur mereka. Mereka tetap hidup sederhana, menjaga kelestarian alam, dan mempraktikkan nilai-nilai kejujuran dan keadilan. Komunitas Samin kini tersebar di berbagai daerah, terutama di Blora, Pati, Kudus, Rembang, dan Bojonegoro.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Key Figures -->
        <div class="mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-8">Tokoh Penting dalam Sejarah Samin</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gradient-to-br from-teal-50 to-cyan-50 rounded-xl p-6">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="w-16 h-16 bg-teal-500 rounded-full flex items-center justify-center text-white text-2xl font-bold">
                            RS
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Raden Surowdjojo</h3>
                            <p class="text-sm text-gray-600">Pendiri Gerakan Saminisme</p>
                        </div>
                    </div>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        Tokoh utama yang memulai gerakan perlawanan pasif terhadap kolonialisme Belanda melalui ajaran-ajaran filosofis yang menekankan kejujuran dan kesederhanaan.
                    </p>
                </div>

                <div class="bg-gradient-to-br from-teal-50 to-cyan-50 rounded-xl p-6">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="w-16 h-16 bg-teal-500 rounded-full flex items-center justify-center text-white text-2xl font-bold">
                            AB
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">Adipati Brotodiningrat</h3>
                            <p class="text-sm text-gray-600">Ayah Samin Surosentiko</p>
                        </div>
                    </div>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        Bupati Sumoroto yang memerintah tahun 1802-1826. Beliaulah yang menurunkan semangat kepedulian terhadap rakyat kepada Samin Surosentiko.
                    </p>
                </div>
            </div>
        </div>

        <!-- Historical Impact -->
        <div class="mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-8">Dampak Historis</h2>
            
            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                <div class="bg-white border-l-4 border-teal-500 p-6 rounded-r-xl shadow-md mb-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">
                        <i class="fas fa-shield-alt text-teal-500 mr-2"></i>
                        Perlawanan Tanpa Kekerasan
                    </h3>
                    <p>
                        Gerakan Saminisme dikenal sebagai salah satu bentuk perlawanan pasif paling unik di Indonesia. Berbeda dengan perlawanan bersenjata, masyarakat Samin melawan penjajah dengan cara menolak mengikuti peraturan kolonial dan tetap mempertahankan cara hidup tradisional mereka.
                    </p>
                </div>

                <div class="bg-white border-l-4 border-teal-500 p-6 rounded-r-xl shadow-md mb-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">
                        <i class="fas fa-leaf text-teal-500 mr-2"></i>
                        Pelestarian Budaya dan Lingkungan
                    </h3>
                    <p>
                        Hingga kini, masyarakat Samin menjadi contoh dalam melestarikan lingkungan hidup dan budaya lokal. Mereka menolak modernisasi yang merusak alam dan tetap mempertahankan kearifan lokal dalam bertani dan berinteraksi dengan alam.
                    </p>
                </div>

                <div class="bg-white border-l-4 border-teal-500 p-6 rounded-r-xl shadow-md">
                    <h3 class="text-xl font-bold text-gray-800 mb-3">
                        <i class="fas fa-book text-teal-500 mr-2"></i>
                        Inspirasi Gerakan Sosial
                    </h3>
                    <p>
                        Gerakan Saminisme menjadi inspirasi bagi berbagai gerakan sosial di Indonesia yang memperjuangkan keadilan sosial, pelestarian lingkungan, dan penolakan terhadap penindasan. Nilai-nilai yang diajarkan Samin masih relevan hingga saat ini.
                    </p>
                </div>
            </div>
        </div>

        <!-- Quote -->
        <div class="bg-gradient-to-r from-teal-500 to-cyan-500 rounded-2xl p-12 text-white text-center mb-16">
            <i class="fas fa-quote-left text-5xl mb-6 opacity-50"></i>
            <p class="text-2xl md:text-3xl font-bold mb-4 italic">
                "Wong Samin kuwi uripe prasojo, ora gelem ngapusi lan nyolong"
            </p>
            <p class="text-lg opacity-90">
                Orang Samin itu hidupnya jujur, tidak mau berbohong dan mencuri
            </p>
            <i class="fas fa-quote-right text-5xl mt-6 opacity-50"></i>
        </div>

        <!-- Back Button -->
        <div class="text-center">
            <a href="{{ route('home') }}#tentang" class="inline-flex items-center space-x-3 px-8 py-4 bg-teal-500 text-white rounded-xl hover:bg-teal-600 transition-all shadow-lg hover:shadow-xl">
                <i class="fas fa-arrow-left"></i>
                <span class="font-semibold">Kembali ke Halaman Utama</span>
            </a>
        </div>
    </div>
</section>

@endsection