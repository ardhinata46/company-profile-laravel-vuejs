<template>
    <nav
        class="fixed z-50 w-full bg-white/80 dark:bg-slate-900/90 backdrop-blur-md shadow-lg transition-all duration-300">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 justify-between">
                <!-- Logo -->
                <div class="flex items-center transform hover:scale-105 transition-transform duration-300">
                    <img src="/logo.png" alt="Logo" class="mr-2 h-10 w-auto"/>
                    <span
                        class="text-xl font-bold text-gray-800 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors duration-300">
                        MyCompany
                    </span>
                </div>

                <!-- Navigation Links -->
                <div class="hidden items-center space-x-6 md:flex">
                    <Link v-for="(link, index) in links" :key="index" :href="link.href" class="nav-link relative group">
                        {{ link.text }}
                        <span
                            class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-600 transition-all duration-300 group-hover:w-full"></span>
                    </Link>

                    <!-- Dark Mode Toggle -->
                    <button @click="toggleDarkMode"
                            class="p-2.5 rounded-full bg-slate-100 dark:bg-slate-800 hover:ring-2 hover:ring-indigo-400 dark:hover:ring-indigo-500 transition-all duration-300">
                        <svg v-if="!isDark" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500"
                             viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-300"
                             viewBox="0 0 20 20" fill="currentColor">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"/>
                        </svg>
                    </button>
                </div>

                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button @click="toggleMenu"
                            class="focus:outline-none transform hover:scale-110 transition-transform duration-300">
                        <svg
                            class="h-6 w-6 text-gray-700 dark:text-gray-200 transition-colors duration-300 hover:text-indigo-600 dark:hover:text-indigo-400"
                            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path v-if="!menuOpen" d="M4 6h16M4 12h16M4 18h16"/>
                            <path v-else d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div v-show="menuOpen" class="px-4 pb-4 md:hidden transform"
             :class="menuOpen ? 'animate-slideDown' : 'animate-slideUp'">
            <Link v-for="(link, index) in links" :key="index" :href="link.href"
                  class="nav-link block py-2 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-lg px-3 transition-all duration-300">
                {{ link.text }}
            </Link>

            <!-- Dark Mode Toggle (mobile) -->
            <button @click="toggleDarkMode"
                    class="mt-4 w-full p-3 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center space-x-2 hover:ring-2 hover:ring-indigo-400 dark:hover:ring-indigo-500 transition-all duration-300">
                <span class="text-gray-700 dark:text-gray-200">{{ isDark ? 'Mode Terang' : 'Mode Gelap' }}</span>
                <svg v-if="!isDark" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500"
                     viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                          clip-rule="evenodd"/>
                </svg>
                <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-300"
                     viewBox="0 0 20 20" fill="currentColor">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"/>
                </svg>
            </button>
        </div>
    </nav>
</template>

<script setup>
import {ref, onMounted} from 'vue';
import {Link} from '@inertiajs/vue3';

const menuOpen = ref(false);
const isDark = ref(false);

const links = [
    {href: '/#home', text: 'Home'},
    {href: '/#about', text: 'About'},
    {href: '/#services', text: 'Services'},
    {href: '/#contact', text: 'Contact'},
    {href: '/portfolio', text: 'Portfolio'},
    {href: '/testimoni', text: 'Testimoni'},
    {href: '/blog', text: 'Blog'}
];

const toggleMenu = () => {
    menuOpen.value = !menuOpen.value;
};

const toggleDarkMode = () => {
    isDark.value = !isDark.value;
    if (isDark.value) {
        document.documentElement.classList.add('dark');
        localStorage.setItem('theme', 'dark');
    } else {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('theme', 'light');
    }
};

onMounted(() => {
    if (localStorage.getItem('theme') === 'dark') {
        isDark.value = true;
        document.documentElement.classList.add('dark');
    }
});
</script>

<style scoped>
.nav-link {
    @apply text-gray-700 dark:text-gray-200 transition-all duration-300 hover:text-indigo-600 dark:hover:text-indigo-400 font-medium;
}

@keyframes slideDown {
    0% {
        transform: translateY(-10px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes slideUp {
    0% {
        transform: translateY(0);
        opacity: 1;
    }
    100% {
        transform: translateY(-10px);
        opacity: 0;
    }
}

.animate-slideDown {
    animation: slideDown 0.3s ease-out forwards;
}

.animate-slideUp {
    animation: slideUp 0.3s ease-out forwards;
}
</style>
