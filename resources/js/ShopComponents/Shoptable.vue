<script setup>
import DangerButton from '@/Components/DangerButton.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

</script>

<template>
    <div class="grid col-span-1 p3 m-1">
        <div class="flex flex-col w-full rounded border">
            <span class="grid grid-cols-5 border border-black text-center">
                    <span class="col-span-1">SKU</span>
                    <span class="col-span-2">Name</span>
                    <span class="col-span-1">Price</span>
                    <span class="col-span-1"></span>
            </span>
            <span class="grid grid-cols-5 border border-black text-center">
                    <span class="col-span-1 md:col-span-1 sm:col-span-1 xs:col-span-12">GT1209</span>
                    <span class="col-span-2 md:col-span-2 sm:col-span-1 xs:col-span-12">Greate Taste Original</span>
                    <span class="col-span-1 md:col-span-1 sm:col-span-1 xs:col-span-12">₱ 15.00</span>
                    <span class="col-span-1 md:col-span-1 sm:col-span-1 xs:col-span-12">
                        <div class="flex flex-col my-1 lg:flex-row md:flex-col sm:flex-row text-center">
                            <button
                                class="btn-edit"
                            >View</button>

                            <button
                                class="btn-view"
                            >Edit</button>

                            <button
                                class="btn-delete"
                            >Delete</button>
                        </div>
                    </span>
            </span>
        </div>
    </div>
</template>