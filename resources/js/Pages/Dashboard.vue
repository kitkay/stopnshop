<script setup>

import AppLayout from "@/Layouts/AppLayout.vue";
import Dashboard from "@/Pages/Dashboard/Dashboard.vue";

</script>

<template>

    <AppLayout title="Dashboard">
        <template #header>
            Store Management System
        </template>

        <!--Add the Page we need as slot on AppLayout.vue-->
        <Dashboard />
    </AppLayout>

</template>

