<template>
    <section
        id="home"
        class="relative flex min-h-screen items-center overflow-hidden bg-gradient-to-br from-gray-50 to-gray-200 dark:from-gray-900 dark:to-gray-800"
    >
        <div
            class="z-10 mx-auto max-w-7xl transform px-4 py-28 text-center transition-all duration-1000 hover:scale-105"
        >
            <h1
                class="animate-fade-in-down bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-5xl font-extrabold leading-tight text-transparent md:text-7xl"
            >
                Selamat Datang di <span class="text-blue-600">MyCompany</span>
            </h1>
            <p
                class="animate-fade-in-up mx-auto mt-8 max-w-2xl text-xl text-gray-600 delay-300 dark:text-gray-300"
            >
                Kami adalah mitra terpercaya dalam memberikan solusi terbaik
                untuk bisnis Anda.
            </p>
            <div
                class="mt-12 flex flex-col items-center justify-center space-y-4 sm:flex-row sm:space-x-6 sm:space-y-0"
            >
                <a
                    href="#about"
                    class="group relative inline-flex transform items-center justify-center overflow-hidden rounded-lg bg-blue-600 px-8 py-4 font-bold text-white transition-all duration-300 ease-out hover:scale-105 hover:bg-blue-700"
                >
                    <span
                        class="absolute inset-0 h-full w-full translate-x-full transform bg-blue-700 transition-all duration-300 ease-out group-hover:translate-x-0"
                    ></span>
                    <span class="relative">Tentang Kami</span>
                </a>
                <a
                    href="#contact"
                    class="group relative inline-flex transform items-center justify-center overflow-hidden rounded-lg border-2 border-blue-600 px-8 py-4 font-bold text-blue-600 transition-all duration-300 ease-out hover:scale-105 hover:text-white dark:text-blue-400"
                >
                    <span
                        class="absolute inset-0 h-full w-full -translate-x-full transform bg-blue-600 transition-all duration-300 ease-out group-hover:translate-x-0"
                    ></span>
                    <span class="relative">Hubungi Kami</span>
                </a>
            </div>
        </div>

        <div class="absolute inset-0">
            <div
                class="absolute inset-0 animate-pulse bg-[url('/hero-bg.jpg')] bg-cover bg-center opacity-5 dark:opacity-[0.02]"
            ></div>
            <div
                class="absolute inset-0 bg-gradient-to-br from-blue-50/30 to-indigo-50/30 backdrop-blur-sm dark:from-blue-900/30 dark:to-indigo-900/30"
            ></div>
        </div>

        <div
            class="animate-blob absolute -bottom-32 -left-40 h-80 w-80 rounded-full bg-blue-400 opacity-20 mix-blend-multiply blur-xl filter dark:mix-blend-normal"
        ></div>
        <div
            class="animate-blob animation-delay-2000 absolute -bottom-32 -right-40 h-80 w-80 rounded-full bg-indigo-400 opacity-20 mix-blend-multiply blur-xl filter dark:mix-blend-normal"
        ></div>
    </section>
</template>
