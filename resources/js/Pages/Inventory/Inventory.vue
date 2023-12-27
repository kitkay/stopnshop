<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import 'boxicons';

defineProps({
    products: {
        type: Object
    }
})
</script>

<template>

    <AppLayout title="Inventory">

        <template #header>
            Inventory
        </template>

        <!--Add the Page we need as slot on AppLayout.vue-->
        <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg p-3">

            <div class="flex items-center">
                <span class="contentTitle">Inventory</span>
            </div>

            <div class="col-span-1 flex flex-col mt-10">
                <span class="row-container">
                    <span class="col-span-1 text-center w-1/6 p-1 font-extrabold uppercase">Product Name</span>
                    <span class="col-span-1 text-center w-1/6 p-1 font-extrabold uppercase">SKU</span>
                    <span class="col-span-1 text-center w-full p-1 font-extrabold uppercase">Description</span>
                    <span class="col-span-1 w-1/6"></span>
                </span>
                <span v-for="product in products" :key="product.id" class="row-container even:bg-green-50 odd:bg-red-50">
                    <span class="col-span-1 outline outline-1 text-center md:w-1/6 p-1">{{ product.productName }}</span>
                    <span class="col-span-1 outline outline-1 text-center md:w-1/6 p-1">{{ product.sku }}</span>
                    <span class="col-span-1 outline outline-1 text-start w-full p-1">{{ product.description }}</span>
                    <span class="flex md:flex-row xs:flex-col col-span-1 outline outline-1 p-1">
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

<style>
th, td {
    border: 1px solid #000;
    text-align: center;
    padding: 3px 25px;
}
</style>