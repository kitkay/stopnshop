<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import 'boxicons';

import InventoryMenu from  '@/Pages/Inventory/Components/Menu.vue';

defineProps({
    products: {
        type: Object,
        required: true
    }
})
</script>

<template>

    <AppLayout title="Inventory">

        <template #header>
            Inventory
        </template>

        <!--Add the Page we need as slot on AppLayout.vue-->
        <div class="page-container">

            <div class="flex items-center">
                <span class="contentTitle">Inventory {{ products.data.map(item => item.sku) }}</span>
            </div>

            <InventoryMenu />

            <div class="table-container">
                <span class="row-header-container">
                    <span class="col-checkbox"><input type="checkbox" /></span>
                    <span class="col-header-small">Product</span>
                    <span class="col-header-small">SKU</span>
                    <span class="col-header-small">UNIT</span>
                    <span class="col-header-full">Description</span>
                    <span class="col-header-actions"></span>
                </span>
                <span v-for="product in products.data" :key="product.id" class="row-content-container">
                    <span class="col-checkbox"><input type="checkbox" /></span>
                    <span class="col-content-small">{{ product.productName }}</span>
                    <span class="col-content-small">{{ product.sku }}</span>
                    <span class="col-content-small">{{ product.unit }}</span>
                    <span class="col-content-full">{{ product.description }}</span>
                    <span class="col-actions">
                        <button class="btn-edit" title="edit">
                            <box-icon
                                type = 'regular'
                                name = 'edit'
                                size = 'sm'
                                color = 'green'
                                animation= 'tada-hover'
                            ></box-icon>
                            <span class="mx-1 mt-1 capitalize">edit</span>
                        </button>
                        <button class="btn-delete" title="delete">
                            <box-icon
                                type = 'regular'
                                name = 'trash'
                                size = 'sm'
                                color = 'red'
                                animation= 'tada-hover'
                            ></box-icon>
                            <span class="mx-1 mt-1 capitalize">delete</span>
                        </button>
                    </span>
                </span>

            </div>
        </div>
    </AppLayout>

</template>