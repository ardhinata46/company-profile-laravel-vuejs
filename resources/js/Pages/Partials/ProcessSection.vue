<template>
    <section id="process" class="py-24 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-4">
            <div
                class="mb-14 text-center"
                v-motion
                :initial="{ opacity: 0, y: 50 }"
                :enter="{ opacity: 1, y: 0 }"
                :duration="800"
            >
                <h2 class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-4xl font-bold text-transparent md:text-5xl">
                    Proses Kerja
                </h2>
                <p class="mx-auto mt-4 max-w-2xl text-gray-600 dark:text-gray-300">
                    Alur kerja terstruktur untuk memastikan hasil yang berkualitas dan tepat waktu.
                </p>
            </div>

            <div class="grid gap-8 md:grid-cols-4">
                <div
                    v-for="(step, index) in steps"
                    :key="index"
                    class="rounded-2xl bg-gray-50 p-6 shadow dark:bg-gray-800 hover:scale-105 transform transition duration-300"
                    :initial="{ opacity: 0, y: 50 }"
                    :enter="{ opacity: 1, y: 0 }"
                    :duration="800"
                >
                    <div
                        class="mb-4 inline-flex h-12 w-12 items-center justify-center rounded-full bg-blue-600 font-bold text-white">
                        {{ index + 1 }}
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100">{{ step.title }}</h3>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">{{ step.desc }}</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
const steps = [
    {title: "Konsultasi", desc: "Memahami kebutuhan, tujuan bisnis, dan ruang lingkup proyek."},
    {title: "Perencanaan", desc: "Menyusun jadwal, arsitektur, dan desain awal (wireframe/prototype)."},
    {title: "Pengembangan", desc: "Implementasi fitur dengan standar kualitas dan keamanan."},
    {title: "Peluncuran & Dukungan", desc: "Deployment, monitoring, dan pemeliharaan pascapeluncuran."}
]
</script>
