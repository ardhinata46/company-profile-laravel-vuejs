<template>
    <div>
        <Navbar />

        <section class="relative overflow-hidden bg-gradient-to-br from-blue-50 to-indigo-50 py-24 dark:from-gray-900 dark:to-gray-800">
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle, #1d4ed8 1px, transparent 1px); background-size: 22px 22px;"></div>
            <div class="relative mx-auto max-w-6xl px-4">
                <div class="flex items-center gap-3 text-sm text-blue-700 dark:text-blue-300" v-motion :initial="{ opacity: 0, y: 10 }" :enter="{ opacity: 1, y: 0 }">
                    <Link href="/" class="hover:underline">Home</Link>
                    <span>/</span>
                    <Link href="/portfolio" class="hover:underline">Portfolio</Link>
                    <span>/</span>
                    <span class="text-blue-900 dark:text-blue-200" v-if="project">{{ project.title }}</span>
                    <span v-else>Detail</span>
                </div>

                <div class="mt-6 grid items-start gap-10 md:grid-cols-2">
                    <div class="group relative" v-motion :initial="{ opacity: 0, x: -30 }" :enter="{ opacity: 1, x: 0 }">
                        <div class="absolute -inset-4 rounded-xl bg-gradient-to-r from-blue-600 to-indigo-600 opacity-20 blur transition group-hover:opacity-30"></div>
                        <img :src="project?.image || fallbackImage" :alt="project?.title || 'Project'" class="relative aspect-[4/3] w-full rounded-xl object-cover shadow-xl" />
                    </div>
                    <div v-motion :initial="{ opacity: 0, x: 30 }" :enter="{ opacity: 1, x: 0 }">
                        <div class="inline-flex items-center gap-2 rounded-full bg-blue-600/10 px-3 py-1 text-sm font-medium text-blue-700 dark:text-blue-300">
                            <span class="h-2 w-2 rounded-full bg-blue-600"></span>
                            {{ project?.category || 'Project' }}
                        </div>
                        <h1 class="mt-3 text-3xl font-extrabold text-gray-900 dark:text-gray-100 md:text-4xl">
                            {{ project?.title || 'Project Tidak Ditemukan' }}
                        </h1>
                        <p class="mt-4 text-gray-600 dark:text-gray-300" v-if="project">
                            {{ project.description }}
                        </p>

                        <div v-if="project" class="mt-6 grid gap-4 sm:grid-cols-2">
                            <div class="rounded-xl bg-white p-4 shadow dark:bg-gray-800">
                                <h4 class="text-sm font-semibold text-gray-700 dark:text-gray-300">Layanan</h4>
                                <p class="mt-1 text-gray-600 dark:text-gray-300">{{ (project.services || defaultServices).join(', ') }}</p>
                            </div>
                            <div class="rounded-xl bg-white p-4 shadow dark:bg-gray-800">
                                <h4 class="text-sm font-semibold text-gray-700 dark:text-gray-300">Durasi</h4>
                                <p class="mt-1 text-gray-600 dark:text-gray-300">{{ project.duration || '4-8 minggu' }}</p>
                            </div>
                            <div class="rounded-xl bg-white p-4 shadow dark:bg-gray-800">
                                <h4 class="text-sm font-semibold text-gray-700 dark:text-gray-300">Klien</h4>
                                <p class="mt-1 text-gray-600 dark:text-gray-300">{{ project.client || 'Perusahaan' }}</p>
                            </div>
                            <div class="rounded-xl bg-white p-4 shadow dark:bg-gray-800">
                                <h4 class="text-sm font-semibold text-gray-700 dark:text-gray-300">Tahun</h4>
                                <p class="mt-1 text-gray-600 dark:text-gray-300">{{ project.year || new Date().getFullYear() }}</p>
                            </div>
                        </div>

                        <div class="mt-6 flex flex-wrap gap-2" v-if="project">
                            <span v-for="tech in project.technologies" :key="tech" class="rounded-full bg-gray-100 px-3 py-1 text-xs text-gray-700 dark:bg-gray-700 dark:text-gray-200">{{ tech }}</span>
                        </div>

                        <div class="mt-8 flex flex-wrap gap-3">
                            <a v-if="project?.external" :href="project.external" target="_blank" rel="noopener" class="rounded-lg bg-blue-600 px-5 py-3 font-semibold text-white shadow transition hover:scale-[1.02] hover:bg-blue-700">Kunjungi Proyek</a>
                            <a href="#contact" class="rounded-lg border border-blue-600 px-5 py-3 font-semibold text-blue-600 transition hover:bg-blue-50 dark:border-blue-400 dark:text-blue-300 dark:hover:bg-blue-950/20">Diskusikan Proyek Anda</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section v-if="project" class="bg-white py-20 dark:bg-gray-900">
            <div class="mx-auto max-w-6xl px-4">
                <div class="grid gap-10 md:grid-cols-3">
                    <div class="md:col-span-2" v-motion :initial="{ opacity: 0, y: 20 }" :enter="{ opacity: 1, y: 0 }">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Tantangan & Solusi</h2>
                        <p class="mt-3 text-gray-600 dark:text-gray-300">{{ project.challenge || defaultChallenge }}</p>
                        <p class="mt-3 text-gray-600 dark:text-gray-300">{{ project.solution || defaultSolution }}</p>

                        <div class="mt-8 grid gap-4 sm:grid-cols-3">
                            <div v-for="(m,i) in metrics" :key="i" class="rounded-xl bg-gray-50 p-5 text-center shadow dark:bg-gray-800" v-motion :initial="{ opacity: 0, y: 20 }" :enter="{ opacity: 1, y: 0 }" :delay="i*120">
                                <div class="text-3xl font-extrabold text-blue-600">{{ m.value }}</div>
                                <div class="mt-1 text-sm text-gray-600 dark:text-gray-300">{{ m.label }}</div>
                            </div>
                        </div>

                        <div class="mt-10 grid gap-4 md:grid-cols-2">
                            <img v-for="(img,i) in gallery" :key="i" :src="img" alt="Gallery" class="h-64 w-full rounded-xl object-cover shadow" v-motion :initial="{ opacity: 0, scale: 0.98 }" :enter="{ opacity: 1, scale: 1 }" :delay="i*100"/>
                        </div>
                    </div>
                    <aside class="space-y-4" v-motion :initial="{ opacity: 0, y: 20 }" :enter="{ opacity: 1, y: 0 }">
                        <div class="rounded-xl bg-gray-50 p-5 shadow dark:bg-gray-800">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Ruang Lingkup</h3>
                            <ul class="mt-3 list-disc space-y-1 pl-5 text-gray-600 dark:text-gray-300">
                                <li v-for="(s,i) in (project.scope || defaultScope)" :key="i">{{ s }}</li>
                            </ul>
                        </div>
                        <div class="rounded-xl bg-gray-50 p-5 shadow dark:bg-gray-800">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Peran Tim</h3>
                            <ul class="mt-3 list-disc space-y-1 pl-5 text-gray-600 dark:text-gray-300">
                                <li v-for="(r,i) in (project.roles || defaultRoles)" :key="i">{{ r }}</li>
                            </ul>
                        </div>
                        <div class="rounded-xl bg-gray-50 p-5 shadow dark:bg-gray-800">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100">Teknologi</h3>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span v-for="tech in project.technologies" :key="tech" class="rounded-full bg-white px-3 py-1 text-xs text-gray-700 shadow dark:bg-gray-700 dark:text-gray-200">{{ tech }}</span>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>

        <section v-else class="bg-white py-24 dark:bg-gray-900">
            <div class="mx-auto max-w-3xl px-4 text-center" v-motion :initial="{ opacity: 0, y: 20 }" :enter="{ opacity: 1, y: 0 }">
                <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Proyek tidak ditemukan</h2>
                <p class="mt-3 text-gray-600 dark:text-gray-300">Maaf, kami tidak menemukan portofolio dengan slug "{{ slug }}".</p>
                <div class="mt-6">
                    <Link href="/portfolio" class="rounded-lg bg-blue-600 px-5 py-3 font-semibold text-white hover:bg-blue-700">Kembali ke Portfolio</Link>
                </div>
            </div>
        </section>

        <Footer />
    </div>
