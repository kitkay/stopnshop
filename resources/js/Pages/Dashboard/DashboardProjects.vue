<script setup>

defineProps({
    'id': {
        type: Number,
        required: true
    },
    'productname': {
        type: String,
        required: true
    }
});

</script>

<template>
        <div class="text-sm font-medium text-gray-500 truncate">
            Products
        </div>
        <div class="mt-1 text-3xl font-semibold text-gray-900">
            {{ id }} - {{ productname }}
        </div>

</template>