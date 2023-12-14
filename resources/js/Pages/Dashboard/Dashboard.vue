<script setup>
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
        <div class="grid grid-cols-1 gap-5 mb-6 lg:grid-cols-4">
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
        <div class="grid grid-cols-1 gap-5 mb-6">
            Charts here
        </div>

    </div>
</template>