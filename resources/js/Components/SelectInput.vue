<script setup>
  defineProps({
    productSelect: {
        type: Object,
        required: true
    }
  });

</script>

<template>
    <select name='product-name'>
        <option v-for="select in productSelect" :key="select.id" :value="select.id">{{ select.productName }}</option>
    </select>
</template>