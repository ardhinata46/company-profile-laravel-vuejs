<template>
    <nav
        class="fixed z-50 w-full bg-white/80 shadow-lg backdrop-blur-md transition-all duration-300 dark:bg-slate-900/90"
    >
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-20 justify-between">
                <!-- Logo -->
                <div
                    class="flex transform items-center transition-transform duration-300 hover:scale-105"
                >
                    <img src="/logo.png" alt="Logo" class="mr-2 h-12 w-auto"/>
                    <span
                        class="text-xl font-bold text-gray-800 transition-colors duration-300 hover:text-indigo-600 dark:text-white dark:hover:text-indigo-400"
                    >
                        MyCompany
                    </span>
                </div>

                <!-- Navigation Links -->
                <div class="hidden items-center space-x-6 md:flex">
                    <Link
                        v-for="(link, index) in links"
                        :key="index"
                        :href="link.href"
                        class="nav-link group relative py-2"
                    >
                        {{ link.text }}
                        <span
                            class="absolute -bottom-1 left-0 h-0.5 w-0 bg-indigo-600 transition-all duration-300 group-hover:w-full"
                        ></span>
                    </Link>

                    <!-- Dark Mode Toggle -->
                    <button
                        @click="toggleDarkMode"
                        class="rounded-full bg-slate-100 p-2.5 transition-all duration-300 hover:ring-2 hover:ring-indigo-400 dark:bg-slate-800 dark:hover:ring-indigo-500"
                    >
                        <svg
                            v-if="!isDark"
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-amber-500"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        <svg
                            v-else
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-indigo-300"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                                d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                            />
                        </svg>
                    </button>
                </div>

                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button
                        @click="toggleMenu"
                        class="transform transition-transform duration-300 hover:scale-110 focus:outline-none"
                    >
                        <svg
                            class="h-6 w-6 text-gray-700 transition-colors duration-300 hover:text-indigo-600 dark:text-gray-200 dark:hover:text-indigo-400"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        >
                            <path
                                v-if="!menuOpen"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                            <path v-else d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div
            v-show="menuOpen"
            class="transform px-4 pb-4 md:hidden"
            :class="menuOpen ? 'animate-slideDown' : 'animate-slideUp'"
        >
            <Link
                v-for="(link, index) in links"
                :key="index"
                :href="link.href"
                class="nav-link block rounded-lg px-3 py-2 transition-all duration-300 hover:bg-slate-50 dark:hover:bg-slate-800"
            >
                {{ link.text }}
            </Link>

            <!-- Dark Mode Toggle (mobile) -->
            <button
                @click="toggleDarkMode"
                class="mt-4 flex w-full items-center justify-center space-x-2 rounded-lg bg-slate-100 p-3 transition-all duration-300 hover:ring-2 hover:ring-indigo-400 dark:bg-slate-800 dark:hover:ring-indigo-500"
            >
                <span class="text-gray-700 dark:text-gray-200">{{
                        isDark ? 'Mode Terang' : 'Mode Gelap'
                    }}</span>
                <svg
                    v-if="!isDark"
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-amber-500"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                >
                    <path
                        fill-rule="evenodd"
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        clip-rule="evenodd"
                    />
                </svg>
                <svg
                    v-else
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 text-indigo-300"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                >
                    <path
                        d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                    />
                </svg>
            </button>
        </div>
    </nav>

    <!-- Floating WhatsApp Button -->
    <a
        :href="waLink"
        target="_blank"
        rel="noopener"
        aria-label="Chat WhatsApp Admin"
        class="group fixed bottom-16 right-6 z-50 flex h-14 w-14 items-center justify-center rounded-full
           bg-green-500 text-white shadow-lg shadow-green-500/30 ring-0
           transition-all duration-300 hover:scale-110 hover:bg-green-600
           focus:outline-none focus:ring-4 focus:ring-green-300 dark:focus:ring-green-700"
    >
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
             class="h-8 w-8 fill-current transition-transform duration-300 group-hover:rotate-6">
            <path d="M20.52 3.48A11.94 11.94 0 0012 0C5.37 0 0 5.37 0 12c0 2.12.55 4.19 1.59 6.01L0 24l6.27-1.64A11.94 11.94 0 0012 24c6.63 0 12-5.37 12-12 0-3.21-1.25-6.23-3.48-8.52zM12 21.82c-1.9 0-3.76-.52-5.38-1.51l-.39-.23-3.73.98 1-3.64-.25-.37a9.82 9.82 0 01-1.53-5.27c0-5.45 4.43-9.88 9.88-9.88 2.64 0 5.12 1.03 6.98 2.9a9.82 9.82 0 012.9 6.98c0 5.45-4.43 9.88-9.88 9.88z"/>
            <path d="M17.27 14.47c-.29-.15-1.71-.85-1.98-.94-.27-.1-.46-.15-.65.15-.19.3-.75.94-.92 1.12-.17.18-.34.2-.61.07-.27-.13-1.14-.42-2.17-1.35-.8-.71-1.34-1.59-1.5-1.86-.16-.27-.02-.41.12-.55.12-.12.27-.32.41-.48.14-.16.18-.27.27-.45.09-.18.05-.34-.02-.48-.07-.14-.62-1.5-.85-2.06-.22-.53-.44-.46-.62-.46-.16 0-.34-.02-.52-.02s-.48.07-.73.34c-.25.27-.96.94-.96 2.28 0 1.34.98 2.63 1.11 2.81.14.18 1.93 2.95 4.68 4.14.65.28 1.16.45 1.56.58.65.21 1.25.18 1.72.11.52-.08 1.6-.65 1.83-1.27.23-.62.23-1.15.16-1.27-.07-.12-.25-.2-.52-.34z"/>
        </svg>
        <span class="sr-only">WhatsApp Admin</span>
    </a>

</template>

<script setup>
import {ref, onMounted} from 'vue';
import {Link} from '@inertiajs/vue3';

// WhatsApp Admin configuration: set VITE_WA_ADMIN in .env to override default number
const waPhone = import.meta.env.VITE_WA_ADMIN || '6281234567890';
const waText = encodeURIComponent('Halo Admin, saya tertarik dengan layanan Anda.');
const waLink = `https://wa.me/${waPhone}?text=${waText}`;

const menuOpen = ref(false);
const isDark = ref(false);

const links = [
    {href: '/#home', text: 'Home'},
    {href: '/about', text: 'About'},
    {href: '/#services', text: 'Services'},
    {href: '/portfolio', text: 'Portfolio'},
    {href: '/blog', text: 'Blog'},
    {href: '/#contact', text: 'Contact'},
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
    @apply font-medium text-gray-700 transition-all duration-300 hover:text-indigo-600 dark:text-gray-200 dark:hover:text-indigo-400;
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
