<script setup>

import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import AppLayout from "@/Layouts/AppLayout.vue";

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="pb-12 pt-5">
            <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-5 lg:p-9 bg-white dark:bg-gray-900 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">

                        <ApplicationLogo class="block h-12 w-auto" />

                        <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
                            Welcome to your Jetstream application!
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
