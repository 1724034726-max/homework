<script setup>
import { computed } from 'vue'

const props = defineProps({
  variant: {
    type: String,
    default: 'default',
  },
})

const navItems = computed(() => {
  if (props.variant === 'home') {
    return [
      { label: '首页', to: '/' },
      { label: '猫咪图鉴', to: '/cat-guide' },
      { label: '救助故事', to: '/rescue-stories' },
      { label: '云养猫', to: '/cloud-adopt' },
      { label: '关于', to: '/about' },
    ]
  }
  return [
    { label: '首页', to: '/' },
    { label: '猫咪图鉴', to: '/cat-guide' },
    { label: '救助故事', to: '/rescue-stories' },
    { label: '云养猫', to: '/cloud-adopt' },
    { label: '关于', to: '/about' },
    { label: '联系我们', to: '/contact' },
  ]
})
</script>

<template>
  <header>
    <div class="container header-content">
      <div class="logo">
        <router-link to="/">
          <img src="/logo.png" alt="猫语森林" />
        </router-link>
      </div>
      <nav class="nav">
        <ul>
          <li v-for="item in navItems" :key="item.label">
            <router-link :to="item.to">
              {{ item.label }}
            </router-link>
          </li>
        </ul>
      </nav>
    </div>
  </header>
</template>
