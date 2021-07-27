<template>
    <div :id="id + '-error'" class="error-message">
        <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
        </span>
        <span class="text"><slot></slot></span>
    </div>
</template>

<script>
export default {
    name: "VInputError",
    props: [
        'id'
    ]
}
</script>

<style scoped>

</style>
