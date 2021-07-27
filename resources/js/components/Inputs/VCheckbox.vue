<template>
    <div :id="id" class="checkbox">
        <input :id="id" :name="name" type="checkbox" class="checkbox-input">
        <label :id="id" :for="id" class="checkbox-label">
            <slot></slot>
        </label>
    </div>
</template>

<script>
export default {
    name: "VCheckbox",
    props: [
        'id',
        'name'
    ]
}
</script>

<style scoped>

</style>
