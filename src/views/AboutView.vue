<script setup>
import AppHeader from '../components/AppHeader.vue'
import AppFooter from '../components/AppFooter.vue'
</script>

<template>
  <AppHeader />

  <main class="container container--narrow">
    <h2 class="section-title">关于猫语森林</h2>
    <div class="about-content">
      <p>“猫语森林”是一个专注于流浪猫救助与领养宣传的公益网站。</p>
      <p>我们希望通过温暖的设计和真实的故事，让更多人关注流浪动物，用领养代替购买，用绝育代替捕杀。</p>
      <p>本网站为课堂实验作品，由邓云心制作完成。</p>
      <img src="/logo.png" alt="猫语森林Logo" />
    </div>
  </main>

  <AppFooter />
</template>
