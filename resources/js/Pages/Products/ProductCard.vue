<script setup>
import 'boxicons';
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
    },
});

</script>
<template>
    <div class="flex flex-col border p-3 m-3">
        <span class="flex flex-row justify-between font-extrabold text-right uppercase">
            <span class="font-extrabold py-1">{{ id }} : {{ sku }}</span>
            <span class="font-extrabold py-1">{{ category }}</span>
        </span>

        <div class="text-start">
            <figure class="uppercase my-1">
                <!-- <img src="pic_trulli.jpg" alt="Trulli" style="width:100%"> -->
                <figcaption>{{ productname }}</figcaption>
            </figure>
        </div>
        <div class="flex flex-row justify-end mt-3">
            <button class="btn-edit" title="edit">
                <box-icon
                    type = 'solid'
                    name = 'edit'
                    size = 'sm'
                    color = 'green'
                    animation= 'tada-hover'
                ></box-icon>
                <span class="mx-1 mt-1 capitalize">edit</span>
            </button>
            <button class="btn-delete" title="delete">
                <box-icon
                    type = 'solid'
                    name = 'trash'
                    size = 'sm'
                    color = 'red'
                    animation= 'tada-hover'
                ></box-icon>
                <span class="mx-1 mt-1 capitalize">delete</span>
            </button>
        </div>
    </div>
</template>