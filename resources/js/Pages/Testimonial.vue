<template>
    <div>
        <Navbar />
        <section class="bg-white py-16 text-center">
            <h2 class="mb-6 text-4xl font-bold">Testimoni</h2>
            <p class="mb-10 text-gray-600">Apa kata klien kami?</p>

            <div class="grid grid-cols-1 gap-8 px-4 md:grid-cols-3 md:px-16">
                <div
                    v-for="(testi, index) in testimonials"
                    :key="index"
                    class="rounded border p-6 shadow"
                >
                    <p class="italic text-gray-700">"{{ testi.message }}"</p>
                    <div class="mt-4 text-sm text-gray-500">
                        - {{ testi.name }}
                    </div>
                </div>
            </div>
        </section>
        <Footer />
    </div>
</template>

<script setup>
import Navbar from './Partials/Navbar.vue';
import Footer from './Partials/Footer.vue';

const testimonials = [
    { name: 'John Doe', message: 'Pelayanan cepat dan profesional!' },
    { name: 'Sarah Smith', message: 'Saya sangat puas dengan hasilnya.' },
    { name: 'Michael Johnson', message: 'Tim yang luar biasa dan responsif.' },
];
</script>
