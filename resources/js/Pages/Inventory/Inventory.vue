<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

</script>

<template>

    <AppLayout title="Inventory">

        <template #header>
            Inventory
        </template>

        <!--Add the Page we need as slot on AppLayout.vue-->
        <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg p-3">

            <div class="flex items-center">
                <span class="contentTitle">Inventory</span>
            </div>

        </div>
    </AppLayout>

</template>

