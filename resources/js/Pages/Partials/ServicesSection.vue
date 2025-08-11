<template>
    <section id="services" class="relative bg-gradient-to-b from-gray-50 to-gray-100 py-24">
        <div class="mx-auto max-w-7xl px-4">
            <!-- Header -->
            <div
                class="mb-16 text-center"
                v-motion
                :initial="{ opacity: 0, y: 50 }"
                :enter="{ opacity: 1, y: 0 }"
                :duration="800"
            >
                <h2 class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-4xl font-bold text-transparent md:text-5xl">
                    Layanan Kami
                </h2>
                <p class="mx-auto mt-6 max-w-2xl text-gray-600">
                    Kami menyediakan berbagai layanan yang dirancang untuk
                    memenuhi kebutuhan bisnis Anda dengan solusi teknologi terkini.
                </p>
            </div>

            <!-- Service Cards -->
            <div class="grid gap-8 sm:grid-cols-2 md:grid-cols-3">
                <div
                    v-for="(service, index) in services"
                    :key="service.title"
                    v-motion
                    :initial="{ opacity: 0, y: 50 }"
                    :enter="{ opacity: 1, y: 0 }"
                    :delay="index * 200"
                    class="group relative overflow-hidden rounded-2xl bg-white p-8 shadow-lg transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl"
                >
                    <div
                        class="absolute right-0 top-0 h-20 w-20 -translate-x-6 translate-y-6 rotate-12 transform bg-gradient-to-br from-blue-100 to-indigo-100 opacity-50 transition-transform group-hover:rotate-45"></div>
                    <div
                        class="mb-6 flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-600 text-white shadow-lg transition-transform group-hover:scale-110"
                        :aria-label="service.title"
                    >
                        <component :is="service.icon" class="h-7 w-7"/>
                    </div>
                    <h3 class="mb-3 text-2xl font-bold text-gray-800">
                        {{ service.title }}
                    </h3>
                    <p class="text-gray-600">
                        {{ service.description }}
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import {Briefcase, Code, Smartphone} from 'lucide-vue-next';

const services = [
    {
        title: 'Konsultasi IT',
        description:
            'Memberikan solusi teknologi yang tepat untuk mengembangkan dan mengoptimalkan bisnis Anda.',
        icon: Briefcase,
    },
    {
        title: 'Pengembangan Web',
        description: 'Website modern, dinamis, dan responsif dengan performa tinggi sesuai kebutuhan spesifik Anda.',
        icon: Code,
    },
    {
        title: 'Aplikasi Mobile',
        description: 'Aplikasi Android & iOS berkualitas tinggi dengan UX yang intuitif dan fitur-fitur inovatif.',
        icon: Smartphone,
    },
];
</script>
