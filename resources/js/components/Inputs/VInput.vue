<template>
    <div :id="id" class="input">
        <label :id="id" :for="id">{{ label }}</label>
        <input :id="id" :type="type" :name="name" :value="value" :placeholder="placeholder" :class="error">
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: "VInput",
    props: [
        'id',
        'type',
        'name',
        'value',
        'placeholder',
        'error',
        'label'
    ]
}
</script>

<style scoped>

</style>
