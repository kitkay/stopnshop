<script setup>
import 'boxicons';
import { computed, reactive } from 'vue';
import { usePage, router } from '@inertiajs/vue3';

import SelectInput from "@/Components/SelectInput.vue";
import AppLayout from "@/Layouts/AppLayout.vue";

defineProps({
    products: {
        type: Object
    },
    inventories: {
        type: Object
    },
    nameInput: {
        type: String
    },

});

const page = usePage();
const user = computed(() => page.props.auth.user);

const form = reactive({
    staff_id: null,
    inventory_name: null,
    product_id: null,

});

</script>

<template>

    <AppLayout title="Inventory">

        <template #header>
            Create Inventory
        </template>

        <!--Add the Page we need as slot on AppLayout.vue-->
        <div class="page-container">

            <div class="flex items-center">
                <span class="contentTitle">Create Inventory</span>
            </div>

            <div class="inventory-create-container">
                <div class="inventory-create">

                        <form class="bg-white shadow-lg rounded p-3">
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="staff">
                                    Staff Name
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 bg-gray-200 leading-tight"
                                    id="staff"
                                    type="text"
                                    placeholder="Name of staff creating inventory"
                                    :value="user.name"
                                    readonly
                                />
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="staff">
                                    Inventory Name
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="inventory-name" type="text" placeholder="Inventory Name or Code">
                            </div>
                            <div class="mb-6">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="product">
                                    Product
                                </label>
                                <SelectInput
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="product"
                                    :selects="products"
                                    />
                            </div>
                            <div class="mb-6">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                                    Description
                                </label>
                                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description">
                                </textarea>
                            </div>
                            <div class="flex justify-end">
                                <button class="flex flex-row rounded outline outline-green-800 outline-1 focus:shadow-outline py-1 px-3" type="button">
                                    <box-icon
                                        type = 'regular'
                                        name = 'save'
                                        size = 'sm'
                                        color = 'green'
                                        animation= 'tada-hover'
                                    ></box-icon>
                                    <span class="mx-1">Save</span>
                                </button>
                            </div>
                        </form>

                </div>
                <div class="inventory-table">
                    <span v-if="inventories.length > 0">
                        <span v-for="inventory in inventories" :key="inventory.id" class="flex">
                            <div class="mr-3">{{ inventory.product_id }} - {{ inventory.description }}</div>
                        </span>
                    </span>
                    <span v-else>
                        No Inventories yet
                    </span>
                </div>
                <div class="inventory-card">
                    c
                </div>
            </div>
        </div>

    </AppLayout>

</template>

<style scoped>
@layer component {
    /** Scoped style for invenntory add */
    .inventory-create-container {
        @apply flex flex-row justify-between p-1;
    }
    .inventory-card {
        @apply mx-1 p-3 outline outline-1 outline-green-900 rounded w-1/4;
    }

    .inventory-create{
        @apply mx-1 rounded w-1/3;
    }

    .inventory-table {
        @apply mx-1 p-3 outline outline-1 outline-green-900 rounded w-2/3;
    }
}
</style>