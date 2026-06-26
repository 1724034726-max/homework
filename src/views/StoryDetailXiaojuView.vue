<template>
  <AppLayout>
    <main class="container">
      <h2 class="section-title">❄️ 小橘的冬天</h2>
      <div class="story-detail">
        <img src="https://images.pexels.com/photos/416160/pexels-photo-416160.jpeg?auto=compress&cs=tinysrgb&w=600" alt="小橘猫" />
        <p><strong>📍 发现经过：</strong>去年12月寒潮来袭，志愿者在梅州某小区汽车底盘下发现一只瑟瑟发抖的小橘猫，约2个月大，体重仅400g，严重营养不良且有猫鼻支症状。</p>

        <div class="timeline">
          <h4>📅 救助时间线</h4>
          <ul>
            <li><strong>12月5日</strong> – 发现小橘，紧急送往合作医院</li>
            <li><strong>12月8日</strong> – 完成第一次体内外驱虫，开始抗病毒治疗</li>
            <li><strong>12月20日</strong> – 痊愈出院，体重增至800g，转入中途家庭</li>
            <li><strong>1月15日</strong> – 接种第一针猫三联疫苗</li>
            <li><strong>2月1日</strong> – 通过严格审核，被爱心家庭正式领养</li>
          </ul>
        </div>

        <p><strong>🏡 领养后近况：</strong>小橘现在名叫"年糕"，在新家非常活泼，主人每天分享它的照片。它尤其喜欢趴在窗台看鸟，是家里的开心果。它的故事被发到群里后，激励了多位邻居关注流浪猫救助。</p>
        <RouterLink to="/rescue-stories" class="btn btn-large">← 返回救助故事列表</RouterLink>
      </div>
    </main>
  </AppLayout>
</template>

<script setup>
import AppLayout from '../components/AppLayout.vue'
</script>
