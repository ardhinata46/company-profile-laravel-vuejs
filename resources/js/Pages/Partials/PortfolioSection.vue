<template>
    <section id="portfolio"
             class="relative bg-gradient-to-b from-white to-gray-50 dark:from-gray-900 dark:to-gray-800 py-24">
        <div class="mx-auto max-w-7xl px-4">
            <!-- Header -->
            <div
                class="mb-14 text-center"
                v-motion
                :initial="{ opacity: 0, y: 50 }"
                :enter="{ opacity: 1, y: 0 }"
                :duration="800"
            >
                <h2 class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-4xl font-bold text-transparent md:text-5xl dark:from-blue-300 dark:to-indigo-300">
                    Portfolio
                </h2>
                <p class="mx-auto mt-6 max-w-2xl text-gray-600 dark:text-gray-300">
                    Beberapa proyek pilihan yang telah kami kerjakan.
                </p>

                <!-- Category Filter -->
                <div class="flex justify-center gap-4 mt-6">
                    <button
                        @click="selectedCategory = null"
                        :class="[
                            'px-4 py-2 rounded-full transition-colors',
                            selectedCategory === null
                                ? 'bg-blue-600 text-white dark:bg-blue-500'
                                : 'bg-gray-200 text-gray-700 hover:bg-blue-600 hover:text-white dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-blue-500'
                        ]"
                    >
                        Semua
                    </button>
                    <button
                        v-for="category in categories"
                        :key="category"
                        @click="selectedCategory = category"
                        :class="[
                            'px-4 py-2 rounded-full transition-colors',
                            selectedCategory === category
                                ? 'bg-blue-600 text-white dark:bg-blue-500'
                                : 'bg-gray-200 text-gray-700 hover:bg-blue-600 hover:text-white dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-blue-500'
                        ]"
                    >
                        {{ category }}
                    </button>
                </div>
            </div>

            <!-- Grid -->
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <article
                    v-for="(item, index) in filteredPortfolios.slice(0,6)"
                    :key="index"
                    class="group overflow-hidden rounded-2xl bg-white p-4 shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl dark:bg-gray-800"
                    v-motion
                    :initial="{ opacity: 0, y: 50 }"
                    :enter="{ opacity: 1, y: 0 }"
                    :delay="index * 150"
                >
                    <div class="relative overflow-hidden rounded-xl">
                        <img :src="item.image" :alt="item.title"
                             class="h-48 w-full object-cover transition-transform duration-500 group-hover:scale-110"/>
                        <a href="#"
                           class="absolute right-3 top-3 rounded-full bg-blue-600/90 px-3 py-1 text-xs font-semibold text-white shadow hover:bg-blue-700/90 transition-colors">
                            {{ item.category }}
                        </a>
                    </div>
                    <div class="pt-5">
                        <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100">
                            {{ item.title }}
                        </h3>
                        <p class="mt-2 text-gray-600 dark:text-gray-300">{{ item.description }}</p>
                        <div class="mt-4 flex items-center justify-between">
                            <a :href="item.link || '#'"
                               class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 font-medium transition-colors">Lihat
                                Detail</a>
                            <div class="flex -space-x-2">
                                <img v-for="(avatar, i) in item.team" :key="i" :src="avatar" alt="member"
                                     class="h-8 w-8 rounded-full ring-2 ring-white dark:ring-gray-800"/>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <!-- CTA to full portfolio page if exists -->
            <div class="mt-12 text-center">
                <a href="/portfolio"
                   class="inline-flex items-center rounded-lg border border-blue-600 px-6 py-3 text-blue-600 hover:bg-blue-600 hover:text-white dark:border-blue-400 dark:text-blue-400 dark:hover:bg-blue-500 dark:hover:border-blue-500 transition-colors">
                    Lihat Semua Proyek
                </a>
            </div>
        </div>
    </section>
</template>

<script setup>
import {ref, computed} from 'vue';

const selectedCategory = ref(null);

const portfolios = [
    {
        title: 'Website Perusahaan A',
        description: 'Desain modern dan responsif untuk perusahaan teknologi.',
        image: '/images/portfolio/website-a.jpg',
        category: 'Website',
        link: '#',
        team: [
            'https://i.pravatar.cc/64?img=1',
            'https://i.pravatar.cc/64?img=2',
            'https://i.pravatar.cc/64?img=3',
        ],
    },
    {
        title: 'Aplikasi Mobile B',
        description: 'Solusi mobile canggih untuk manajemen tugas.',
        image: '/images/portfolio/mobile-b.jpg',
        category: 'Mobile',
        link: '#',
        team: [
            'https://i.pravatar.cc/64?img=4',
            'https://i.pravatar.cc/64?img=5',
            'https://i.pravatar.cc/64?img=6',
        ],
    },
    {
        title: 'Sistem Informasi C',
        description: 'Pengelolaan data efisien untuk institusi pendidikan.',
        image: '/images/portfolio/sistem-c.jpg',
        category: 'Sistem Informasi',
        link: '#',
        team: [
            'https://i.pravatar.cc/64?img=7',
            'https://i.pravatar.cc/64?img=8',
            'https://i.pravatar.cc/64?img=9',
        ],
    },
];

const categories = computed(() => [...new Set(portfolios.map(p => p.category))]);

const filteredPortfolios = computed(() => {
    if (!selectedCategory.value) return portfolios;
    return portfolios.filter(p => p.category === selectedCategory.value);
});
</script>
