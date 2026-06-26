<template>
  <AppLayout>
    <main class="container">
      <h2 class="section-title">🌳 关于猫语森林</h2>
      <p style="text-align:center; color:#8a7a6e; max-width:560px; margin:-8px auto 8px; font-size:17px;">
        一个相信「每一只流浪猫都值得被爱」的温暖角落
      </p>

      <div class="mission-section">
        <div class="mission-card">
          <span class="icon">💛</span>
          <h3>我们的使命</h3>
          <p>用行动减少流浪猫的痛苦，让每一个小生命都有机会被看见、被珍惜。</p>
        </div>
        <div class="mission-card">
          <span class="icon">🌟</span>
          <h3>我们的愿景</h3>
          <p>让「领养代替购买」成为共识，让城市里不再有饥饿和受伤的流浪猫。</p>
        </div>
        <div class="mission-card mission-values">
          <span class="icon">🌱</span>
          <h3>我们的价值观</h3>
          <p>尊重生命 · 科学救助 · 透明公益 · 持续陪伴</p>
        </div>
      </div>

      <div class="stats-grid">
        <div v-for="stat in stats" :key="stat.label" class="stat-block">
          <span class="number">{{ stat.number }}</span>
          <span class="label">{{ stat.label }}</span>
        </div>
      </div>

      <h3 style="color:#4a2c1e; font-size:22px; margin-top:8px;">🧑‍🤝‍🧑 核心团队</h3>
      <p style="color:#8a7a6e; margin-bottom:4px;">一群因为爱猫而走到一起的人</p>

      <div class="team-grid">
        <div v-for="member in team" :key="member.name" class="team-card">
          <img class="avatar" :src="member.avatar" :alt="member.alt" />
          <div class="name">{{ member.name }}</div>
          <div class="role">{{ member.role }}</div>
          <div class="desc">{{ member.desc }}</div>
        </div>
      </div>

      <h3 style="color:#4a2c1e; font-size:22px; margin-top:8px;">📅 我们的足迹</h3>

      <div class="timeline-section">
        <div v-for="item in timeline" :key="item.year" class="timeline-item">
          <div class="year">{{ item.year }}</div>
          <div class="content" v-html="item.content"></div>
        </div>
      </div>

      <div class="closing-box">
        <p style="font-size:18px; color:#4a2c1e; max-width:520px; margin:0 auto;">
          "我们无法拯救所有流浪猫，<br />
          但至少可以让被我们遇见的每一只，都拥有更好的明天。"
        </p>
        <p style="color:#c17b5c; font-weight:600; margin-top:8px;">—— 猫语森林全体志愿者</p>
      </div>
    </main>
  </AppLayout>
</template>

<script setup>
import AppLayout from '../components/AppLayout.vue'

const stats = [
  { number: '87', label: '猫咪被成功领养' },
  { number: '156', label: '云养猫家长' },
  { number: '312', label: '次救助行动' },
  { number: '24', label: '位核心志愿者' },
]

const team = [
  {
    name: '邓云心',
    role: '🌱 创始人 · 项目发起人',
    avatar: 'https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&w=200',
    alt: '创始人',
    desc: '嘉应学院计算机学院学生，流浪猫救助7年经验',
  },
  {
    name: '林医生',
    role: '🏥 医疗顾问',
    avatar: 'https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&w=200',
    alt: '兽医',
    desc: '执业兽医师，负责猫咪健康评估与医疗指导',
  },
  {
    name: '小鹿',
    role: '📸 内容运营',
    avatar: 'https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&w=200',
    alt: '运营',
    desc: '负责猫咪拍摄、故事撰写和社交媒体运营',
  },
  {
    name: '阿杰',
    role: '🚗 运输组组长',
    avatar: 'https://images.pexels.com/photos/2380794/pexels-photo-2380794.jpeg?auto=compress&cs=tinysrgb&w=200',
    alt: '志愿者',
    desc: '负责猫咪的医疗接送与物资运输',
  },
]

