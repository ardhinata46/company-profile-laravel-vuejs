<template>
    <section id="testimonials" class="bg-gradient-to-b from-white to-gray-50 py-24 dark:from-gray-900 dark:to-gray-800">
        <div class="mx-auto max-w-7xl px-4">
            <div class="mb-14 text-center" v-motion :initial="{ opacity: 0, y: 40 }" :enter="{ opacity: 1, y: 0 }">
                <h2 class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-4xl font-bold text-transparent md:text-5xl">
                    Testimoni Klien
                </h2>
                <p class="mx-auto mt-4 max-w-2xl text-gray-600 dark:text-gray-300">
                    Apa kata mereka tentang bekerja bersama kami.
                </p>
            </div>

            <div class="grid gap-8 md:grid-cols-3">
                <div v-for="(t, i) in testimonials" :key="i" class="rounded-2xl bg-white p-6 shadow-lg dark:bg-gray-800" v-motion :initial="{ opacity: 0, y: 30 }" :enter="{ opacity: 1, y: 0 }" :delay="i * 150">
                    <div class="flex items-center gap-4">
                        <img :src="t.avatar" alt="avatar" class="h-12 w-12 rounded-full" />
                        <div>
                            <h4 class="font-semibold text-gray-800 dark:text-gray-100">{{ t.name }}</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">{{ t.role }}</p>
                        </div>
                    </div>
                    <p class="mt-4 italic text-gray-700 dark:text-gray-300">“{{ t.message }}”</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
const testimonials = [
    {
        name: 'Andi Pratama',
        role: 'Owner, TokoKita',
        message: 'Proses cepat, komunikatif, dan hasil sesuai harapan. Recommended!',
        avatar: 'https://i.pravatar.cc/80?img=11',
    },
    {
        name: 'Sarah Wijaya',
        role: 'Marketing Manager, Perusahaan B',
        message: 'Website kami kini jauh lebih cepat dan konversi meningkat.',
        avatar: 'https://i.pravatar.cc/80?img=14',
    },
    {
        name: 'Budi Santoso',
        role: 'CTO, Startup C',
        message: 'Tim profesional dengan standar kualitas yang tinggi.',
        avatar: 'https://i.pravatar.cc/80?img=6',
    },
];
</script>
