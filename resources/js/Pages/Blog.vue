<template>
    <div>
        <Navbar />
        <section class="bg-gray-50 py-16 text-center">
            <h2 class="mb-6 text-4xl font-bold">Blog</h2>
            <p class="mb-10 text-gray-600">
                Artikel & berita terbaru seputar layanan kami.
            </p>

            <div class="grid grid-cols-1 gap-8 px-4 md:grid-cols-3 md:px-16">
                <div
                    v-for="(post, index) in blogPosts"
                    :key="index"
                    class="rounded bg-white p-6 shadow"
                >
                    <img
                        :src="post.image"
                        alt=""
                        class="mb-4 h-48 w-full rounded object-cover"
                    />
                    <h3 class="text-xl font-semibold">{{ post.title }}</h3>
                    <p class="mt-2 text-sm text-gray-600">{{ post.snippet }}</p>
                    <button class="mt-4 text-blue-500 hover:underline">
                        Baca Selengkapnya
                    </button>
                </div>
            </div>
        </section>
        <Footer />
    </div>
</template>

<script setup>
import Navbar from './Partials/Navbar.vue';
import Footer from './Partials/Footer.vue';

const blogPosts = [
    {
        title: 'Tips memilih jasa web development',
        snippet: 'Pelajari cara memilih partner IT yang tepat...',
        image: 'https://via.placeholder.com/400x300',
    },
    {
        title: 'Teknologi terbaru 2025',
        snippet: 'Berbagai tren teknologi yang akan mendominasi...',
        image: 'https://via.placeholder.com/400x300',
    },
    {
        title: 'Kenapa website penting untuk bisnis?',
        snippet: 'Website adalah wajah digital perusahaan Anda...',
        image: 'https://via.placeholder.com/400x300',
    },
];
</script>
