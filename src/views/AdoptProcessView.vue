<template>
  <AppLayout>
    <main class="container">
      <h2 class="section-title">📋 领养流程</h2>
      <div class="process-box">
        <div v-for="step in steps" :key="step.number" class="step">
          <div class="step-number">{{ step.number }}</div>
          <div class="step-content">
            <h3>{{ step.title }}</h3>
            <p>{{ step.desc }}</p>
          </div>
        </div>
        <div style="text-align:center; margin-top:30px;">
          <RouterLink to="/contact" class="btn btn-large">立即申请领养</RouterLink>
          <RouterLink to="/" class="btn btn-large" style="background-color:#999; margin-left:10px;">返回首页</RouterLink>
        </div>
      </div>
    </main>
  </AppLayout>
</template>

<script setup>
import AppLayout from '../components/AppLayout.vue'

const steps = [
  { number: 1, title: '浏览猫咪信息', desc: '在"猫咪图鉴"或"救助故事"中查看待领养猫咪的详细资料，包括年龄、性格、健康状况等。' },
  { number: 2, title: '提交领养申请', desc: '通过"联系我们"页面提交领养意向，填写您的姓名、联系方式、居住环境及养宠经验。我们将在3个工作日内回复。' },
  { number: 3, title: '线上家访评估', desc: '志愿者会与您预约一次线上视频家访，了解家中门窗安全、空间布局等情况，并解答您的疑问。' },
  { number: 4, title: '签署领养协议', desc: '双方确认无误后，签署电子领养协议，明确责任义务（包括适龄绝育、定期疫苗、接受回访等）。' },
  { number: 5, title: '接猫咪回家 🎉', desc: '约定时间接猫咪回家，我们会提供过渡期喂养指南。后续我们将定期回访，帮助您和猫咪顺利磨合。' },
]
</script>
