<script setup>
    import NavBar from './Components/NavBar.vue';
    const props = defineProps(['message', 'status', 'share_data']);
</script>
<template>
    <nav-bar/>
    <div class="px-4">
        <h6>{{ props.message }}</h6>
        <h6>{{ props.status }}</h6>
        <h6>{{ props.share_data }}</h6>
    </div>

</template>