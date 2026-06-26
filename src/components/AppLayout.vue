<template>
  <AppHeader />
  <slot />
  <AppFooter />
</template>

<script setup>
import AppHeader from './AppHeader.vue'
import AppFooter from './AppFooter.vue'
</script>
