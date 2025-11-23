@extends('layouts.detail')

@section('title', 'Tokoh Samin')

@section('content')

<!-- Back Button Fixed -->
<div class="fixed top-8 left-8 z-50">
    <a href="{{ route('home') }}#tentang" class="inline-flex items-center space-x-3 px-6 py-3 bg-white shadow-lg rounded-full hover:shadow-xl transition-all group border border-gray-100">
        <i class="fas fa-arrow-left text-teal-500 group-hover:-translate-x-1 transition-transform"></i>
        <span class="font-semibold text-gray-800">Kembali</span>
    </a>
</div>

<!-- Hero Section -->
<section class="relative h-[60vh] flex items-center justify-center" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1519904981063-b0cf448d479e?w=1920') center/cover no-repeat;">
    <div class="text-center text-white px-6">
        <h1 class="font-playfair text-6xl md:text-8xl font-black mb-6 tracking-wider">
            TOKOH SAMIN
        </h1>
        <p class="text-xl md:text-2xl font-light tracking-wide">
            Para Pemimpin dan Penerus Ajaran Saminisme
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 max-w-4xl">
        
        <!-- Introduction -->
        <div class="mb-16">
            <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-2xl p-8 mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Para Tokoh Penting</h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Gerakan Saminisme tidak akan dapat bertahan hingga saat ini tanpa peran para tokoh yang dengan gigih mempertahankan dan menyebarkan ajaran-ajaran luhur. Berikut adalah tokoh-tokoh penting dalam sejarah dan perkembangan Suku Samin.
                </p>
            </div>
        </div>

        <!-- Main Figure: Samin Surosentiko -->
        <div class="mb-16">
            <div class="bg-gradient-to-br from-teal-500 to-cyan-500 rounded-2xl p-8 text-white mb-8">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="w-48 h-48 bg-white/20 backdrop-blur rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-user-tie text-8xl text-white"></i>
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <h2 class="text-4xl font-bold mb-2">Raden Surowdjojo</h2>
                        <p class="text-xl opacity-90 mb-4">Samin Surosentiko / Suratmoko</p>
                        <p class="text-lg opacity-80">1859 - 1907</p>
                        <div class="mt-4 inline-block bg-white/20 px-4 py-2 rounded-lg">
                            <p class="text-sm font-semibold">Pendiri Gerakan Saminisme</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Biografi</h3>
                <p class="mb-4">
                    Raden Surowdjojo atau yang lebih dikenal dengan nama Samin Surosentiko, lahir sekitar tahun 1859 di Desa Ploso Kediren, Randublatung, Blora, Jawa Tengah. Ia adalah putra dari Raden Adipati Brotodiningrat, seorang bangsawan yang pernah menjabat sebagai Bupati Sumoroto (1802-1826).
                </p>
                
                <p class="mb-4">
                    Meskipun berasal dari keluarga bangsawan, Samin memilih untuk hidup dekat dengan rakyat jelata. Ia sangat peduli terhadap penderitaan petani yang ditindas oleh pemerintah kolonial Belanda melalui berbagai kebijakan yang merugikan, seperti pajak tanah yang tinggi, kerja rodi (kerja paksa), dan pengambilalihan lahan untuk perkebunan.
                </p>
                
                <h3 class="text-2xl font-bold text-gray-800 mb-4 mt-8">Perjuangan dan Ajaran</h3>
                <p class="mb-4">
                    Pada tahun 1890-an, Samin mulai menyebarkan ajarannya sebagai bentuk perlawanan terhadap kolonialisme. Metode perlawanannya unik dan damai: menolak membayar pajak, menolak kerja paksa, dan menggunakan bahasa yang "ngelu" (membingungkan) saat berhadapan dengan pejabat kolonial.
                </p>
                
                <div class="bg-teal-50 rounded-xl p-6 my-6">
                    <h4 class="font-bold text-gray-800 mb-3 text-xl">Prinsip Hidup Samin Surosentiko:</h4>
                    <ul class="space-y-2">
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-teal-500 mt-1"></i>
                            <span><strong>Laku Jujur:</strong> Hidup dengan kejujuran mutlak</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-teal-500 mt-1"></i>
                            <span><strong>Sabar:</strong> Menghadapi cobaan dengan kesabaran</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-teal-500 mt-1"></i>
                            <span><strong>Nrimo:</strong> Menerima dengan ikhlas pemberian Tuhan</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-teal-500 mt-1"></i>
                            <span><strong>Gotong Royong:</strong> Saling membantu sesama</span>
                        </li>
                    </ul>
                </div>
                
                <p class="mb-4">
                    Samin Surosentiko wafat pada tahun 1907 di usia sekitar 48 tahun. Meskipun demikian, ajaran dan semangat perlawanannya terus hidup melalui para pengikutnya yang tersebar di berbagai wilayah Jawa.
                </p>
            </div>
        </div>

        <!-- Other Important Figures -->
        <div class="mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-8">Tokoh-tokoh Lainnya</h2>
            
            <div class="space-y-6">
                <!-- Figure 2 -->
                <div class="bg-white border-2 border-teal-200 rounded-xl p-6 hover:shadow-lg transition">
                    <div class="flex items-start space-x-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-teal-400 to-cyan-400 rounded-full flex items-center justify-center text-white text-2xl font-bold flex-shrink-0">
                            AB
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Raden Adipati Brotodiningrat</h3>
                            <p class="text-sm text-gray-600 mb-3">Bupati Sumoroto (1802-1826) | Ayah Samin Surosentiko</p>
                            <p class="text-gray-700 leading-relaxed">
                                Bupati terakhir dari dinasti penguasa Sumoroto sebelum wilayahnya dikuasai penuh oleh Belanda. Beliau dikenal sebagai pemimpin yang peduli terhadap rakyat dan menanamkan nilai-nilai keadilan kepada putranya, Samin Surosentiko. Gelar "Pangeran Kusumaningayu" yang disandangnya berarti "ningrat yang mendapat anugerah wahyu kerajaan."
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Figure 3 -->
                <div class="bg-white border-2 border-teal-200 rounded-xl p-6 hover:shadow-lg transition">
                    <div class="flex items-start space-x-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-teal-400 to-cyan-400 rounded-full flex items-center justify-center text-white text-2xl font-bold flex-shrink-0">
                            RR
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Raden Ronggowirjodiningrat</h3>
                            <p class="text-sm text-gray-600 mb-3">Bupati-Wedono Tulungagung (1826-1844) | Kakak Samin</p>
                            <p class="text-gray-700 leading-relaxed">
                                Putra tertua dari Adipati Brotodiningrat yang menjadi penerus kepemimpinan di Tulungagung. Meskipun berada di bawah pengawasan Belanda dengan wilayah yang semakin sempit, ia tetap berusaha mempertahankan kesejahteraan rakyat. Hubungan dekatnya dengan Samin mempengaruhi pandangan adiknya tentang keadilan sosial.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Figure 4 -->
                <div class="bg-white border-2 border-teal-200 rounded-xl p-6 hover:shadow-lg transition">
                    <div class="flex items-start space-x-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-teal-400 to-cyan-400 rounded-full flex items-center justify-center text-white text-2xl font-bold flex-shrink-0">
                            SS
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Samin Sepuh (Sesepuh Samin)</h3>
                            <p class="text-sm text-gray-600 mb-3">Pemimpin Komunitas Samin Era Modern</p>
                            <p class="text-gray-700 leading-relaxed">
                                Para sesepuh atau tetua masyarakat Samin yang melanjutkan estafet perjuangan dan mempertahankan ajaran leluhur. Mereka berperan sebagai pemimpin spiritual dan sosial dalam komunitas, mengajarkan nilai-nilai Saminisme kepada generasi muda, dan menjadi penengah dalam berbagai persoalan masyarakat.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Figure 5 -->
                <div class="bg-white border-2 border-teal-200 rounded-xl p-6 hover:shadow-lg transition">
                    <div class="flex items-start space-x-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-teal-400 to-cyan-400 rounded-full flex items-center justify-center text-white text-2xl font-bold flex-shrink-0">
                            PG
                        </div>
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">Para Pengikut Generasi Awal</h3>
                            <p class="text-sm text-gray-600 mb-3">Penyebar Ajaran Saminisme</p>
                            <p class="text-gray-700 leading-relaxed">
                                Pengikut-pengikut setia Samin Surosentiko yang menyebarkan ajaran ke berbagai wilayah di Jawa, terutama ke daerah Pati, Kudus, Rembang, dan Bojonegoro. Mereka rela menghadapi tekanan dan penindasan dari pemerintah kolonial demi mempertahankan prinsip hidup yang diajarkan Samin.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Legacy -->
        <div class="mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-8">Warisan Para Tokoh</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gradient-to-br from-teal-50 to-cyan-50 rounded-xl p-6">
                    <i class="fas fa-users text-4xl text-teal-500 mb-4"></i>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Kepemimpinan Berbasis Komunitas</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        Para tokoh Samin mengajarkan model kepemimpinan yang tidak hirarkis dan berbasis pada kesepakatan bersama (musyawarah mufakat). Pemimpin adalah pelayan masyarakat, bukan penguasa.
                    </p>
                </div>

                <div class="bg-gradient-to-br from-teal-50 to-cyan-50 rounded-xl p-6">
                    <i class="fas fa-heart text-4xl text-teal-500 mb-4"></i>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Kepedulian Sosial</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        Kepedulian terhadap sesama, terutama kaum lemah, menjadi nilai utama yang diwariskan. Gotong royong dan saling membantu adalah implementasi nyata dari ajaran para tokoh.
                    </p>
                </div>

                <div class="bg-gradient-to-br from-teal-50 to-cyan-50 rounded-xl p-6">
                    <i class="fas fa-fist-raised text-4xl text-teal-500 mb-4"></i>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Perlawanan Tanpa Kekerasan</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        Metode perlawanan damai yang diajarkan menjadi inspirasi bagi gerakan-gerakan sosial di Indonesia. Membuktikan bahwa perubahan dapat dicapai tanpa kekerasan fisik.
                    </p>
                </div>

                <div class="bg-gradient-to-br from-teal-50 to-cyan-50 rounded-xl p-6">
                    <i class="fas fa-seedling text-4xl text-teal-500 mb-4"></i>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Harmoni dengan Alam</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        Para tokoh mengajarkan untuk hidup selaras dengan alam, tidak eksploitatif. Menjaga kelestarian lingkungan adalah bagian dari tanggung jawab spiritual.
                    </p>
                </div>
            </div>
        </div>

        <!-- Quote -->
        <div class="bg-gradient-to-r from-teal-500 to-cyan-500 rounded-2xl p-12 text-white text-center mb-16">
            <i class="fas fa-quote-left text-5xl mb-6 opacity-50"></i>
            <p class="text-2xl md:text-3xl font-bold mb-4 italic">
                "Ojo ngapusi, ojo nyolong, ojo maido, ojo ngamuk"
            </p>
            <p class="text-lg opacity-90">
                Jangan berbohong, jangan mencuri, jangan berzina, jangan marah-marah
            </p>
            <p class="text-sm opacity-75 mt-4">- Ajaran Samin Surosentiko -</p>
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