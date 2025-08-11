<template>
    <div>
        <Navbar />

        <HeroSection />
        <AboutSection />
        <ServicesSection />
        <ContactSection />

        <Footer />
    </div>
</template>

<script setup>
// Import semua komponen yang sudah dibuat
import Navbar from './Partials/Navbar.vue';
import HeroSection from './Partials/HeroSection.vue';
import AboutSection from './Partials/AboutSection.vue';
import ServicesSection from './Partials/ServicesSection.vue';
import ContactSection from './Partials/ContactSection.vue';
import Footer from './Partials/Footer.vue';
</script>

<style scoped>
/* Styling global atau layout bisa ditambahkan di sini jika dibutuhkan */
</style>
