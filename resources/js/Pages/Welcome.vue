<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>

    <Head title="Bienvenido" />

    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div v-if="canLogin" class="sm:fixed sm:top-0 sm:right-0 p-6 text-end">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
            Dashboard</Link>

            <template v-else>
                <Link :href="route('login')"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                Ingresá</Link>

                <Link v-if="canRegister" :href="route('register')"
                    class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                Registrate</Link>
            </template>
        </div>

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex flex-col items-center text-white">
                <svg viewBox="0 0 124 4.96" xmlns="http://www.w3.org/2000/svg"
                    class="w-40 h-40 fill-current text-white">
                    <path class="cls-1"
                        d="M19.4,79.61c3.71,1.93,6.71,3,9.61,3,2,0,3.06-.58,3.06-1.52,0-1.36-1.93-1.52-5.1-2.06C20.42,78,17.09,75.25,17.09,71c0-6.17,6.29-10.69,16.06-10.69A33.1,33.1,0,0,1,46.08,63L41.9,70.64A16.5,16.5,0,0,0,34,68.34c-1.94,0-3,.53-3,1.4,0,1.44,2.58,1.64,7.14,2.42,5.1.87,8.54,3.79,8.54,7.9,0,6.29-6.55,11.06-16.59,11.06A37.32,37.32,0,0,1,15,87.83Z"
                        transform="translate(-15 -53.33)"></path>
                    <path class="cls-2"
                        d="M19.79,78.49c3.71,1.93,6.71,3,9.61,3,2,0,3.06-.58,3.06-1.52,0-1.36-1.93-1.52-5.1-2.06-6.55-1.07-9.88-3.82-9.88-8.1,0-6.17,6.29-10.69,16.06-10.69a33.1,33.1,0,0,1,12.93,2.67l-4.18,7.69a16.5,16.5,0,0,0-7.89-2.3c-1.94,0-3,.54-3,1.4,0,1.44,2.58,1.64,7.14,2.42,5.1.87,8.54,3.79,8.54,7.9C47.07,85.23,40.52,90,30.48,90a37.32,37.32,0,0,1-15.09-3.29Z"
                        transform="translate(-15 -53.33)"></path>
                    <path class="cls-3"
                        d="M19.79,77.69c3.71,1.93,6.71,3,9.61,3,2,0,3.06-.58,3.06-1.52,0-1.36-1.93-1.52-5.1-2.06-6.55-1.07-9.88-3.82-9.88-8.1,0-6.16,6.29-10.69,16.06-10.69A32.93,32.93,0,0,1,46.47,61l-4.18,7.68a16.5,16.5,0,0,0-7.89-2.3c-1.94,0-3,.54-3,1.4,0,1.44,2.58,1.64,7.14,2.42,5.1.87,8.54,3.79,8.54,7.9,0,6.29-6.55,11.06-16.59,11.06a37.32,37.32,0,0,1-15.09-3.29Z"
                        transform="translate(-15 -53.33)"></path>
                    <path class="cls-1"
                        d="M123,89.65V85.37a17.89,17.89,0,0,1-5.3,4,14.36,14.36,0,0,1-6.13,1.3,13.34,13.34,0,0,1-10.09-4.21,15.05,15.05,0,0,1-4-10.83q0-6.93,3.92-11.15a13.26,13.26,0,0,1,10.18-4.22A14.05,14.05,0,0,1,122.35,65V61.22h16.26V89.65Zm-9.26-14.3a3.79,3.79,0,0,0,1.2,2.93,5.1,5.1,0,0,0,6.34,0,3.82,3.82,0,0,0,1.18-2.94,4,4,0,0,0-1.2-3,4.5,4.5,0,0,0-3.16-1.12,4.41,4.41,0,0,0-3.16,1.14A3.92,3.92,0,0,0,113.7,75.35Z"
                        transform="translate(-15 -53.33)"></path>
                    <path class="cls-2"
                        d="M123.35,88.53V84.25a17.73,17.73,0,0,1-5.3,4,14.22,14.22,0,0,1-6.13,1.31,13.34,13.34,0,0,1-10.09-4.22,15,15,0,0,1-4-10.82q0-6.93,3.92-11.15a13.23,13.23,0,0,1,10.18-4.23,14.05,14.05,0,0,1,10.82,4.68V60.1H139V88.53Zm-9.26-14.3a3.78,3.78,0,0,0,1.2,2.93,5.1,5.1,0,0,0,6.34,0,3.79,3.79,0,0,0,1.18-2.94,4,4,0,0,0-1.2-3,4.5,4.5,0,0,0-3.16-1.12,4.41,4.41,0,0,0-3.16,1.14A3.93,3.93,0,0,0,114.09,74.23Z"
                        transform="translate(-15 -53.33)"></path>
                    <path class="cls-4"
                        d="M123.35,87.73V83.45a17.73,17.73,0,0,1-5.3,4,14.22,14.22,0,0,1-6.13,1.31,13.34,13.34,0,0,1-10.09-4.22,15,15,0,0,1-4-10.82q0-6.93,3.92-11.15a13.23,13.23,0,0,1,10.18-4.23,14.05,14.05,0,0,1,10.82,4.68V59.3H139V87.73Zm-9.26-14.3a3.78,3.78,0,0,0,1.2,2.93,4.44,4.44,0,0,0,3.16,1.11,4.52,4.52,0,0,0,3.18-1.09,3.83,3.83,0,0,0,1.18-2.95,4,4,0,0,0-1.2-3,4.5,4.5,0,0,0-3.16-1.12,4.41,4.41,0,0,0-3.16,1.14A3.93,3.93,0,0,0,114.09,73.43Z"
                        transform="translate(-15 -53.33)"></path>
                    <path class="cls-1"
                        d="M67.54,77.26v6.47h3.17a9.23,9.23,0,0,0,4.4-.85,2.62,2.62,0,0,0,1.53-2.39,2.59,2.59,0,0,0-1.53-2.4,9.38,9.38,0,0,0-4.4-.83Zm0-14.39v5.66H70a6.76,6.76,0,0,0,3.52-.74,2.44,2.44,0,0,0,0-4.2A7,7,0,0,0,70,62.87ZM50,95.79V55.25H75.28c5.42,0,9.62,1,12.67,2.9a9.19,9.19,0,0,1,4.52,8.14,7.57,7.57,0,0,1-2.13,5.52,10.75,10.75,0,0,1-6.07,2.87c3.57.57,6.24,1.65,8,3.23a8.24,8.24,0,0,1,2.64,6.4,9.35,9.35,0,0,1-5,8.57c-3.33,1.93-8.24,2.91-14.69,2.91Z"
                        transform="translate(-15 -53.33)"></path>
                    <path class="cls-2"
                        d="M67.93,76.15v6.46H71.1a9.23,9.23,0,0,0,4.4-.85,2.64,2.64,0,0,0,0-4.79,9.39,9.39,0,0,0-4.4-.82Zm0-14.4v5.66h2.49a6.76,6.76,0,0,0,3.52-.74,2.44,2.44,0,0,0,0-4.2,7,7,0,0,0-3.52-.72ZM50.4,94.67V54.13H75.67c5.42,0,9.62,1,12.67,2.9a9.19,9.19,0,0,1,4.52,8.14,7.57,7.57,0,0,1-2.13,5.52,10.75,10.75,0,0,1-6.07,2.87q5.36.85,8,3.24a8.23,8.23,0,0,1,2.63,6.39,9.33,9.33,0,0,1-5,8.57c-3.33,1.93-8.24,2.91-14.69,2.91Z"
                        transform="translate(-15 -53.33)"></path>
                    <path class="cls-4"
                        d="M67.93,75.35v6.46H71.1A9.23,9.23,0,0,0,75.5,81a2.64,2.64,0,0,0,0-4.79,9.39,9.39,0,0,0-4.4-.82Zm0-14.4v5.66h2.49a6.76,6.76,0,0,0,3.52-.74,2.44,2.44,0,0,0,0-4.2A7,7,0,0,0,70.42,61ZM50.4,93.87V53.33H75.67c5.42,0,9.62,1,12.67,2.91a9.16,9.16,0,0,1,4.52,8.13,7.57,7.57,0,0,1-2.13,5.52,10.76,10.76,0,0,1-6.07,2.88q5.36.84,8,3.23a8.23,8.23,0,0,1,2.63,6.39,9.33,9.33,0,0,1-5,8.57c-3.33,1.93-8.24,2.91-14.69,2.91Z"
                        transform="translate(-15 -53.33)"></path>
                </svg>
                <span class="text-xl font-bold">Actas</span>
            </div>

            <div class="flex justify-center mt-16 px-6 sm:items-center sm:justify-between">
                <div class="text-center text-sm sm:text-start">&nbsp;</div>
            </div>
        </div>
    </div>
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
