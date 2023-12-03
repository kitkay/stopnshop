<script setup>

import AppLayout from "@/Layouts/AppLayout.vue";

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            Store Management System
        </template>

        <div class="pb-12 pt-5">
            <div class="max-w-9xl mx-auto sm:px-6 lg:px-5">
                <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-5 lg:p-5 bg-white dark:bg-gray-900 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                        <table class="border-collapse border border-slate-500 ...">
                        <thead>
                            <tr>
                            <th class="border border-slate-600 ...">State</th>
                            <th class="border border-slate-600 ...">City</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td class="border border-slate-700 ...">Indiana</td>
                            <td class="border border-slate-700 ...">Indianapolis</td>
                            </tr>
                            <tr>
                            <td class="border border-slate-700 ...">Ohio</td>
                            <td class="border border-slate-700 ...">Columbus</td>
                            </tr>
                            <tr>
                            <td class="border border-slate-700 ...">Michigan</td>
                            <td class="border border-slate-700 ...">Detroit</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
