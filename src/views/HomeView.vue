<template>
  <AppLayout>
    <section class="banner">
      <div class="banner-text">
        <h1>🐾 用爱终止流浪</h1>
        <p>每一只流浪猫，都值得被温柔以待</p>
      </div>
    </section>

    <main class="container">
      <h2 class="section-title">📌 快捷入口</h2>
      <div class="quick-links">
        <RouterLink to="/adopt-process">📋 领养流程</RouterLink>
        <RouterLink to="/volunteer">🙋 志愿者</RouterLink>
        <RouterLink to="/donate">❤️ 捐赠</RouterLink>
        <RouterLink to="/faq">❓ 常见问题</RouterLink>
        <RouterLink to="/health-tips">🏥 健康知识</RouterLink>
      </div>

      <h2 class="section-title">最新救助故事</h2>
      <div class="card-grid">
        <div class="card">
          <img src="https://images.pexels.com/photos/416160/pexels-photo-416160.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="橘猫" />
          <div class="card-content">
            <h3>小橘的冬天</h3>
            <p>上个月在小区车底下发现的小橘猫，现在已经找到了温暖的家。</p>
            <RouterLink to="/story-detail-xiaoju" class="btn">阅读更多</RouterLink>
          </div>
        </div>
        <div class="card">
          <img src="https://images.pexels.com/photos/2071873/pexels-photo-2071873.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="黑猫" />
          <div class="card-content">
            <h3>小黑找家</h3>
            <p>性格温顺的黑猫，已经完成驱虫和疫苗，等待心软的你来带它回家。</p>
            <RouterLink to="/rescue-stories" class="btn">阅读更多</RouterLink>
          </div>
        </div>
        <div class="card">
          <img src="https://images.pexels.com/photos/3777622/pexels-photo-3777622.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="三花猫" />
          <div class="card-content">
            <h3>三花妈妈的日常</h3>
            <p>看看我们的小区明星——三花妈妈和她的四个崽崽的温馨日常。</p>
            <RouterLink to="/rescue-stories" class="btn">阅读更多</RouterLink>
          </div>
        </div>
      </div>

      <div class="info-box" style="text-align:center; background:#faf3ef;">
        <p style="font-size:18px; max-width:600px; margin:0 auto;">
          🌱 倡导以领养代替购买，用绝育代替捕杀。<br />
          希望有一天，所有的猫咪都能不再流浪。
        </p>
      </div>
    </main>
  </AppLayout>
</template>

<script setup>
import AppLayout from '../components/AppLayout.vue'
</script>

<style scoped>
.banner {
  width: 92%;
  max-width: 1200px;
  margin: 24px auto 32px;
}
</style>
