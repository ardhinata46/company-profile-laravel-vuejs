<template>
    <footer class="bg-gradient-to-b from-gray-900 to-black py-16 text-white">
        <div
            class="container mx-auto grid grid-cols-1 gap-12 px-4 md:grid-cols-4"
        >
            <!-- Brand -->
            <div class="transform transition duration-300 hover:scale-105">
                <h2
                    class="mb-4 bg-gradient-to-r from-blue-500 to-purple-600 bg-clip-text text-3xl font-bold text-transparent"
                >
                    MyCompany
                </h2>
                <p
                    class="text-gray-400 transition duration-300 hover:text-gray-300"
                >
                    Solusi digital terpercaya untuk bisnis Anda.
                </p>
                <div class="mt-6 flex space-x-4">
                    <a
                        href="#"
                        class="text-gray-400 transition duration-300 hover:text-blue-500"
                    >
                        <i class="fab fa-facebook-f text-xl"></i>
                    </a>
                    <a
                        href="#"
                        class="text-gray-400 transition duration-300 hover:text-blue-400"
                    >
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a
                        href="#"
                        class="text-gray-400 transition duration-300 hover:text-pink-500"
                    >
                        <i class="fab fa-instagram text-xl"></i>
                    </a>
                    <a
                        href="#"
                        class="text-gray-400 transition duration-300 hover:text-blue-700"
                    >
                        <i class="fab fa-linkedin-in text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Navigation -->
            <div class="transform transition duration-300 hover:scale-105">
                <h3 class="mb-4 text-xl font-semibold text-blue-400">
                    Navigasi
                </h3>
                <ul class="space-y-3">
                    <li
                        v-for="(link, index) in [
                            'Beranda',
                            'Portfolio',
                            'Testimoni',
                            'Blog',
                            'Kontak',
                        ]"
                        :key="index"
                    >
                        <a
                            :href="
                                link === 'Beranda'
                                    ? '/'
                                    : '/' + link.toLowerCase()
                            "
                            class="group flex items-center text-gray-300 transition duration-300"
                        >
                            <span
                                class="mr-2 h-1 w-0 bg-blue-500 transition-all duration-300 group-hover:w-4"
                            ></span>
                            <span class="group-hover:text-blue-400">{{
                                link
                            }}</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Services -->
            <div class="transform transition duration-300 hover:scale-105">
                <h3 class="mb-4 text-xl font-semibold text-blue-400">
                    Layanan
                </h3>
                <ul class="space-y-3">
                    <li
                        v-for="(service, index) in [
                            'Desain Website',
                            'Pengembangan Aplikasi',
                            'Konsultasi IT',
                            'Digital Marketing',
                        ]"
                        :key="index"
                        class="flex items-center text-gray-300 transition duration-300 hover:text-blue-400"
                    >
                        <i class="fas fa-check-circle mr-2 text-blue-500"></i>
                        {{ service }}
                    </li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="transform transition duration-300 hover:scale-105">
                <h3 class="mb-4 text-xl font-semibold text-blue-400">Kontak</h3>
                <ul class="space-y-3">
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-envelope mr-3 text-blue-500"></i>
                        info@mycompany.com
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-phone mr-3 text-blue-500"></i>
                        +62 812-3456-7890
                    </li>
                    <li class="flex items-center text-gray-300">
                        <i class="fas fa-map-marker-alt mr-3 text-blue-500"></i>
                        Jakarta, Indonesia
                    </li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="mt-12 border-t border-gray-800 pt-8">
            <div class="container mx-auto px-4 text-center">
                <p class="text-sm text-gray-500">
                    &copy; {{ new Date().getFullYear() }} MyCompany. All rights
                    reserved.
                </p>
                <div
                    class="mt-4 flex justify-center space-x-6 text-sm text-gray-500"
                >
                    <a href="#" class="hover:text-blue-400">Privacy Policy</a>
                    <a href="#" class="hover:text-blue-400">Terms of Service</a>
                    <a href="#" class="hover:text-blue-400">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>
</template>

<script setup></script>

<style scoped>
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

.hover\:scale-105:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease;
}
</style>
