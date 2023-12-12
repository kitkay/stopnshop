<script setup>

import AppLayout from "@/Layouts/AppLayout.vue";
import ProductCard from "@/Pages/Products/ProductCard.vue";

</script>
<script>
export default {
    data() {
        return {
            products: this.$page.props.products,
        }
    }
}
</script>

<template>

    <AppLayout title="Products">

        <template #header>
            Products
        </template>

        <!--Add the Page we need as slot on AppLayout.vue-->
        <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-xl sm:rounded-lg p-3">

            <div class="flex items-center">
                <span class="contentTitle">Products</span>
            </div>

            <div class="productcontainer">
                <div v-for="product in products" :key="product.id" >
                    <ProductCard
                        :id = 'product.id'
                        :productname = 'product.productName'
                        :sku = 'product.sku'
                        :category = 'product.category.catName'
                    />
                </div>
             </div>
        </div>
    </AppLayout>

</template>

