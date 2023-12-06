<script setup>

import AppLayout from "@/Layouts/AppLayout.vue";

</script>

<template>

    <AppLayout title="Products">

        <template #header>
            Products
        </template>

        <!--Add the Page we need as slot on AppLayout.vue-->
        <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg p-3">

            <div class="flex items-center">
                <h2 class="text-xl font-bold px-3 pt-1 pb-3">Products</h2>
            </div>

        </div>
    </AppLayout>

</template>

