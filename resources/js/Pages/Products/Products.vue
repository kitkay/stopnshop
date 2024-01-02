<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import ProductCard from "@/Pages/Products/ProductCard.vue";

defineProps({
    products: {
        type: Object
    }
});
</script>

<template>

    <AppLayout title="Products">

        <template #header>
            Products
        </template>

        <!--Add the Page we need as slot on AppLayout.vue-->
        <div class="page-container">

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

