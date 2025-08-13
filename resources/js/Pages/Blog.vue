<template>
    <div :class="{ dark: darkMode }">
        <Navbar />

        <!-- Hero Section -->
        <section
            class="relative overflow-hidden bg-gradient-to-br from-blue-50 to-indigo-50 py-32 dark:from-gray-900 dark:to-gray-800">
            <div class="absolute inset-0 opacity-10"
                 style="background-image: radial-gradient(circle, #1d4ed8 1px, transparent 1px); background-size: 22px 22px;"></div>
            <div class="relative mx-auto max-w-7xl px-4 text-center" v-motion :initial="{ opacity: 0, y: 30 }"
                 :enter="{ opacity: 1, y: 0, transition: { duration: 800 } }">
                <h1 class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-5xl font-extrabold text-transparent md:text-6xl">
                    Blog & Artikel
                </h1>
                <p class="mx-auto mt-6 max-w-2xl text-lg text-gray-600 dark:text-gray-300">
                    Temukan inspirasi, tips, dan berita terbaru seputar dunia teknologi, bisnis, dan inovasi digital.
                </p>
            </div>
        </section>

        <!-- Blog List -->
        <section class="bg-gradient-to-b from-gray-50 to-white py-24 dark:from-gray-900 dark:to-gray-800">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-10 md:grid-cols-2 lg:grid-cols-3">
                    <div
                        v-for="(post, index) in blogPosts"
                        :key="index"
                        class="group rounded-lg bg-white shadow-lg transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl dark:bg-gray-800"
                        data-aos="fade-up"
                        data-aos-delay="100"
                    >
                        <div class="relative">
                            <img
                                :src="post.image"
                                alt=""
                                class="h-56 w-full rounded-t-lg object-cover"
                            />
                            <span
                                class="absolute left-4 top-4 rounded-full bg-blue-500 px-4 py-1 text-xs font-semibold text-white shadow"
                            >
                                {{ post.category }}
                            </span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                                {{ post.title }}
                            </h3>
                            <p class="mt-3 text-gray-600 dark:text-gray-300">{{ post.snippet }}</p>
                            <Link :href="`/blog/${slugify(post.title)}`"
                                class="mt-5 inline-block rounded-full bg-blue-500 px-5 py-2 text-sm font-semibold text-white transition hover:bg-blue-700 dark:hover:bg-blue-600"
                            >
                                Baca Selengkapnya →
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="bg-blue-600 py-16 text-center text-white dark:bg-blue-700">
            <h2 class="mb-4 text-3xl font-bold">Ingin Dapat Update Artikel Terbaru?</h2>
            <p class="mb-6 text-blue-100 dark:text-blue-200">
                Daftar ke newsletter kami dan dapatkan informasi menarik setiap minggunya.
            </p>
            <form class="flex flex-col items-center gap-4 md:flex-row md:justify-center">
                <input
                    type="email"
                    placeholder="Masukkan email Anda"
                    class="w-72 rounded-full px-4 py-2 text-gray-800 focus:outline-none dark:bg-gray-200 dark:text-gray-900"
                />
                <button
                    class="rounded-full bg-white px-6 py-2 font-semibold text-blue-600 shadow hover:bg-blue-100 dark:bg-gray-100 dark:hover:bg-gray-200"
                >
                    Daftar
                </button>
            </form>
        </section>

        <Footer />
    </div>
</template>

<script setup>
import Navbar from './Partials/Navbar.vue';
import Footer from './Partials/Footer.vue';
import {Link} from "@inertiajs/vue3";

// Sementara darkMode static true/false, nanti bisa diganti toggle
const darkMode = false;

const blogPosts = [
    {
        title: 'Tips Memilih Jasa Web Development Terbaik',
        snippet: 'Pelajari cara memilih partner IT yang tepat untuk mendukung pertumbuhan bisnis Anda di era digital.',
        image: 'https://via.placeholder.com/600x400',
        category: 'Tips & Trik',
    },
    {
        title: 'Teknologi Terbaru 2025 yang Wajib Diketahui',
        snippet: 'Berbagai tren teknologi yang akan mendominasi pasar di tahun 2025, mulai dari AI, Blockchain, hingga AR/VR.',
        image: 'https://via.placeholder.com/600x400',
        category: 'Teknologi',
    },
    {
        title: 'Kenapa Website Penting untuk Bisnis?',
        snippet: 'Website adalah wajah digital perusahaan Anda. Cari tahu kenapa website sangat penting di era modern ini.',
        image: 'https://via.placeholder.com/600x400',
        category: 'Bisnis',
    },
    {
        title: 'UI/UX Design: Rahasia Membuat Pengguna Betah',
        snippet: 'Desain yang baik bukan hanya soal estetika, tapi juga kenyamanan pengguna dalam menggunakan aplikasi atau website.',
        image: 'https://via.placeholder.com/600x400',
        category: 'Desain',
    },
    {
        title: 'SEO 2025: Strategi Meningkatkan Ranking Website',
        snippet: 'Optimasi mesin pencari terus berkembang. Pelajari strategi SEO terbaru untuk meningkatkan visibilitas bisnis Anda.',
        image: 'https://via.placeholder.com/600x400',
        category: 'SEO',
    },
    {
        title: 'Membangun Brand yang Kuat di Media Sosial',
        snippet: 'Media sosial bukan sekadar platform promosi, tapi juga alat untuk membangun hubungan dengan audiens.',
        image: 'https://via.placeholder.com/600x400',
        category: 'Branding',
    },
];

const slugify = (text) =>
    text
        .toString()
        .toLowerCase()
        .normalize('NFD').replace(/\p{Diacritic}/gu, '')
        .replace(/[^a-z0-9]+/g, '-')
        .replace(/(^-|-$)+/g, '');
</script>


<style scoped>
.group img {
    transition: transform 0.4s ease;
}
.group:hover img {
    transform: scale(1.05);
}
</style>
