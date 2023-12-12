<script setup>
defineProps({
    cardtitle: {
        type: String,
        required: true
    },
    cardvalue: {
        type: Number,
        required: true
    }
});

</script>

<template>
    <div class="card-container">
        <span class="card-title">
            {{ cardtitle }}
        </span>
        <span class="card-value">
            {{ cardvalue }}
        </span>
    </div>
</template>