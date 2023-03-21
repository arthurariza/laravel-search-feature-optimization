
<script setup>
import {Link} from "@inertiajs/vue3";
defineProps({links: Object});
</script>

<template>
    <div class="mt-4">
    <Link
        v-for="link in links"
        :href="link.url"
        preserve-scroll
        v-html="link.label"
        class="px-1 text-blue-500 text-sm"
        :class="{'font-bold text-2xl' : link.active }"
    />
    </div>
</template>

<style scoped>
</style>
