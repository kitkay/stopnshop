<script setup>
// import LineChart from '@/ShopComponents/Charts/LineChart.vue';
import Shopcard from '@/ShopComponents/Shopcard.vue';

</script>
<script>
export default {
    data() {
        return {
            checkauth: this.$page.props.checkauth,
            totalProducts: this.$page.props.totalProducts,
            totalSales: this.$page.props.totalSales,
            totalReports: this.$page.props.totalReports,
            totalUsers: this.$page.props.totalUsers
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
                :cardvalue = totalSales
            />
            <Shopcard
                class="reportscard"
                cardtitle = 'Reports'
                :cardvalue = totalReports
            />
            <Shopcard
                class="staffcard"
                cardtitle = 'Staffs'
                :cardvalue = totalUsers
            />
        </div>

        <!-- Dashboard Charts -->
        <div class="grid grid-cols-1 gap-5 mb-6">

        </div>

    </div>
</template>