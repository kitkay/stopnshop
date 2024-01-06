<script setup>
import 'boxicons';
import { computed, reactive } from 'vue';
import { usePage, useForm, router } from '@inertiajs/vue3';

import SelectInput from "@/Components/SelectInput.vue";
import AppLayout from "@/Layouts/AppLayout.vue";

defineProps({
    products: {
        type: Object
    },
    inventories: {
        type: Object
    },
    errors: Object,
});

const page = usePage();
const userId = computed(() => page.props.auth.user.id);

const form = useForm({
    name: '',
    product_id: '',
    staff_id: userId,
    description: '',
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

                        <form class="bg-white shadow-lg rounded p-3" @submit.prevent="form.post(route('inventory.store'))">
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Inventory Name
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="staff"
                                    type="hidden"
                                    v-model="form.staff_id"/>
                                <input
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="name"
                                    type="text"
                                    placeholder="Inventory Name or Code"
                                    v-model="form.name" />
                                <div v-if="errors.name">{{ errors.name }}</div>
                            </div>
                            <div class="mb-6">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="product">
                                    Product
                                </label>
                                <SelectInput
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="products"
                                    :productSelect="products"
                                    v-model:selectModel="form.product_id"
                                    />

                                <!-- <select
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    name='product_id'
                                    v-model='form.product_id'>
                                    <option v-for="select in products" :key="select.id" :value="select.id">{{ select.productName }}</option>
                                </select> -->
                                <div v-if="errors.products">{{ errors.products }}</div>
                            </div>
                            <div class="mb-6">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                                    Description
                                </label>
                                <textarea
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="description"
                                    v-model="form.description">
                                </textarea>
                                <div v-if="errors.description">{{ errors.description }}</div>
                            </div>
                            <div class="flex justify-end">
                                <button
                                    class="flex flex-row rounded outline outline-green-800 outline-1 focus:shadow-outline py-1 px-3"
                                    :disabled="form.processing"
                                    type="submit"
                                    >
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
                        <div v-if="form.isDirty">There are unsaved form changes.</div>
                </div>
                <div class="inventory-table">
                    <div v-if="inventories.length > 0">
                        <span v-for="inventory in inventories" :key="inventory.id">
                            <div class="mt-1 p-1 flex flex-col">
                                <span class="text-sm">
                                    <span class="font-extrabold">{{ inventory.name }} - </span>
                                    <span>{{ inventory.description }}</span>
                                </span>
                                <span class="text-sm">
                                    {{ inventory.staff.name }}
                                </span>
                            </div>
                        </span>
                    </div>
                    <span v-else>
                        No Inventories yet
                    </span>
                </div>
                <div class="inventory-card">
                    <span v-if="inventories.length > 0">
                        <span>
                            Total inventories made - {{ inventories.length }}
                        </span>
                    </span>
                    <span v-else>
                        No Inventories yet
                    </span>
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