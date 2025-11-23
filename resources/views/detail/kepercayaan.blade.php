@extends('layouts.detail')

@section('title', 'Kepercayaan Samin')

@section('content')

<!-- Back Button Fixed -->
<div class="fixed top-8 left-8 z-50">
    <a href="{{ route('home') }}#tentang" class="inline-flex items-center space-x-3 px-6 py-3 bg-white shadow-lg rounded-full hover:shadow-xl transition-all group border border-gray-100">
        <i class="fas fa-arrow-left text-teal-500 group-hover:-translate-x-1 transition-transform"></i>
        <span class="font-semibold text-gray-800">Kembali</span>
    </a>
</div>

<!-- Hero Section -->
<section class="relative h-[60vh] flex items-center justify-center" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.unsplash.com/photo-1518709268805-4e9042af9f23?w=1920') center/cover no-repeat;">
    <div class="text-center text-white px-6">
        <h1 class="font-playfair text-6xl md:text-8xl font-black mb-6 tracking-wider">
            KEPERCAYAAN SAMIN
        </h1>
        <p class="text-xl md:text-2xl font-light tracking-wide">
            Spiritualitas dan Pandangan Hidup Masyarakat Samin
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6 max-w-4xl">
        
        <!-- Introduction -->
        <div class="mb-16">
            <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-2xl p-8 mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Tentang Kepercayaan Samin</h2>
                <p class="text-lg text-gray-700 leading-relaxed">
                    Kepercayaan Samin atau yang dikenal dengan istilah "Agama Adam" merupakan sistem kepercayaan yang diajarkan oleh Samin Surosentiko. Kepercayaan ini menekankan pada kesederhanaan, kejujuran, dan hubungan harmonis antara manusia dengan Sang Pencipta, sesama manusia, dan alam semesta.
                </p>
            </div>
        </div>

        <!-- Core Beliefs -->
        <div class="mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-8">Konsep Ketuhanan</h2>
            
            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                <div class="bg-white border-2 border-teal-200 rounded-xl p-8 mb-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-star text-teal-500 mr-3"></i>
                        Sang Hyang Wenang
                    </h3>
                    <p class="mb-4">
                        Masyarakat Samin menyebut Tuhan dengan sebutan "Sang Hyang Wenang" atau "Gusti Kang Maha Kuwasa" (Tuhan Yang Maha Kuasa). Mereka percaya bahwa Tuhan adalah pencipta alam semesta dan segala isinya, yang mengatur kehidupan dengan adil dan bijaksana.
                    </p>
                    <div class="bg-teal-50 rounded-lg p-4 mt-4">
                        <p class="text-sm italic">
                            "Gusti ora sare, Gusti tansah ngawasi anak putune kabeh" <br>
                            <span class="text-gray-600">(Tuhan tidak tidur, Tuhan selalu mengawasi semua ciptaan-Nya)</span>
                        </p>
                    </div>
                </div>

                <div class="bg-white border-2 border-teal-200 rounded-xl p-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-praying-hands text-teal-500 mr-3"></i>
                        Cara Beribadah
                    </h3>
                    <p class="mb-4">
                        Berbeda dengan agama formal, masyarakat Samin tidak memiliki ritual ibadah yang terstruktur seperti salat atau kebaktian. Bagi mereka, ibadah adalah menjalani kehidupan sehari-hari dengan jujur, berbuat baik, dan menjaga keharmonisan dengan alam.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-teal-500 mt-1"></i>
                            <span><strong>Nglakoni Kabecikan</strong> - Melakukan kebaikan dalam setiap tindakan</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-teal-500 mt-1"></i>
                            <span><strong>Temen lan Jujur</strong> - Hidup dengan kejujuran mutlak</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-teal-500 mt-1"></i>
                            <span><strong>Ngormati Alam</strong> - Menghormati dan menjaga alam</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Philosophy of Life -->
        <div class="mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-8">Filosofi Hidup</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Philosophy 1 -->
                <div class="bg-gradient-to-br from-teal-50 to-cyan-50 rounded-xl p-6">
                    <div class="bg-teal-500 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-balance-scale text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Keseimbangan Hidup</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        Masyarakat Samin percaya pada pentingnya keseimbangan dalam hidup. Tidak berlebihan dalam hal materi, tidak juga kekurangan. Keseimbangan antara dunia dan akhirat, antara kebutuhan pribadi dan kepentingan bersama.
                    </p>
                </div>

                <!-- Philosophy 2 -->
                <div class="bg-gradient-to-br from-teal-50 to-cyan-50 rounded-xl p-6">
                    <div class="bg-teal-500 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-leaf text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Menyatu dengan Alam</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        Alam dipandang sebagai ciptaan Tuhan yang harus dijaga dan dihormati. Manusia adalah bagian dari alam, bukan penguasa alam. Oleh karena itu, eksploitasi berlebihan terhadap alam adalah dosa.
                    </p>
                </div>

                <!-- Philosophy 3 -->
                <div class="bg-gradient-to-br from-teal-50 to-cyan-50 rounded-xl p-6">
                    <div class="bg-teal-500 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-heart text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Kasih Sayang Universal</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        Mengasihi semua makhluk ciptaan Tuhan tanpa membeda-bedakan. Kasih sayang tidak hanya kepada sesama manusia, tetapi juga kepada hewan, tumbuhan, dan seluruh alam.
                    </p>
                </div>

                <!-- Philosophy 4 -->
                <div class="bg-gradient-to-br from-teal-50 to-cyan-50 rounded-xl p-6">
                    <div class="bg-teal-500 w-16 h-16 rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-hands-helping text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Gotong Royong</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">
                        Kehidupan adalah tentang saling membantu dan bekerja sama. Tidak ada yang bisa hidup sendiri, semua saling membutuhkan. Gotong royong adalah implementasi nyata dari kepedulian sosial.
                    </p>
                </div>
            </div>
        </div>

        <!-- Life After Death -->
        <div class="mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-8">Pandangan tentang Kematian</h2>
            
            <div class="bg-white border-l-4 border-teal-500 p-6 rounded-r-xl shadow-md mb-6">
                <h3 class="text-xl font-bold text-gray-800 mb-3">Konsep "Mulih Asal"</h3>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Masyarakat Samin percaya bahwa kematian adalah proses "mulih asal" atau kembali ke asal. Manusia berasal dari tanah dan akan kembali ke tanah. Roh akan kembali kepada Sang Pencipta untuk mempertanggungjawabkan segala perbuatannya di dunia.
                </p>
                <div class="bg-teal-50 rounded-lg p-4">
                    <p class="text-sm italic text-gray-700">
                        "Saka lemah bali menyang lemah, nanging nyawa bali menyang Gusti"<br>
                        <span class="text-gray-600">(Dari tanah kembali ke tanah, tetapi jiwa kembali kepada Tuhan)</span>
                    </p>
                </div>
            </div>

            <div class="bg-white border-l-4 border-teal-500 p-6 rounded-r-xl shadow-md">
                <h3 class="text-xl font-bold text-gray-800 mb-3">Kehidupan Setelah Mati</h3>
                <p class="text-gray-700 leading-relaxed">
                    Mereka percaya bahwa kehidupan setelah mati ditentukan oleh perbuatan semasa hidup. Orang yang hidup jujur, berbuat baik, dan menjaga keharmonisan akan mendapat tempat yang baik di sisi Tuhan. Sebaliknya, yang berbuat jahat akan mendapat balasan setimpal.
                </p>
            </div>
        </div>

        <!-- Rituals and Traditions -->
        <div class="mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-8">Ritual dan Tradisi</h2>
            
            <div class="space-y-6">
                <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-xl p-6">
                    <div class="flex items-start space-x-4">
                        <i class="fas fa-ring text-3xl text-teal-500 mt-1"></i>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Pernikahan Samin</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Pernikahan dalam masyarakat Samin sangat sederhana. Tidak ada mas kawin, tidak ada pesta besar. Cukup dengan kesepakatan kedua belah pihak dan diumumkan kepada masyarakat. Yang penting adalah komitmen untuk hidup bersama dengan jujur dan saling menghormati.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-xl p-6">
                    <div class="flex items-start space-x-4">
                        <i class="fas fa-baby text-3xl text-teal-500 mt-1"></i>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Kelahiran</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Kelahiran anak dipandang sebagai anugerah dari Tuhan. Tidak ada ritual khusus yang rumit. Bayi diberi nama sederhana dan diperkenalkan kepada masyarakat. Orang tua bertanggung jawab untuk mendidik anak dengan nilai-nilai kejujuran dan kesederhanaan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-xl p-6">
                    <div class="flex items-start space-x-4">
                        <i class="fas fa-cross text-3xl text-teal-500 mt-1"></i>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Upacara Kematian</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Jenazah dimakamkan dengan cara yang sangat sederhana. Tidak ada batu nisan yang megah, hanya tanda sederhana. Mereka percaya bahwa semua manusia sama di hadapan Tuhan, sehingga tidak perlu membedakan antara yang kaya dan miskin dalam kematian.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-xl p-6">
                    <div class="flex items-start space-x-4">
                        <i class="fas fa-seedling text-3xl text-teal-500 mt-1"></i>
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Syukuran Panen</h3>
                            <p class="text-gray-700 leading-relaxed">
                                Setelah panen, masyarakat Samin mengadakan syukuran sederhana sebagai ungkapan terima kasih kepada Tuhan atas hasil bumi. Mereka berbagi hasil panen dengan tetangga dan yang membutuhkan sebagai wujud rasa syukur dan kepedulian sosial.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Relationship with Other Religions -->
        <div class="mb-16">
            <h2 class="text-4xl font-bold text-gray-800 mb-8">Toleransi Beragama</h2>
            
            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                <p class="mb-4">
                    Meskipun memiliki kepercayaan sendiri, masyarakat Samin sangat toleran terhadap agama lain. Mereka percaya bahwa semua agama pada dasarnya mengajarkan kebaikan dan menuju kepada Tuhan Yang Sama, hanya caranya yang berbeda.
                </p>
                
                <div class="bg-gradient-to-br from-teal-500 to-cyan-500 rounded-xl p-8 text-white my-6">
                    <h3 class="text-2xl font-bold mb-4">Prinsip Toleransi:</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-check text-white mt-1"></i>
                            <span>Menghormati pilihan agama setiap orang</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-check text-white mt-1"></i>
                            <span>Tidak memaksakan kepercayaan kepada orang lain</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-check text-white mt-1"></i>
                            <span>Hidup rukun dengan pemeluk agama lain</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-check text-white mt-1"></i>
                            <span>Fokus pada kesamaan nilai-nilai kebaikan</span>
                        </li>
                    </ul>
                </div>

                <p>
                    Banyak masyarakat Samin yang menikah dengan pemeluk agama lain dan tetap hidup harmonis. Mereka percaya bahwa yang terpenting adalah substansi kebaikan, bukan formalitas ritual.
                </p>
            </div>
        </div>

        <!-- Quote -->
        <div class="bg-gradient-to-r from-teal-500 to-cyan-500 rounded-2xl p-12 text-white text-center mb-16">
            <i class="fas fa-quote-left text-5xl mb-6 opacity-50"></i>
            <p class="text-2xl md:text-3xl font-bold mb-4 italic">
                "Agama iku ateges ngudi prayoga, nglakoni kabecikan"
            </p>
            <p class="text-lg opacity-90">
                Agama itu artinya menuju kebaikan, melakukan perbuatan baik
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