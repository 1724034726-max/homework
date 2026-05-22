<script setup>
import AppHeader from '../components/AppHeader.vue'
import AppFooter from '../components/AppFooter.vue'
</script>

<template>
  <AppHeader />

  <main class="container">
    <h2 class="section-title">云养猫计划</h2>
    <div class="info-box">
      <p>每个月只需30元，就可以“云认养”一只等待领养的猫咪，为它提供猫粮、猫砂和基础医疗。</p>
      <p>你将定期收到猫咪的照片和成长日记，见证它变好的每一步。</p>
      <router-link to="/contact" class="btn btn--large">参与云养猫</router-link>
    </div>
    <div class="info-box info-box--highlight">
      <h3>当前可云养的猫咪</h3>
      <p>小橘（4个月） | 小黑（1岁） | 三花宝宝们（3个月）</p>
    </div>
  </main>

  <AppFooter />
</template>
