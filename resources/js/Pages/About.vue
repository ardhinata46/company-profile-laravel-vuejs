<template>
    <div>
        <Navbar class="sticky top-0 z-50"/>

        <!-- Header / Intro -->
        <section
            class="relative overflow-hidden bg-gradient-to-br from-blue-50 to-indigo-50 py-32 dark:from-gray-900 dark:to-gray-800">
            <div class="absolute inset-0 opacity-10"
                 style="background-image: radial-gradient(circle, #1d4ed8 1px, transparent 1px); background-size: 22px 22px;"></div>
            <div class="relative mx-auto max-w-7xl px-4 text-center" v-motion :initial="{ opacity: 0, y: 30 }"
                 :enter="{ opacity: 1, y: 0, transition: { duration: 800 } }">
                <h1 class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-5xl font-extrabold text-transparent md:text-6xl">
                    Tentang Kami
                </h1>
                <p class="mx-auto mt-6 max-w-2xl text-lg text-gray-600 dark:text-gray-300">
                    Mengenal lebih dekat siapa kami, visi dan misi yang kami bawa, serta keunggulan yang kami tawarkan
                    kepada Anda.
                </p>
            </div>
        </section>

        <!-- Profile Perusahaan -->
        <section class="bg-white py-24 dark:bg-gray-900">
            <div class="mx-auto max-w-7xl px-4">
                <div class="grid items-center gap-12 md:grid-cols-2">
                    <div class="group relative" v-motion :initial="{ opacity: 0, x: -40 }"
                         :enter="{ opacity: 1, x: 0, transition: { duration: 1000, delay: 200 } }">
                        <div
                            class="absolute -inset-4 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 opacity-20 blur transition duration-300 group-hover:opacity-30"></div>
                        <img src="/about-image.jpg" alt="Profile Perusahaan"
                             class="relative rounded-xl shadow-xl transition duration-500 group-hover:scale-105 group-hover:shadow-2xl"/>
                    </div>
                    <div v-motion :initial="{ opacity: 0, x: 40 }"
                         :enter="{ opacity: 1, x: 0, transition: { duration: 1000, delay: 400 } }">
                        <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100 md:text-4xl">Profil
                            Perusahaan</h2>
                        <p class="mt-6 text-lg text-gray-600 dark:text-gray-300">
                            MyCompany adalah perusahaan pengembang website dan aplikasi yang berfokus pada solusi
                            digital end-to-end. Kami membantu bisnis tumbuh melalui teknologi yang andal, aman, dan
                            mudah digunakan.
                        </p>
                        <p class="mt-4 text-lg text-gray-600 dark:text-gray-300">
                            Sejak berdiri, kami telah berkolaborasi dengan berbagai industri: UMKM, perusahaan, hingga
                            startup. Pendekatan kami berpusat pada kebutuhan pengguna dengan standar kualitas tinggi.
                        </p>
                        <div class="mt-8 flex flex-wrap gap-4">
                            <span
                                class="rounded-full bg-blue-100 px-6 py-2 text-sm font-medium text-blue-700 transition duration-300 hover:bg-blue-200 dark:bg-blue-900/40 dark:text-blue-300">Berpengalaman</span>
                            <span
                                class="rounded-full bg-indigo-100 px-6 py-2 text-sm font-medium text-indigo-700 transition duration-300 hover:bg-indigo-200 dark:bg-indigo-900/40 dark:text-indigo-300">Berorientasi Hasil</span>
                            <span
                                class="rounded-full bg-emerald-100 px-6 py-2 text-sm font-medium text-emerald-700 transition duration-300 hover:bg-emerald-200 dark:bg-emerald-900/40 dark:text-emerald-300">Dukungan Profesional</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Visi & Misi -->
        <section class="bg-gradient-to-b from-gray-50 to-white py-24 dark:from-gray-900 dark:to-gray-800">
            <div class="mx-auto max-w-7xl px-4">
                <div class="mb-16 text-center" v-motion :initial="{ opacity: 0, y: 30 }"
                     :enter="{ opacity: 1, y: 0, transition: { duration: 800 } }">
                    <h2 class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-4xl font-bold text-transparent md:text-5xl">
                        Visi & Misi</h2>
                    <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-600 dark:text-gray-300">Landasan yang menuntun
                        kami dalam setiap langkah dan kolaborasi.</p>
                </div>
                <div class="grid gap-8 md:grid-cols-2">
                    <div
                        class="group rounded-2xl bg-white p-8 shadow-lg transition duration-300 hover:shadow-xl dark:bg-gray-800"
                        v-motion :initial="{ opacity: 0, y: 30 }"
                        :enter="{ opacity: 1, y: 0, transition: { duration: 800, delay: 200 } }">
                        <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">Visi</h3>
                        <p class="mt-4 text-lg text-gray-600 dark:text-gray-300">Menjadi mitra teknologi terpercaya yang
                            mendorong transformasi digital berkelanjutan untuk bisnis di seluruh Indonesia.</p>
                    </div>
                    <div
                        class="group rounded-2xl bg-white p-8 shadow-lg transition duration-300 hover:shadow-xl dark:bg-gray-800"
                        v-motion :initial="{ opacity: 0, y: 30 }"
                        :enter="{ opacity: 1, y: 0, transition: { duration: 800, delay: 400 } }">
                        <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">Misi</h3>
                        <ul class="mt-4 space-y-3 text-lg text-gray-600 dark:text-gray-300">
                            <li class="flex items-center">
                                <span class="mr-2 text-blue-600">•</span>
                                Menghadirkan produk digital yang bernilai dan mudah digunakan.
                            </li>
                            <li class="flex items-center">
                                <span class="mr-2 text-blue-600">•</span>
                                Mengutamakan kualitas, keamanan, dan performa.
                            </li>
                            <li class="flex items-center">
                                <span class="mr-2 text-blue-600">•</span>
                                Memberikan layanan konsultasi dan dukungan yang proaktif.
                            </li>
                            <li class="flex items-center">
                                <span class="mr-2 text-blue-600">•</span>
                                Berinovasi mengikuti perkembangan teknologi terbaru.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Keunggulan Kami -->
        <section class="bg-white py-24 dark:bg-gray-900">
            <div class="mx-auto max-w-7xl px-4">
                <div class="mb-16 text-center" v-motion :initial="{ opacity: 0, y: 30 }"
                     :enter="{ opacity: 1, y: 0, transition: { duration: 800 } }">
                    <h2 class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-4xl font-bold text-transparent md:text-5xl">
                        Keunggulan Kami</h2>
                    <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-600 dark:text-gray-300">Alasan kenapa klien
                        memilih kami sebagai mitra teknologi.</p>
                </div>
                <div class="grid gap-8 md:grid-cols-3">
                    <div
                        class="group rounded-2xl bg-gray-50 p-8 shadow transition duration-300 hover:shadow-xl dark:bg-gray-800"
                        v-motion :initial="{ opacity: 0, y: 20 }"
                        :enter="{ opacity: 1, y: 0, transition: { duration: 800, delay: 200 } }">
                        <h4 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Tim Berpengalaman</h4>
                        <p class="mt-4 text-gray-600 dark:text-gray-300">Engineer dan desainer berpengalaman dengan best
                            practice industri.</p>
                    </div>
                    <div
                        class="group rounded-2xl bg-gray-50 p-8 shadow transition duration-300 hover:shadow-xl dark:bg-gray-800"
                        v-motion :initial="{ opacity: 0, y: 20 }"
                        :enter="{ opacity: 1, y: 0, transition: { duration: 800, delay: 400 } }">
                        <h4 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Fokus pada Hasil</h4>
                        <p class="mt-4 text-gray-600 dark:text-gray-300">Berorientasi pada KPI dan dampak nyata bagi
                            bisnis Anda.</p>
                    </div>
                    <div
                        class="group rounded-2xl bg-gray-50 p-8 shadow transition duration-300 hover:shadow-xl dark:bg-gray-800"
                        v-motion :initial="{ opacity: 0, y: 20 }"
                        :enter="{ opacity: 1, y: 0, transition: { duration: 800, delay: 600 } }">
                        <h4 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Dukungan Berkelanjutan</h4>
                        <p class="mt-4 text-gray-600 dark:text-gray-300">Pasca peluncuran, kami sediakan maintenance dan
                            peningkatan.</p>
                    </div>
                </div>
            </div>
        </section>

        <Footer/>
    </div>
</template>

<script setup>
import Navbar from './Partials/Navbar.vue';
import Footer from './Partials/Footer.vue';
</script>
