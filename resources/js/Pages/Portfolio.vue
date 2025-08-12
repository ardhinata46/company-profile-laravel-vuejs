<template>
    <div :class="{ dark: darkMode }">
        <Navbar/>
        <section class="bg-gray-100 py-32 text-center transition-colors duration-300 dark:bg-gray-800">
            <h2 class="mb-6 text-4xl font-bold dark:text-white">Portfolio</h2>
            <p class="mb-10 text-gray-600 dark:text-gray-300">
                Lihat koleksi proyek terbaik kami yang menunjukkan kreativitas dan keahlian dalam pengembangan digital.
            </p>

            <div class="mb-8 flex justify-center space-x-4">
                <button
                    v-for="category in categories"
                    :key="category"
                    @click="selectedCategory = category"
                    :class="[
                        'rounded-full px-4 py-2 transition-all duration-300',
                        selectedCategory === category
                            ? 'bg-blue-500 text-white shadow-lg'
                            : 'bg-white text-gray-600 hover:bg-blue-100 hover:shadow dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600',
                    ]"
                >
                    {{ category }}
                </button>
            </div>

            <div class="grid grid-cols-1 gap-8 px-4 md:grid-cols-2 lg:grid-cols-3 md:px-16">
                <div
                    v-for="(item, index) in filteredPortfolios"
                    :key="index"
                    class="group transform overflow-hidden rounded-lg bg-white shadow-md transition duration-300 hover:scale-105 hover:shadow-xl dark:bg-gray-700"
                    v-motion
                    :initial="{ opacity: 0, y: 100 }"
                    :enter="{
                        opacity: 1,
                        y: 0,
                        transition: { delay: index * 200 },
                    }"
                >
                    <div class="relative overflow-hidden">
                        <img
                            :src="item.image"
                            :alt="item.title"
                            class="h-56 w-full object-cover transition-transform duration-300 group-hover:scale-110"
                        />
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4">
                            <span class="inline-block rounded-full bg-blue-500 px-3 py-1 text-sm text-white">
                                {{ item.category }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold dark:text-white">{{ item.title }}</h3>
                        <p class="mt-3 text-gray-600 dark:text-gray-300">{{ item.description }}</p>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span v-for="tech in item.technologies" :key="tech"
                                  class="rounded-full bg-gray-100 px-3 py-1 text-xs text-gray-600 dark:bg-gray-600 dark:text-gray-300">
                                {{ tech }}
                            </span>
                        </div>
                        <Link :href="`/portfolio/${slugify(item.title)}`"
                              class="mt-4 inline-block text-blue-500 hover:text-blue-600 dark:text-blue-400">
                            Lihat Detail →
                        </Link>
                    </div>
                </div>
            </div>
        </section>
        <Footer/>
    </div>
</template>

<script setup>
import {ref, computed} from 'vue';
import { Link } from '@inertiajs/vue3';
import Navbar from './Partials/Navbar.vue';
import Footer from './Partials/Footer.vue';

const darkMode = ref(false);
const selectedCategory = ref('Semua');

const categories = ['Semua', 'Website', 'Mobile', 'Sistem Informasi', 'UI/UX', 'Branding'];

const portfolios = [
    {
        title: 'E-commerce Platform Modern',
        description: 'Platform e-commerce yang modern dengan fitur AI untuk rekomendasi produk dan analisis pelanggan.',
        image: 'https://via.placeholder.com/800x600',
        category: 'Website',
        technologies: ['Vue.js', 'Laravel', 'TailwindCSS', 'MySQL'],
        link: '#',
    },
    {
        title: 'Aplikasi Manajemen Kesehatan',
        description: 'Aplikasi mobile terintegrasi untuk monitoring kesehatan dengan fitur AI dan IoT.',
        image: 'https://via.placeholder.com/800x600',
        category: 'Mobile',
        technologies: ['React Native', 'Node.js', 'TensorFlow', 'MongoDB'],
        link: '#',
    },
    {
        title: 'Sistem ERP Perusahaan',
        description: 'Sistem informasi enterprise yang mengintegrasikan seluruh aspek bisnis perusahaan.',
        image: 'https://via.placeholder.com/800x600',
        category: 'Sistem Informasi',
        technologies: ['Angular', 'Spring Boot', 'PostgreSQL', 'Docker'],
        link: '#',
    },
    {
        title: 'Platform Pembelajaran Online',
        description: 'Website pembelajaran interaktif dengan fitur live streaming dan kolaborasi real-time.',
        image: 'https://via.placeholder.com/800x600',
        category: 'Website',
        technologies: ['Next.js', 'Django', 'WebRTC', 'Redis'],
        link: '#',
    },
    {
        title: 'Aplikasi Smart City',
        description: 'Aplikasi mobile untuk memantau dan mengelola infrastruktur kota pintar.',
        image: 'https://via.placeholder.com/800x600',
        category: 'Mobile',
        technologies: ['Flutter', 'Go', 'GraphQL', 'TimescaleDB'],
        link: '#',
    },
    {
        title: 'Dashboard Analytics',
        description: 'UI/UX design modern untuk dashboard analitik data bisnis real-time.',
        image: 'https://via.placeholder.com/800x600',
        category: 'UI/UX',
        technologies: ['Figma', 'Adobe XD', 'Sketch', 'Zeplin'],
        link: '#',
    },
    {
        title: 'Sistem Manajemen Rumah Sakit',
        description: 'Sistem informasi terintegrasi untuk pengelolaan rumah sakit modern.',
        image: 'https://via.placeholder.com/800x600',
        category: 'Sistem Informasi',
        technologies: ['Vue.js', 'FastAPI', 'PostgreSQL', 'Kubernetes'],
        link: '#',
    },
    {
        title: 'Branding Startup Tech',
        description: 'Desain identitas visual modern untuk startup teknologi.',
        image: 'https://via.placeholder.com/800x600',
        category: 'Branding',
        technologies: ['Adobe Creative Suite', 'Blender', 'Principle'],
        link: '#',
    },
    {
        title: 'Aplikasi IoT Smart Home',
        description: 'Sistem kontrol rumah pintar berbasis IoT dengan interface modern.',
        image: 'https://via.placeholder.com/800x600',
        category: 'Mobile',
        technologies: ['React Native', 'MQTT', 'Node.js', 'InfluxDB'],
        link: '#',
    }
];

const filteredPortfolios = computed(() => {
    if (selectedCategory.value === 'Semua') {
        return portfolios;
    }
    return portfolios.filter(
        (item) => item.category === selectedCategory.value,
    );
});

const slugify = (text) =>
    text
        .toString()
        .toLowerCase()
        .normalize('NFD').replace(/\p{Diacritic}/gu, '')
        .replace(/[^a-z0-9]+/g, '-')
        .replace(/(^-|-$)+/g, '');
</script>
