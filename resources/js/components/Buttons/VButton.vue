<template>
    <div :id="id">
        <button :id="id" :type="type" :class="'button button-' + variant">
            <slot></slot>
        </button>
    </div>
</template>

<script>
export default {
    name: "VButton",
    props: [
        'id',
        'type',
        'variant'
    ]
}
</script>

<style scoped>

</style>
