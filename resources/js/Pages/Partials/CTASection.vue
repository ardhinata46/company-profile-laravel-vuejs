<template>
    <section id="cta" class="relative overflow-hidden bg-blue-600 py-20">
        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle, #fff 1px, transparent 1px); background-size: 24px 24px;"></div>
        <div class="relative mx-auto max-w-5xl px-4 text-center" v-motion :initial="{ opacity: 0, scale: 0.98 }" :enter="{ opacity: 1, scale: 1 }">
            <h2 class="text-3xl font-extrabold text-white md:text-4xl">Siap Kembangkan Bisnis Anda?</h2>
            <p class="mx-auto mt-4 max-w-2xl text-blue-100">Kami bantu wujudkan website dan aplikasi yang cepat, aman, dan berdampak ke pertumbuhan bisnis Anda.</p>
            <a href="#contact" class="mt-8 inline-block rounded-lg bg-white px-8 py-3 font-semibold text-blue-700 shadow transition hover:scale-[1.03] hover:bg-blue-50">Konsultasi Gratis</a>
        </div>
    </section>
</template>
