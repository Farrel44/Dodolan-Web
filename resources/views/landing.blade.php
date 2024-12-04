<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <nav class="fixed top-6 left-0 right-0 z-50 mx-auto flex items-center justify-between px-8 py-4 bg-yellow_custom shadow-lg rounded-xl w-[95%] md:w-[80%]">
        <div class="text-2xl font-bold text-snow">
            <a href="#">Dodolan</a>
        </div>

        <ul class="hidden space-x-6 md:flex">
            <li><a href="#home" class="font-medium text-white hover:text-black font-lexend">Home</a></li>
            <li><a href="#features" class="font-medium text-white hover:text-black font-lexend">Features</a></li>
            <li><a href="#clients" class="font-medium text-white hover:text-black font-lexend">Client</a></li>
            <li><a href="#testimonials" class="font-medium text-white hover:text-black font-lexend">Testimonial</a></li>
        </ul>

        <div class="space-x-4">
            <a href="#signup" class="hidden px-4 py-2 font-medium text-black rounded-md bg-snow md:inline-block hover:bg-yellow_custom font-lexend transition-all duration-300">Sign Up</a>
            <a href="#login" class="hidden px-4 py-2 font-medium text-black rounded-md bg-snow md:inline-block hover:bg-yellow_custom font-lexend transition-all duration-300">Login</a>
        </div>

        <button class="text-grey_custom md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </nav>

    <section class="flex flex-col justify-center w-full h-[1024px] px-12 py-0 md:px-24 md:flex-row lg:px-48 bg-snow" id="home">
        <div class="flex flex-col justify-center w-full text-center md:w-1/2 md:text-left lg:items-start md:items-start">
            <h1 class="pb-1 text-3xl font-extrabold text-black md:text-4xl sm:text-4xl">Berdayakan UMKM Bersama</h1>
            <h1 class="pb-4 text-3xl font-extrabold text-yellow_custom md:text-4xl sm:text-4xl">Dodolan</h1>
            <p class="font-lexend sm:mr-2 lg:mr-4 md:mr-2">Dodolan hadir untuk mempermudah UMKM tradisional mengelola bisnis, mempromosikan produk, dan meningkatkan penjualan. Bersama, kita wujudkan ekonomi lokal yang lebih kuat!</p>
            <div class="flex items-center justify-center pt-4 space-x-4">
                <input
                    type="text"
                    placeholder="dodolan.id/yourname"
                    class="px-8 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-yellow_custom focus:outline-none" />
                <button
                    class="px-6 py-2 text-white rounded-lg bg-yellow_custom hover:bg-yellow_custom focus:ring-2 focus:ring-yellow-400 focus:outline-none">
                    Join Now
                </button>
            </div>
        </div>
        <div class="flex items-center justify-center mt-8 md:w-1/2 md:mt-0 ml-[250px]">
            <img src="{{ asset('assets/images/mockup.png') }}" alt="Landing Page Illustration" class="w-60 md:w-80">
        </div>
    </section>

    <section class="py-16 w-full h-[512px]">
        <div class="container mx-auto px-8">
            <h1 class="text-4xl font-bold text-center mb-12">
                Mengapa Memilih <span class="text-yellow-500">Dodolan</span>?
            </h1>
            <div class="flex justify-center items-center space-x-8 mt-[64px]">
                <!-- Bagian 1 -->
                <section class="text-center">
                    <div class="flex items-center justify-center w-16 h-16 ml-[163px] bg-gray-100 rounded-full border border-black">
                        <span class="text-2xl font-bold">1</span>
                    </div>
                    <h2 class="text-xl font-semibold mt-4">User Friendly</h2>
                    <p class="text-gray-600 mt-2">
                        Dodolan dirancang dengan antarmuka yang sederhana dan intuitif. Bahkan untuk pemilik UMKM tradisional yang kurang akrab dengan teknologi, Dodolan sangat mudah dipahami dan digunakan.
                    </p>
                </section>

                <!-- Gambar Panah -->
                <img src="{{asset('assets/images/arrow.png')}}" alt="Arrow" class="h-10 w-auto">

                <!-- Bagian 2 -->
                <section class="text-center">
                    <div class="flex items-center justify-center w-16 h-16 ml-[123px] bg-gray-100 rounded-full border border-black">
                        <span class="text-2xl font-bold">2</span>
                    </div>
                    <h2 class="text-xl font-semibold mt-4">100% Gratis</h2>
                    <p class="text-gray-600 mt-2">
                        Semua layanan Dodolan tersedia tanpa biaya. Kami berkomitmen untuk mendukung UMKM tradisional tanpa membebani mereka dengan biaya tambahan.
                    </p>
                </section>

                <!-- Gambar Panah -->
                <img src="{{asset('assets/images/arrow.png')}}" alt="Arrow" class="h-10 w-auto scale-y-[-1]">

                <!-- Bagian 3 -->
                <section class="text-center">
                    <div class="flex items-center justify-center w-16 h-16 ml-[125px] bg-gray-100 rounded-full border border-black">
                        <span class="text-2xl font-bold">3</span>
                    </div>
                    <h2 class="text-xl font-semibold mt-4">Layanan Pelanggan 24/7</h2>
                    <p class="text-gray-600 mt-2">
                        Tim Dodolan siap membantu Anda kapan saja. Dengan layanan pelanggan 24/7, Anda tidak perlu khawatir jika mengalami kendala atau memiliki pertanyaan.
                    </p>
                </section>
            </div>
        </div>
    </section>

    <section class="py-20 w-full h-[1024px] bg-snow">
        <div class="container mx-auto px-8">
            <h1 class="text-4xl font-bold text-center mb-12 mt-5">
                Tokoh Yang Telah Menggunakan <span class="text-yellow-500">Dodolan</span>
            </h1>
            <div class="-ml-4 flex flex-row columns-5 space-x-[75px]">
                <div class="items-center justify-center">
                    <img src="{{ asset('assets/images/mockup.png') }}" alt="Landing Page Illustration" class="w-60 md:w-80">
                    <h2 class="text-2xl font-bold text-center mt-5">Lorem</h2>
                </div>
                <div class="items-center justify-center">
                    <img src="{{ asset('assets/images/mockup.png') }}" alt="Landing Page Illustration" class="w-60 md:w-80">
                    <h2 class="text-2xl font-bold text-center mt-5">Lorem</h2>
                </div>
                <div class="items-center justify-center">
                    <img src="{{ asset('assets/images/mockup.png') }}" alt="Landing Page Illustration" class="w-60 md:w-80">
                    <h2 class="text-2xl font-bold text-center mt-5">Lorem</h2>
                </div>
                <div class="items-center justify-center">
                    <img src="{{ asset('assets/images/mockup.png') }}" alt="Landing Page Illustration" class="w-60 md:w-80">
                    <h2 class="text-2xl font-bold text-center mt-5">Lorem</h2>
                </div>
            </div>
        </div>
    </section>
</body>

</html>