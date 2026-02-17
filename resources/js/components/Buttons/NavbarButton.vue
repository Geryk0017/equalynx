<template>
    <Link :href="href" class="is-drawer-close:tooltip is-drawer-close:tooltip-right" :data-tip="label">
        <component :is="icon" />
        <span class="is-drawer-close:hidden">{{ label }}</span>
    </Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true
    },
    icon: {
        type: Object,
        required: true
    },
    label: {
        type: String,
        required: true
    }
});
</script>