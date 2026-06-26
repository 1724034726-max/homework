<template>
  <AppLayout>
    <main class="container">
      <h2 class="section-title">💛 温暖救助故事</h2>
      <p style="text-align:center; color:#8a7a6e; margin-top:-12px; margin-bottom:20px;">
        每一个被拯救的生命，都值得被铭记 ✨
      </p>

      <div v-for="story in stories" :key="story.title" class="story">
        <img :src="story.image" :alt="story.alt" />
        <div class="story-text">
          <h3>{{ story.title }}</h3>
          <span class="story-status" :class="story.statusClass">{{ story.status }}</span>
          <p>{{ story.desc }}</p>
          <component
            :is="story.link ? 'RouterLink' : 'a'"
            v-bind="story.link ? { to: story.link } : { href: '#' }"
            class="btn"
            :style="story.btnStyle"
          >
            {{ story.btnText }}
          </component>
        </div>
      </div>
    </main>
  </AppLayout>
</template>

<script setup>
import AppLayout from '../components/AppLayout.vue'

const stories = [
  {
    title: '🍊 车底下的小橘',
    status: '✅ 已领养',
    statusClass: 'adopted',
    image: 'https://images.pexels.com/photos/416160/pexels-photo-416160.jpeg?auto=compress&cs=tinysrgb&w=600',
    alt: '小橘',
    desc: '去年冬天，志愿者在小区车底下发现了一只瑟瑟发抖的小橘猫，只有两个月大。经过半个月的治疗和喂养，小橘恢复了健康，现在已经被一个善良的家庭领养，过上了幸福生活。',
    link: '/story-detail-xiaoju',
    btnText: '阅读全文 →',
    btnStyle: { marginTop: '8px' },
  },
  {
    title: '🖤 小黑重生记',
    status: '⏳ 等待领养',
    statusClass: 'waiting',
    image: 'https://images.pexels.com/photos/2071873/pexels-photo-2071873.jpeg?auto=compress&cs=tinysrgb&w=600',
    alt: '小黑',
    desc: '浑身是伤的小黑被发现在垃圾桶旁，紧急送医后进行了手术。现在伤口已经愈合，性格格外粘人，正在等待一个永远的家。',
    link: null,
    btnText: '了解详情 →',
    btnStyle: { marginTop: '8px', background: '#8a7a6e' },
  },
  {
    title: '🌸 三花妈妈的坚强',
    status: '🏠 中途家庭',
    statusClass: 'fostering',
    image: 'https://images.pexels.com/photos/3777622/pexels-photo-3777622.jpeg?auto=compress&cs=tinysrgb&w=600',
    alt: '三花妈妈',
    desc: '三花妈妈在工地生下了四只宝宝，志愿者发现后把它们一起转移到了安全的中途之家。如今小猫们都已经断奶，即将开放领养。',
    link: null,
    btnText: '了解详情 →',
    btnStyle: { marginTop: '8px', background: '#8a7a6e' },
  },
  {
    title: '🤍 小白：从恐惧到信任',
    status: '✅ 已领养',
    statusClass: 'adopted',
    image: 'https://images.pexels.com/photos/1056251/pexels-photo-1056251.jpeg?auto=compress&cs=tinysrgb&w=600',
    alt: '小白',
    desc: '小白是一只被遗弃在公园的白色流浪猫，极度怕人。志愿者坚持投喂了三个月，终于取得了它的信任。如今小白已经在新家过着公主般的生活。',
    link: null,
    btnText: '阅读全文 →',
    btnStyle: { marginTop: '8px', background: '#8a7a6e' },
  },
  {
    title: '🧡 大橘：被救的猫爸爸',
    status: '⏳ 等待领养',
    statusClass: 'waiting',
    image: 'https://images.pexels.com/photos/736582/pexels-photo-736582.jpeg?auto=compress&cs=tinysrgb&w=600',
    alt: '大橘',
    desc: '大橘是一只成年公猫，因为打架受伤严重被好心人救助。经过治疗已经康复，性格憨厚稳重，适合作为家庭伴侣猫。',
    link: null,
    btnText: '了解详情 →',
    btnStyle: { marginTop: '8px', background: '#8a7a6e' },
  },
  {
    title: '🌺 小花：校园里的明星猫',
    status: '🏠 中途家庭',
    statusClass: 'fostering',
    image: 'https://images.pexels.com/photos/1388153/pexels-photo-1388153.jpeg?auto=compress&cs=tinysrgb&w=600',
    alt: '小花',
    desc: '小花是嘉应学院校园里的流浪猫，深受学生喜爱。在一次意外受伤后，志愿者们集资为它做了手术，现在正在中途家庭休养。',
    link: null,
    btnText: '了解详情 →',
    btnStyle: { marginTop: '8px', background: '#8a7a6e' },
  },
]
</script>

<style scoped>
.story-status {
  display: inline-block;
  font-size: 13px;
  font-weight: 600;
  padding: 2px 16px;
  border-radius: 30px;
  margin-top: 6px;
}
.story-status.adopted {
  background: #e8f5e9;
  color: #2e7d32;
}
.story-status.fostering {
  background: #fff3e0;
  color: #e67e22;
}
.story-status.rescuing {
  background: #fce8e6;
  color: #b33a34;
}
.story-status.waiting {
  background: #e3f2fd;
  color: #1565c0;
}
</style>
