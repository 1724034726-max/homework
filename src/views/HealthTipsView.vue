<template>
  <AppLayout>
    <main class="container">
      <h2 class="section-title">🏥 猫咪健康小课堂</h2>

      <div class="card-grid">
        <div v-for="tip in tips" :key="tip.title" class="card">
          <img :src="tip.image" :alt="tip.alt" />
          <div class="card-content">
            <h3>{{ tip.title }}</h3>
            <p>{{ tip.desc }}</p>
          </div>
        </div>
      </div>
    </main>
  </AppLayout>
</template>

<script setup>
import AppLayout from '../components/AppLayout.vue'

const tips = [
  {
    title: '💉 疫苗与驱虫',
    image: 'https://images.pexels.com/photos/127028/pexels-photo-127028.jpeg?auto=compress&cs=tinysrgb&w=600',
    alt: '疫苗',
    desc: '幼猫2个月大开始接种猫三联，间隔3-4周打第二针，成年后每年加强一针。体内外驱虫每月一次，尤其是流浪猫收养后需立即驱虫。',
  },
  {
    title: '🍗 科学喂养',
    image: 'https://images.pexels.com/photos/2558605/pexels-photo-2558605.jpeg?auto=compress&cs=tinysrgb&w=600',
    alt: '饮食',
    desc: '以优质猫粮为主食，湿粮和冻干作为辅食。猫咪是纯肉食动物，避免喂食谷物过多的人类食物。保证每日充足饮水。',
  },
  {
    title: '✂️ 绝育的重要性',
    image: 'https://images.pexels.com/photos/134178/pexels-photo-134178.jpeg?auto=compress&cs=tinysrgb&w=600',
    alt: '绝育',
    desc: '流浪猫绝育是控制种群数量最人道的方式。家猫建议在6-8个月龄进行绝育，可有效预防生殖系统疾病，延长寿命。',
  },
  {
    title: '🧶 行为与心理',
    image: 'https://images.pexels.com/photos/1170986/pexels-photo-1170986.jpeg?auto=compress&cs=tinysrgb&w=600',
    alt: '行为',
    desc: '猫咪需要足够的垂直空间（猫爬架）和藏身处。每天至少互动15分钟（逗猫棒、追逐游戏）。多猫家庭需注意资源分配，避免竞争压力。',
  },
]
</script>
