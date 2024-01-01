
import TextInput from '@/Components/TextInput.vue';
<template>
    <div class="page-menu">
        <span>
            <label>Search</label>
            <TextInput />
        </span>

        <button class="btn-view">
            <box-icon
                type = 'regular'
                name = 'plus'
                size = 'sm'
                color = 'green'
                animation= 'tada-hover'
            ></box-icon> Add
        </button>

    </div>
</template>