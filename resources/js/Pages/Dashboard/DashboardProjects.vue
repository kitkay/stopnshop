<script setup>

defineProps({
    'id': {
        type: Number,
        required: true
    },
    'productname': {
        type: String,
        required: true
    },
    'sku': {
        type: String,
        required: true
    },
    'desp': {
        type: String,
        required: true
    },
    'category': {
        type: String,
        required: true
    }
});

</script>

<template>
        <div class="flex flex-col text-sm font-medium text-gray-500 truncate">
            <span class="flex h-full items-center ">Product
                <span class="font-extrabold bg-black text-white px-3 mx-1 rounded">[{{ id }} - {{ sku }}]</span>
                {{ productname }}
            </span>
            <span class="uppercase">Catgeory: {{ category }}</span>
        </div>
        <div class="mt-1 text-2xl font-semibold text-gray-900">
            {{ desp }}
        </div>

</template>