<template>
    <section id="faq" class="bg-white py-24 dark:bg-gray-900">
        <div class="mx-auto max-w-5xl px-4">
            <div class="mb-12 text-center" v-motion :initial="{ opacity: 0, y: 40 }" :enter="{ opacity: 1, y: 0 }">
                <h2 class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-4xl font-bold text-transparent md:text-5xl">
                    FAQ
                </h2>
                <p class="mx-auto mt-4 max-w-2xl text-gray-600 dark:text-gray-300">
                    Pertanyaan yang sering diajukan terkait layanan kami.
                </p>
            </div>

            <div class="divide-y divide-gray-200 rounded-2xl bg-gray-50 shadow dark:divide-gray-700 dark:bg-gray-800">
                <details class="group p-6" open v-motion :initial="{ opacity: 0, y: 20 }" :enter="{ opacity: 1, y: 0 }" :delay="0 * 120">
                    <summary class="flex cursor-pointer list-none items-center justify-between text-left text-lg font-semibold text-gray-800 dark:text-gray-100">
                        Berapa lama waktu pengerjaan website?
                        <span class="ml-4 text-blue-600 transition-transform group-open:rotate-180">▾</span>
                    </summary>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Rata-rata 2–6 minggu tergantung kompleksitas fitur dan revisi.</p>
                </details>
                <details class="group p-6" v-motion :initial="{ opacity: 0, y: 20 }" :enter="{ opacity: 1, y: 0 }" :delay="1 * 120">
                    <summary class="flex cursor-pointer list-none items-center justify-between text-left text-lg font-semibold text-gray-800 dark:text-gray-100">
                        Apakah ada garansi dan dukungan?
                        <span class="ml-4 text-blue-600 transition-transform group-open:rotate-180">▾</span>
                    </summary>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Kami menyediakan garansi bug-fix 30 hari dan paket maintenance opsional.</p>
                </details>
                <details class="group p-6" v-motion :initial="{ opacity: 0, y: 20 }" :enter="{ opacity: 1, y: 0 }" :delay="2 * 120">
                    <summary class="flex cursor-pointer list-none items-center justify-between text-left text-lg font-semibold text-gray-800 dark:text-gray-100">
                        Apakah bisa integrasi pembayaran/WhatsApp?
                        <span class="ml-4 text-blue-600 transition-transform group-open:rotate-180">▾</span>
                    </summary>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Bisa. Kami mendukung integrasi payment gateway, WhatsApp, email, dan API lainnya.</p>
                </details>
            </div>
        </div>
    </section>
</template>
