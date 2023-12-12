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
        // required: true
    },
    'category': {
        type: String,
        required: true
    }
});

</script>
<template>
    <div class="flex flex-col border p-3 m-3">
        <span class="font-extrabold py-1">{{ id }} : {{ sku }}</span>
        <div class="text-start">
            <figure>
                <!-- <img src="pic_trulli.jpg" alt="Trulli" style="width:100%"> -->
                <figcaption>{{ productname }}</figcaption>
            </figure>
        </div>
        <span class="font-extrabold text-center py-3">{{ category }}</span>
        <div class="flex flex-row justify-end">
            <button class="btn-edit">Edit</button>
            <button class="btn-delete">Delete</button>
        </div>
    </div>
</template>