</template>

<script setup>
import { computed } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';
import Navbar from './Partials/Navbar.vue';
import Footer from './Partials/Footer.vue';

const page = usePage();
const props = computed(() => page.props);
const project = computed(() => props.value.project || null);
const slug = computed(() => props.value.slug || '');

const fallbackImage = 'https://via.placeholder.com/1200x900';
const defaultServices = ['Desain UI/UX', 'Pengembangan Frontend', 'Pengembangan Backend'];
const defaultChallenge = 'Meningkatkan performa, skalabilitas, dan pengalaman pengguna pada platform yang berkembang pesat.';
const defaultSolution = 'Kami merancang arsitektur modern, menerapkan best practice, dan melakukan optimasi menyeluruh untuk kecepatan dan stabilitas.';
const defaultScope = ['Discovery & Requirement', 'Desain UI/UX', 'Pengembangan', 'Integrasi API', 'Pengujian & Peluncuran'];
const defaultRoles = ['Project Manager', 'UI/UX Designer', 'Frontend Engineer', 'Backend Engineer', 'QA Engineer'];

const gallery = computed(() => props.value.gallery || [
    'https://images.unsplash.com/photo-1522199794611-8e4193d0f2d2?q=80&w=1200&auto=format&fit=crop',
    'https://images.unsplash.com/photo-1526378722484-bd91ca387e72?q=80&w=1200&auto=format&fit=crop',
    'https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200&auto=format&fit=crop',
    'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=1200&auto=format&fit=crop',
]);

const metrics = computed(() => props.value.metrics || [
    { label: 'Peningkatan Kecepatan', value: '↑ 2.3x' },
    { label: 'Konversi', value: '+35%' },
    { label: 'Waktu Rilis', value: '6 minggu' },
]);
</script>
