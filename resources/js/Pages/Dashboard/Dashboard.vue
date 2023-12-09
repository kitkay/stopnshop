<script setup>
import DashboardProjects from './DashboardProjects.vue';
</script>
<script>
export default {
    data() {
        return {
            checkauth: this.$page.props.checkauth,
            products: this.$page.props.products
        }
    }
}
</script>

<template>
    <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg p-3">
        <div class="flex items-center">
            <h2 class="text-xl font-bold">Dashboard </h2>
        </div>

        <div class="grid grid-cols-1 gap-6 mb-6 lg:grid-cols-3">
            <div class="w-full px-4 py-5 bg-white rounded-lg shadow">
                <div class="text-sm font-medium text-gray-500 truncate">
                    Total users
                </div>
                <div class="mt-1 text-3xl font-semibold text-gray-900">
                    1200
                </div>
            </div>
            <div class="w-full px-4 py-5 bg-white rounded-lg shadow">
                <div class="text-sm font-medium text-gray-500 truncate">
                    Total Profit
                </div>
                <div class="mt-1 text-3xl font-semibold text-gray-900">
                    $ 450k
                </div>
            </div>
            <div class="w-full px-4 py-5 bg-white rounded-lg shadow">
                <div class="text-sm font-medium text-gray-500 truncate">
                    Total Orders
                </div>
                <div class="mt-1 text-3xl font-semibold text-gray-900">
                    20k
                </div>
            </div>
            <div v-for="product in products" :key="product.id" >
                <div class="w-full px-4 py-5 bg-white rounded-lg shadow">
                    <DashboardProjects
                        :id = 'product.id'
                        :productname = 'product.productName'
                        :sku = 'product.sku'
                        :desp = 'product.description'
                        :category = 'product.category.catName'
                    >
                    </DashboardProjects>
                </div>
            </div>
        </div>

    </div>
</template>