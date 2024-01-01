<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

</script>

<template>

    <AppLayout title="Inventory">

        <template #header>
            Inventory
        </template>

        <!--Add the Page we need as slot on AppLayout.vue-->
        <div class="page-containter">

            <div class="flex items-center">
                <span class="contentTitle">Create Inventory</span>
            </div>
        </div>

    </AppLayout>

</template>