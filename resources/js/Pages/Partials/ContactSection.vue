<template>
    <section
        id="contact"
        class="bg-gradient-to-b from-white to-gray-50 py-24 dark:bg-gradient-to-b dark:from-gray-900 dark:to-gray-800"
    >
        <div class="mx-auto max-w-6xl px-4">
            <div
                class="mb-12 text-center"
                v-motion
                :initial="{ opacity: 0, y: 100 }"
                :enter="{ opacity: 1, y: 0 }"
                :duration="1000"
            >
                <h2
                    class="text-3xl font-bold text-gray-800 dark:text-gray-100 md:text-4xl"
                >
                    Hubungi Kami
                </h2>
                <p
                    class="mx-auto mt-4 max-w-2xl text-gray-600 dark:text-gray-400"
                >
                    Kami siap membantu Anda. Kirimkan pertanyaan, konsultasi,
                    atau kebutuhan proyek Anda.
                </p>
            </div>

            <div class="grid gap-12 md:grid-cols-2">
                <!-- Info Kontak -->
                <div
                    v-motion
                    :initial="{ opacity: 0, x: -100 }"
                    :enter="{ opacity: 1, x: 0 }"
                    :duration="800"
                >
                    <div
                        class="mb-8 transform transition-all duration-300 hover:scale-105"
                    >
                        <div class="flex items-center space-x-4">
                            <div
                                class="rounded-full bg-blue-100 p-3 dark:bg-blue-900"
                            >
                                <MapPin
                                    class="h-6 w-6 text-blue-600 dark:text-blue-400"
                                />
                            </div>
                            <div>
                                <h3
                                    class="mb-2 text-xl font-semibold text-gray-700 dark:text-gray-300"
                                >
                                    Alamat
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    Jl. Contoh No.123, Jakarta, Indonesia
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="mb-8 transform transition-all duration-300 hover:scale-105"
                    >
                        <div class="flex items-center space-x-4">
                            <div
                                class="rounded-full bg-blue-100 p-3 dark:bg-blue-900"
                            >
                                <Mail
                                    class="h-6 w-6 text-blue-600 dark:text-blue-400"
                                />
                            </div>
                            <div>
                                <h3
                                    class="mb-2 text-xl font-semibold text-gray-700 dark:text-gray-300"
                                >
                                    Email
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    info@namaperusahaan.com
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="transform transition-all duration-300 hover:scale-105"
                    >
                        <div class="flex items-center space-x-4">
                            <div
                                class="rounded-full bg-blue-100 p-3 dark:bg-blue-900"
                            >
                                <Phone
                                    class="h-6 w-6 text-blue-600 dark:text-blue-400"
                                />
                            </div>
                            <div>
                                <h3
                                    class="mb-2 text-xl font-semibold text-gray-700 dark:text-gray-300"
                                >
                                    Telepon
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400">
                                    +62 812 3456 7890
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Kontak -->
                <form
                    @submit.prevent="submitForm"
                    class="space-y-6 rounded-xl bg-white p-8 shadow-lg dark:bg-gray-800"
                    v-motion
                    :initial="{ opacity: 0, x: 100 }"
                    :enter="{ opacity: 1, x: 0 }"
                    :duration="800"
                >
                    <div>
                        <label
                            class="mb-1 block text-gray-700 dark:text-gray-300"
                            >Nama</label
                        >
                        <input
                            type="text"
                            v-model="form.name"
                            required
                            class="w-full rounded-lg border border-gray-300 p-3 transition-all focus:border-blue-500 focus:outline-none focus:ring focus:ring-blue-200 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100"
                        />
                    </div>
                    <div>
                        <label
                            class="mb-1 block text-gray-700 dark:text-gray-300"
                            >Email</label
                        >
                        <input
                            type="email"
                            v-model="form.email"
                            required
                            class="w-full rounded-lg border border-gray-300 p-3 transition-all focus:border-blue-500 focus:outline-none focus:ring focus:ring-blue-200 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100"
                        />
                    </div>
                    <div>
                        <label
                            class="mb-1 block text-gray-700 dark:text-gray-300"
                            >Pesan</label
                        >
                        <textarea
                            v-model="form.message"
                            rows="5"
                            required
                            class="w-full rounded-lg border border-gray-300 p-3 transition-all focus:border-blue-500 focus:outline-none focus:ring focus:ring-blue-200 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-100"
                        ></textarea>
                    </div>
                    <button
                        type="submit"
                        class="w-full rounded-lg bg-blue-600 px-6 py-3 text-white transition-all duration-300 hover:bg-blue-700 hover:shadow-lg focus:ring focus:ring-blue-200"
                    >
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </section>
</template>

<script setup>
import { reactive } from 'vue';
import { toast } from 'vue3-toastify';
import { MapPin, Mail, Phone } from 'lucide-vue-next';

const form = reactive({
    name: '',
    email: '',
    message: '',
});

function submitForm() {
    toast.success('Pesan berhasil dikirim!', {
        autoClose: 3000,
        position: toast.POSITION.TOP_RIGHT,
    });
    form.name = '';
    form.email = '';
    form.message = '';
}
</script>

<style scoped>
.form-focus {
    @apply border-blue-500 ring ring-blue-200;
}
</style>
