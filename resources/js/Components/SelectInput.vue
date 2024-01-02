<script setup>
  defineProps({
    selects: {
        type: Object,
        required: true
    }
  });

</script>

<template>
    <select name='product-name'>
        <option v-for="select in selects" :key="select.id" :value="select.id">{{ select.productName }}</option>
    </select>
</template>