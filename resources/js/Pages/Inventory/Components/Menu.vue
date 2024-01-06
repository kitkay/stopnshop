<script setup>
import { Link } from '@inertiajs/vue3';

</script>

<template>
    <div class="page-menu">

        <span></span>

        <Link :href="route('inventory.add')" class="btn-view">
            <box-icon
                type = 'regular'
                name = 'plus'
                size = 'sm'
                color = 'green'
                animation= 'tada-hover'
            ></box-icon> New Inventory
        </Link>

    </div>
</template>