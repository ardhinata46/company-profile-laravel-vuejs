<template>
    <section id="home"
             class="relative min-h-screen flex items-center bg-gradient-to-br from-gray-50 to-gray-200 overflow-hidden">
        <div
            class="max-w-7xl mx-auto px-4 py-28 text-center z-10 transform transition-all duration-1000 hover:scale-105">
            <h1
                class="text-5xl md:text-7xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 leading-tight animate-fade-in-down"
            >
                Selamat Datang di <span class="text-blue-600">MyCompany</span>
            </h1>
            <p
                class="mt-8 text-xl text-gray-600 max-w-2xl mx-auto animate-fade-in-up delay-300"
            >
                Kami adalah mitra terpercaya dalam memberikan solusi terbaik untuk bisnis Anda.
            </p>
            <div
                class="mt-12 flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6">
                <a
                    href="#about"
                    class="group relative inline-flex items-center justify-center px-8 py-4 overflow-hidden font-bold rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition-all duration-300 ease-out hover:scale-105 transform"
                >
                    <span
                        class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform translate-x-full bg-blue-700 group-hover:translate-x-0"></span>
                    <span class="relative">Tentang Kami</span>
                </a>
                <a
                    href="#contact"
                    class="group relative inline-flex items-center justify-center px-8 py-4 overflow-hidden font-bold rounded-lg border-2 border-blue-600 text-blue-600 hover:text-white transition-all duration-300 ease-out hover:scale-105 transform"
                >
                    <span
                        class="absolute inset-0 w-full h-full transition-all duration-300 ease-out transform -translate-x-full bg-blue-600 group-hover:translate-x-0"></span>
                    <span class="relative">Hubungi Kami</span>
                </a>
            </div>
        </div>

        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[url('/hero-bg.jpg')] bg-cover bg-center opacity-5 animate-pulse"></div>
            <div class="absolute inset-0 bg-gradient-to-br from-blue-50/30 to-indigo-50/30 backdrop-blur-sm"></div>
        </div>

        <div
            class="absolute -bottom-32 -left-40 w-80 h-80 rounded-full bg-blue-400 mix-blend-multiply filter blur-xl opacity-20 animate-blob"></div>
        <div
            class="absolute -bottom-32 -right-40 w-80 h-80 rounded-full bg-indigo-400 mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-2000"></div>
    </section>
</template>
