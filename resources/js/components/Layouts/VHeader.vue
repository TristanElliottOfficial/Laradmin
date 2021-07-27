<template>
    <header class="main-header">
        <div class="header-left">
            <h1 class="header-title">{{ title }}</h1>
            <p class="header-description">{{ description }}</p>
        </div>
        <div class="header-right">
            <slot></slot>
        </div>
    </header>
</template>

<script>
export default {
    name: "VHeader",
    props: ['title', 'description']
}
</script>

<style scoped>

</style>
