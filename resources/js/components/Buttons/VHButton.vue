<template>
    <a :href="link" :class="'button button-' + variant"><slot></slot></a>
</template>

<script>
export default {
    name: "VHButton",
    props: ['link', 'variant']
}
</script>

<style scoped>

</style>
