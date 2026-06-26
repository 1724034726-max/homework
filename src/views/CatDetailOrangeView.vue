<template>
  <AppLayout>
    <main class="container">
      <h2 class="section-title">🐈 橘猫 · 中华田园猫</h2>
      <div class="detail-box">
        <img src="https://images.pexels.com/photos/104827/cat-pet-animal-domestic-104827.jpeg?auto=compress&cs=tinysrgb&w=600" alt="橘猫" />
        <p><strong>🌟 品种特点：</strong>橘猫（Orange Tabby）是中国最常见的本土猫之一。它们性格温顺、亲人，极度贪吃，素有"十个橘猫九个胖"的戏称。橘猫大部分为公猫，基因上更易发胖，但也因此格外憨厚可爱。</p>
        <p><strong>🏠 生活习惯：</strong>适应能力极强，既能纯室内饲养，也能适应有院子的环境。喜欢与人互动，尤其享受被抚摸下巴和背部。智商较高，容易训练使用猫砂盆和简单指令。</p>
        <p><strong>❤️ 领养建议：</strong>养橘猫需注意控制饮食和增加运动（如漏食球），避免肥胖引发的糖尿病或关节问题。目前我们有2只橘猫等待领养，欢迎通过"联系我们"咨询。</p>
        <RouterLink to="/adopt-process" class="btn btn-large">查看领养流程</RouterLink>
        <RouterLink to="/cat-guide" class="btn btn-large" style="background-color:#999; margin-left:10px;">← 返回图鉴</RouterLink>
      </div>
    </main>
  </AppLayout>
</template>

<script setup>
import AppLayout from '../components/AppLayout.vue'
</script>
