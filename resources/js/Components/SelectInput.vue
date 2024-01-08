<script setup>
  defineProps({
    productSelect: {
        type: Object,
        required: true
    },
    selectModel: String
  });

  defineEmits(['update:selectModel']);
</script>

<template>
    <select :value="selectModel" @input="$emit('update:selectModel', $event.target.value)">
        <option v-for="select in productSelect.data" :key="select.id" :value="select.id">{{ select.productName }}</option>
    </select>
</template>