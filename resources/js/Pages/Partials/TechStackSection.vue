<template>
    <section id="tech" class="bg-white py-24 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-4">
            <div class="mb-12 text-center" v-motion :initial="{ opacity: 0, y: 50 }" :enter="{ opacity: 1, y: 0 }" :duration="800">
                <h2 class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-4xl font-bold text-transparent md:text-5xl">
                    Teknologi yang Kami Gunakan
                </h2>
                <p class="mx-auto mt-6 max-w-2xl text-lg text-gray-600 dark:text-gray-300">
                    Kami memilih stack modern untuk performa, keamanan, dan skalabilitas.
                </p>
            </div>

            <div class="grid grid-cols-2 gap-8 sm:grid-cols-3 md:grid-cols-6">
                <div v-for="(t, i) in stacks"
                     :key="i"
                     class="group flex flex-col items-center rounded-2xl bg-gray-50/80 p-8 backdrop-blur-sm transition-all duration-300 hover:-translate-y-2 hover:bg-white hover:shadow-xl dark:bg-gray-800/80 dark:hover:bg-gray-800"
                   >
                    <img :src="t.logo" :alt="t.name"
                         class="h-12 transition-transform duration-300 group-hover:scale-110"/>
                    <span class="mt-4 text-sm font-semibold text-gray-700 dark:text-gray-200">{{ t.name }}</span>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
const stacks =[
        { name: 'Laravel', logo: 'https://cdn.simpleicons.org/laravel/FF2D20' },
        { name: 'Vue 3', logo: 'https://cdn.simpleicons.org/vuedotjs/42B883' },
        { name: 'Inertia', logo: 'https://cdn.simpleicons.org/javascript/F7DF1E' }, // Inertia belum ada di simpleicons
        { name: 'Tailwind CSS', logo: 'https://cdn.simpleicons.org/tailwindcss/06B6D4' },
        { name: 'Vite', logo: 'https://cdn.simpleicons.org/vite/646CFF' },
        { name: 'MySQL', logo: 'https://cdn.simpleicons.org/mysql/4479A1' },
        { name: 'PHP', logo: 'https://cdn.simpleicons.org/php/777BB4' },
        { name: 'HTML5', logo: 'https://cdn.simpleicons.org/html5/E34F26' },
        { name: 'JavaScript', logo: 'https://cdn.simpleicons.org/javascript/F7DF1E' },
        { name: 'Dart', logo: 'https://cdn.simpleicons.org/dart/0175C2' },
        { name: 'Flutter', logo: 'https://cdn.simpleicons.org/flutter/02569B' },
        { name: 'React', logo: 'https://cdn.simpleicons.org/react/61DAFB' }
    ]
;
</script>
