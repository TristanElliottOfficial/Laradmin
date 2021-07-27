<template>
    <div class="card">
        <h1 class="card-title">{{ title }}</h1>
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: "VAuthCard",
    props: ['title']
}
</script>

<style scoped>

</style>
