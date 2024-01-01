<script setup>

import AppLayout from "@/Layouts/AppLayout.vue";

</script>

<template>

    <AppLayout title="Staffs">

        <template #header>
            Staffs
        </template>

        <!--Add the Page we need as slot on AppLayout.vue-->
        <div class="page-container">

            <div class="flex items-center">
                <h2 class="text-xl font-bold px-3 pt-1 pb-3">Staffs</h2>
            </div>

        </div>
    </AppLayout>

</template>

