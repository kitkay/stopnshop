<script setup>
import DashboardProjects from './DashboardProjects.vue';
import Shopcard from '../../ShopComponents/Shopcard.vue';

</script>
<script>
export default {
    data() {
        return {
            checkauth: this.$page.props.checkauth,
            products: this.$page.props.products,
            totalProducts: this.$page.props.totalProducts,
        }
    }
}
</script>

<template>
    <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg p-3">
        <div class="flex items-center">
            <span class="contentTitle">Dashboard </span>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 gap-6 mb-6 lg:grid-cols-4">
            <Shopcard
                class="productscard"
                cardtitle = 'Products'
                :cardvalue = totalProducts
            />
            <Shopcard
                class="salescard"
                cardtitle = 'Total Sales'
                :cardvalue = totalProducts
            />
            <Shopcard
                class="reportscard"
                cardtitle = 'Reports'
                :cardvalue = totalProducts
            />
            <Shopcard
                class="staffcard"
                cardtitle = 'Staffs'
                :cardvalue = totalProducts
            />
        </div>

        <!-- Dashboard Charts -->
        <div class="grid grid-cols-1 gap-6 mb-6 lg:grid-cols-5">
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