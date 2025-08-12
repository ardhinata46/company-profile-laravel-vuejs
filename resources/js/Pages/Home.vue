<template>
    <div>
        <Navbar />

        <HeroSection />
        <AboutSection />
        <ServicesSection />
        <ProcessSection />
        <TechStackSection />
        <PortfolioSection />
        <PricingSection />
        <TestimonialsSection />
        <FAQSection />
        <CTASection />
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
import ProcessSection from './Partials/ProcessSection.vue';
import TechStackSection from './Partials/TechStackSection.vue';
import PortfolioSection from './Partials/PortfolioSection.vue';
import PricingSection from './Partials/PricingSection.vue';
import TestimonialsSection from './Partials/TestimonialsSection.vue';
import FAQSection from './Partials/FAQSection.vue';
import CTASection from './Partials/CTASection.vue';
import ContactSection from './Partials/ContactSection.vue';
import Footer from './Partials/Footer.vue';
</script>

<style scoped>
/* Styling global atau layout bisa ditambahkan di sini jika dibutuhkan */
</style>
