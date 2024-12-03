<!doctype html>
<html>
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
            <a href="#signup" class="hidden px-4 py-2 font-medium text-black rounded-md bg-snow md:inline-block hover:bg-yellow_custom font-lexend">Sign Up</a>
            <a href="#login" class="hidden px-4 py-2 font-medium text-black rounded-md bg-snow md:inline-block hover:bg-yellow_custom font-lexend">Login</a>
        </div>

        <button class="text-grey_custom md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </nav>

    <section class="flex flex-col justify-center w-full min-h-screen px-12 py-0 md:px-24 md:flex-row lg:px-48">
        <div class="flex flex-col justify-center w-full text-center md:w-1/2 md:text-left lg:items-start md:items-start">
            <h1 class="pb-1 text-3xl font-extrabold text-black md:text-4xl sm:text-4xl">Berdayakan UMKM Bersama</h1>
            <h1 class="pb-4 text-3xl font-extrabold text-yellow_custom md:text-4xl sm:text-4xl">Dodolan</h1>
            <p class="font-lexend lg:mr-4 md:mr-2">Dodolan hadir untuk mempermudah UMKM tradisional mengelola bisnis, mempromosikan produk, dan meningkatkan penjualan. Bersama, kita wujudkan ekonomi lokal yang lebih kuat!</p>
            <div class="flex items-center justify-center pt-4 space-x-4">
                <input
                    type="text"
                    placeholder="dodolan.id/yourname"
                    class="px-8 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-yellow_custom focus:outline-none"
                />
                <button
                    class="px-6 py-2 text-white rounded-lg bg-yellow_custom hover:bg-yellow_custom focus:ring-2 focus:ring-yellow-400 focus:outline-none">
                    Join Now
                </button>
            </div>
        </div>
        <div class="flex items-center justify-center w-full mt-8 md:w-1/2 md:mt-0">
            <img src="{{ asset('assets/images/iphone.png') }}" alt="Landing Page Illustration" class="h-auto max-w-full">
        </div>
    </section>


</body>
</html>
