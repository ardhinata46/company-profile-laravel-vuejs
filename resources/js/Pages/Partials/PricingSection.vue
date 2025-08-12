<template>
    <section id="pricing" class="bg-gradient-to-b from-gray-50 to-white py-24 dark:from-gray-900 dark:to-gray-800">
        <div class="mx-auto max-w-7xl px-4">
            <div class="mb-14 text-center" v-motion :initial="{ opacity: 0, y: 40 }" :enter="{ opacity: 1, y: 0 }">
                <h2 class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-4xl font-bold text-transparent md:text-5xl">
                    Paket Harga
                </h2>
                <p class="mx-auto mt-4 max-w-2xl text-gray-600 dark:text-gray-300">
                    Pilih paket sesuai kebutuhan proyek Anda. Harga bersifat indikatif dan dapat disesuaikan.
                </p>
            </div>

            <div class="grid gap-8 md:grid-cols-3">
                <div class="rounded-2xl bg-white p-8 shadow-lg dark:bg-gray-800" v-motion :initial="{ opacity: 0, y: 30 }" :enter="{ opacity: 1, y: 0 }" :delay="0 * 150">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Starter</h3>
                    <p class="mt-2 text-sm text-gray-500">Untuk UMKM & landing page</p>
                    <div class="mt-6 text-4xl font-bold text-blue-600">Rp3,5jt</div>
                    <ul class="mt-6 space-y-3 text-gray-600 dark:text-gray-300">
                        <li>• Desain responsif</li>
                        <li>• 3 Halaman</li>
                        <li>• Form kontak</li>
                        <li>• Basic SEO</li>
                    </ul>
                    <a href="#contact" class="mt-8 inline-block w-full rounded-lg bg-blue-600 px-6 py-3 text-center font-semibold text-white transition hover:bg-blue-700">Pilih Paket</a>
                </div>

                <div class="relative rounded-2xl bg-white p-8 shadow-2xl ring-2 ring-blue-600 dark:bg-gray-800" v-motion :initial="{ opacity: 0, y: 30 }" :enter="{ opacity: 1, y: 0 }" :delay="1 * 150">
                    <span class="absolute -top-3 right-6 rounded-full bg-blue-600 px-3 py-1 text-xs font-semibold text-white">Terpopuler</span>
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Professional</h3>
                    <p class="mt-2 text-sm text-gray-500">Untuk website perusahaan</p>
                    <div class="mt-6 text-4xl font-bold text-blue-600">Rp9jt</div>
                    <ul class="mt-6 space-y-3 text-gray-600 dark:text-gray-300">
                        <li>• Desain custom</li>
                        <li>• 8 Halaman</li>
                        <li>• CMS (Laravel/Headless)</li>
                        <li>• Integrasi WhatsApp/Email</li>
                        <li>• SEO & Analytics</li>
                    </ul>
                    <a href="#contact" class="mt-8 inline-block w-full rounded-lg bg-blue-600 px-6 py-3 text-center font-semibold text-white transition hover:bg-blue-700">Pilih Paket</a>
                </div>

                <div class="rounded-2xl bg-white p-8 shadow-lg dark:bg-gray-800" v-motion :initial="{ opacity: 0, y: 30 }" :enter="{ opacity: 1, y: 0 }" :delay="2 * 150">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Custom Apps</h3>
                    <p class="mt-2 text-sm text-gray-500">Web/App skala bisnis</p>
                    <div class="mt-6 text-4xl font-bold text-blue-600">Konsultasi</div>
                    <ul class="mt-6 space-y-3 text-gray-600 dark:text-gray-300">
                        <li>• Analisa kebutuhan</li>
                        <li>• Arsitektur skala</li>
                        <li>• Integrasi API</li>
                        <li>• SLA & dukungan</li>
                    </ul>
                    <a href="#contact" class="mt-8 inline-block w-full rounded-lg bg-blue-600 px-6 py-3 text-center font-semibold text-white transition hover:bg-blue-700">Diskusikan</a>
                </div>
            </div>
        </div>
    </section>
</template>
