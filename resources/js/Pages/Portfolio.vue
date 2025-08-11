<template>
    <div>
        <Navbar />
        <section class="bg-gray-100 py-16 text-center">
            <h2 class="mb-6 text-4xl font-bold">Portfolio</h2>
            <p class="mb-10 text-gray-600">Proyek-proyek terbaik kami.</p>

            <div class="grid grid-cols-1 gap-8 px-4 md:grid-cols-3 md:px-16">
                <div
                    v-for="(item, index) in portfolios"
                    :key="index"
                    class="rounded bg-white p-6 shadow transition hover:shadow-lg"
                >
                    <img
                        :src="item.image"
                        alt=""
                        class="mb-4 h-48 w-full rounded object-cover"
                    />
                    <h3 class="text-xl font-semibold">{{ item.title }}</h3>
                    <p class="mt-2 text-gray-600">{{ item.description }}</p>
                </div>
            </div>
        </section>
        <Footer />
    </div>
</template>

<script setup>
import Navbar from './Partials/Navbar.vue';
import Footer from './Partials/Footer.vue';

const portfolios = [
    {
        title: 'Website Perusahaan A',
        description: 'Desain modern dan responsif.',
        image: 'https://via.placeholder.com/400x300',
    },
    {
        title: 'Aplikasi Mobile B',
        description: 'Solusi mobile canggih.',
        image: 'https://via.placeholder.com/400x300',
    },
    {
        title: 'Sistem Informasi C',
        description: 'Pengelolaan data efisien.',
        image: 'https://via.placeholder.com/400x300',
    },
];
</script>
