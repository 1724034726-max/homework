<template>
  <header>
    <div class="container header-content">
      <div class="logo">
        <RouterLink to="/">
          <img src="/logo.png" alt="猫语森林" />
          <span class="logo-text">猫语<span>森林</span></span>
        </RouterLink>
      </div>
      <nav class="nav">
        <ul>
          <li><RouterLink to="/">首页</RouterLink></li>
          <li><RouterLink to="/cat-guide">猫咪图鉴</RouterLink></li>
          <li><RouterLink to="/rescue-stories">救助故事</RouterLink></li>
          <li><RouterLink to="/cloud-adopt">云养猫</RouterLink></li>
          <li><RouterLink to="/about">关于</RouterLink></li>
          <li><RouterLink to="/contact">联系我们</RouterLink></li>
          <li v-if="user">
            <div class="user-area">
              <span class="user-avatar">{{ user.avatar || '🐱' }}</span>
              <span class="user-name">{{ user.name || '守护者' }}</span>
              <button class="btn-logout" @click="handleLogout">退出</button>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </header>
</template>

<script setup>
import { computed } from 'vue'
import { useRouter } from 'vue-router'
import { getUser, logout } from '../composables/useAuth'

const router = useRouter()
const user = computed(() => getUser())

function handleLogout() {
  logout()
  router.push('/login')
}
</script>

<style scoped>
.logo a {
  display: flex;
  align-items: center;
  gap: 8px;
  text-decoration: none;
}
</style>