const timeline = [
  { year: '2023.03', content: '<strong>🌱 种子发芽</strong> — 猫语森林项目正式启动，首批5位志愿者加入' },
  { year: '2023.08', content: '<strong>🏠 第一个中途家庭</strong> — 成功建立首个中途家庭，为流浪猫提供过渡安置' },
  { year: '2024.01', content: '<strong>📱 云养猫上线</strong> — 云养猫计划启动，首月获得47位云家长支持' },
  { year: '2024.06', content: '<strong>🎉 第50只猫咪</strong> — 成功帮助第50只流浪猫找到领养家庭' },
  { year: '2025.01', content: '<strong>🌳 猫语森林网站</strong> — 官方网站上线，让更多人看见流浪猫的故事' },
]
</script>

<style scoped>
.mission-section {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 32px;
  margin: 24px 0 32px;
}
.mission-card {
  background: rgba(255, 255, 255, 0.75);
  backdrop-filter: blur(8px);
  border-radius: 28px;
  padding: 32px 28px;
  border: 1px solid rgba(255, 255, 255, 0.6);
  text-align: center;
  transition: transform 0.3s;
}
.mission-card:hover {
  transform: translateY(-4px);
}
.mission-card .icon {
  font-size: 48px;
  display: block;
  margin-bottom: 8px;
}
.mission-card h3 {
  color: #4a2c1e;
  font-size: 20px;
  margin-bottom: 6px;
}
.mission-card p {
  color: #6a5a4e;
  font-size: 15px;
  line-height: 1.7;
  max-width: 320px;
  margin: 0 auto;
}
.mission-values {
  grid-column: span 2;
  max-width: 600px;
  margin: 0 auto;
}
.stats-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 16px;
  margin: 28px 0 36px;
}
.stat-block {
  background: rgba(255, 255, 255, 0.7);
  backdrop-filter: blur(4px);
  border-radius: 24px;
  padding: 24px 16px;
  text-align: center;
  border: 1px solid rgba(255, 255, 255, 0.5);
}
.stat-block .number {
  font-size: 36px;
  font-weight: 800;
  color: #4a2c1e;
  display: block;
}
.stat-block .label {
  font-size: 14px;
  color: #8a7a6e;
  margin-top: 2px;
}
.team-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 24px;
  margin: 20px 0 32px;
}
.team-card {
  background: rgba(255, 255, 255, 0.7);
  backdrop-filter: blur(4px);
  border-radius: 24px;
  padding: 24px 16px 20px;
  text-align: center;
  border: 1px solid rgba(255, 255, 255, 0.5);
  transition: transform 0.3s;
}
.team-card:hover {
  transform: translateY(-4px);
}
.team-card .avatar {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  object-fit: cover;
  margin: 0 auto 12px;
  border: 3px solid #fff;
  box-shadow: 0 4px 16px rgba(120, 80, 60, 0.10);
}
.team-card .name {
  font-size: 18px;
  font-weight: 700;
  color: #4a2c1e;
}
.team-card .role {
  font-size: 14px;
  color: #8a7a6e;
}
.team-card .desc {
  font-size: 14px;
  color: #6a5a4e;
  margin-top: 6px;
}
.timeline-section {
  margin: 24px 0 16px;
  background: rgba(255,255,255,0.5);
  backdrop-filter: blur(4px);
  border-radius: 28px;
  padding: 20px 28px;
  border: 1px solid rgba(255,255,255,0.5);
}
.timeline-item {
  display: flex;
  gap: 20px;
  padding: 16px 0;
  border-bottom: 1px solid rgba(200, 180, 168, 0.25);
}
.timeline-item:last-child {
  border-bottom: none;
}
.timeline-item .year {
  font-size: 20px;
  font-weight: 800;
  color: #c17b5c;
  min-width: 72px;
  flex-shrink: 0;
}
.timeline-item .content {
  font-size: 15px;
  color: #4a3a2e;
}
.timeline-item .content :deep(strong) {
  color: #4a2c1e;
}
.closing-box {
  text-align: center;
  padding: 28px 0 12px;
  background: rgba(255,248,244,0.4);
  border-radius: 28px;
  margin: 28px 0 10px;
}
@media (max-width: 820px) {
  .mission-section {
    grid-template-columns: 1fr;
  }
  .mission-values {
    grid-column: span 1;
  }
  .stats-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 480px) {
  .stats-grid {
    grid-template-columns: 1fr 1fr;
    gap: 10px;
  }
  .stat-block .number {
    font-size: 28px;
  }
  .timeline-item {
    flex-direction: column;
    gap: 4px;
  }
  .timeline-item .year {
    min-width: auto;
  }
}
</style>
