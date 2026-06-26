<template>
  <AppLayout>
    <main class="container">
      <h2 class="section-title">❤️ 爱心捐赠</h2>

      <div class="info-box">
        <p style="font-size:20px;">每一笔捐款，都将直接用于流浪猫的 <strong>医疗救助、猫粮采购和绝育手术</strong>。</p>
        <p style="color:#C17B5C; font-size:24px; font-weight:bold;">感恩每一份善意 🙏</p>
      </div>

      <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(250px,1fr)); gap:20px; margin-bottom:30px;">
        <div v-for="item in donateItems" :key="item.title" style="background:white; padding:25px; border-radius:20px; box-shadow:0 8px 16px rgba(0,0,0,0.1); text-align:center;">
          <div style="font-size:48px;">{{ item.icon }}</div>
          <h3 style="color:#C17B5C;">{{ item.title }}</h3>
          <p>{{ item.desc }}</p>
        </div>
      </div>

      <div class="info-box" style="background-color:#FFF5E8;">
        <h3 style="color:#C17B5C;">📦 捐赠方式（示例）</h3>
        <p><strong>微信/支付宝：</strong> catforest@donate.com（请备注"猫语森林"）</p>
        <p><strong>物资捐赠：</strong> 联系客服获取寄送地址（猫粮、猫砂、药品等）</p>
        <p style="font-size:14px; color:#999; margin-top:15px;">* 本页面为课程演示，不构成真实募捐行为。</p>
      </div>
    </main>
  </AppLayout>
</template>

<script setup>
import AppLayout from '../components/AppLayout.vue'

const donateItems = [
  { icon: '🍚', title: '猫粮基金', desc: '30元 ≈ 一只猫一周的口粮' },
  { icon: '💉', title: '医疗救助', desc: '100元 ≈ 基础驱虫+疫苗' },
  { icon: '✂️', title: '绝育计划', desc: '200元 ≈ 一只母猫的绝育手术费' },
]
</script>
