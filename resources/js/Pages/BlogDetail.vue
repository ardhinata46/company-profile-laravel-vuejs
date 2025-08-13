<template>
    <div>
        <Navbar />

        <!-- Hero / Header Blog -->
        <section class="py-32 relative overflow-hidden bg-gradient-to-br from-blue-50 to-indigo-50 py-20 dark:from-gray-900 dark:to-gray-800">
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle, #1d4ed8 1px, transparent 1px); background-size: 22px 22px;"></div>
            <div class="relative mx-auto max-w-4xl px-4 text-center">
                <div v-motion :initial="{ opacity: 0, y: 10 }" :enter="{ opacity: 1, y: 0 }">
                    <span class="inline-block rounded-full bg-blue-600/10 px-3 py-1 text-sm font-medium text-blue-700 dark:text-blue-300">
                        {{ blog?.category || 'Kategori' }}
                    </span>
                    <h1 class="mt-4 text-4xl font-extrabold text-gray-900 dark:text-gray-100 md:text-5xl leading-tight">
                        {{ blog?.title || 'Judul Artikel' }}
                    </h1>
                    <div class="mt-3 flex flex-wrap justify-center items-center gap-3 text-sm text-gray-600 dark:text-gray-400">
                        <span>✍️ {{ blog?.author || 'Admin' }}</span>
                        <span>📅 {{ blog?.published_at || 'Tanggal tidak tersedia' }}</span>
                        <span>⏱️ {{ readingTime }} min read</span>
                        <span>👁️ {{ blog?.views || 0 }} views</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Konten Blog -->
        <section class="bg-white py-16 dark:bg-gray-900">
            <div class="mx-auto max-w-6xl px-4 grid gap-10 md:grid-cols-3">

                <!-- Artikel -->
                <article class="prose prose-lg max-w-none dark:prose-invert md:col-span-2" v-motion :initial="{ opacity: 0, y: 20 }" :enter="{ opacity: 1, y: 0 }">
                    <img :src="blog?.thumbnail || fallbackImage" alt="Thumbnail" class="mb-6 w-full rounded-xl shadow-lg" />
                    <div v-html="blog?.content || defaultContent"></div>

                    <!-- Tags -->
                    <div v-if="blog?.tags" class="mt-8 flex flex-wrap gap-2">
                        <span v-for="tag in blog.tags" :key="tag" class="rounded-full bg-gray-100 px-3 py-1 text-xs text-gray-700 dark:bg-gray-700 dark:text-gray-200">
                            #{{ tag }}
                        </span>
                    </div>

                    <!-- Share Buttons -->
                    <div class="mt-10 border-t pt-6">
                        <h4 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-3">Bagikan Artikel:</h4>
                        <div class="flex gap-3">
                            <a :href="`https://facebook.com/sharer/sharer.php?u=${currentUrl}`" target="_blank" class="p-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Facebook</a>
                            <a :href="`https://twitter.com/intent/tweet?url=${currentUrl}`" target="_blank" class="p-2 bg-sky-500 text-white rounded-lg hover:bg-sky-600">Twitter</a>
                            <a :href="`https://wa.me/?text=${currentUrl}`" target="_blank" class="p-2 bg-green-500 text-white rounded-lg hover:bg-green-600">WhatsApp</a>
                        </div>
                    </div>
                </article>

                <!-- Sidebar -->
                <aside class="space-y-6" v-motion :initial="{ opacity: 0, y: 20 }" :enter="{ opacity: 1, y: 0 }">
                    <!-- Pencarian Artikel -->
                    <div class="rounded-xl bg-gray-50 p-5 shadow dark:bg-gray-800">
                        <input
                            type="text"
                            v-model="searchQuery"
                            placeholder="🔍 Cari artikel..."
                            class="w-full border border-gray-300 dark:border-gray-600 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-gray-200"
                        />
                    </div>

                    <!-- Artikel Terbaru -->
                    <div class="rounded-xl bg-gray-50 p-5 shadow dark:bg-gray-800">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-4">🆕 Artikel Terbaru</h3>
                        <div v-for="(item, i) in recentPosts" :key="i" class="flex gap-3 items-start">
                            <img :src="item.thumbnail || fallbackThumb" class="w-16 h-16 rounded object-cover" />
                            <div>
                                <Link :href="`/blog/${item.slug}`" class="font-medium hover:underline text-gray-800 dark:text-gray-100">{{ item.title }}</Link>
                                <div class="text-xs text-gray-500">{{ item.date || 'Baru saja' }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Kategori -->
                    <div class="rounded-xl bg-gray-50 p-5 shadow dark:bg-gray-800">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-4">📂 Kategori</h3>
                        <ul class="space-y-2 text-gray-600 dark:text-gray-300">
                            <li v-for="(cat, i) in categories" :key="i">
                                <Link :href="`/blog/category/${cat.slug}`" class="hover:underline">{{ cat.name }}</Link>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </section>

        <Footer />
    </div>
</template>

<script setup>
import {computed, ref} from 'vue';
import { Link, usePage } from '@inertiajs/vue3';
import Navbar from './Partials/Navbar.vue';
import Footer from './Partials/Footer.vue';

const page = usePage();
const props = computed(() => page.props);
const blog = computed(() => props.value.blog || null);

const fallbackImage = 'https://via.placeholder.com/1200x800';
const fallbackThumb = 'https://via.placeholder.com/100';
const defaultContent = `<p>Konten artikel tidak tersedia. Silakan periksa kembali data blog.</p>`;
const currentUrl = window.location.href;

const readingTime = computed(() => {
    const text = blog.value?.content?.replace(/<[^>]+>/g, '') || '';
    const words = text.trim().split(/\s+/).length;
    return Math.ceil(words / 200); // 200 kata/menit
});

const recentPosts = computed(() => props.value.recentPosts || [
    { title: 'Tips Meningkatkan Kecepatan Website', slug: 'tips-meningkatkan-kecepatan', thumbnail: 'https://via.placeholder.com/100', date: 'Aug 10, 2025' },
    { title: 'Panduan SEO untuk Pemula', slug: 'panduan-seo', thumbnail: 'https://via.placeholder.com/100', date: 'Aug 08, 2025' },
    { title: 'Mengenal Framework Vue.js', slug: 'mengenal-vuejs', thumbnail: 'https://via.placeholder.com/100', date: 'Aug 05, 2025' },
]);

const categories = computed(() => props.value.categories || [
    { name: 'Teknologi', slug: 'teknologi' },
    { name: 'Bisnis', slug: 'bisnis' },
    { name: 'Desain', slug: 'desain' },
]);

const searchQuery = ref('');

const filteredRecentPosts = computed(() => {
    if (!searchQuery.value) return recentPosts.value;
    return recentPosts.value.filter(post =>
        post.title.toLowerCase().includes(searchQuery.value.toLowerCase())
    );
});
</script>
