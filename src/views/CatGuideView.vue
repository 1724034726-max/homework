<template>
  <AppLayout>
    <main class="container">
      <h2 class="section-title">🐈 猫咪品种图鉴</h2>
      <p style="text-align:center; color:#8a7a6e; margin-top:-12px; margin-bottom:20px;">
        认识更多猫咪朋友，找到属于你的那一只 ❤️
      </p>

      <div class="card-grid">
        <div v-for="cat in cats" :key="cat.name" class="card">
          <img :src="cat.image" :alt="cat.alt" />
          <div class="card-content">
            <h3>{{ cat.name }}</h3>
            <span class="cat-tag" :class="cat.tagClass">{{ cat.tag }}</span>
            <p>{{ cat.desc }}</p>
          </div>
        </div>
      </div>
    </main>
  </AppLayout>
</template>

<script setup>
import AppLayout from '../components/AppLayout.vue'

const cats = [
  {
    name: '🐱 橘猫',
    tag: '🌟 人气王',
    tagClass: 'popular',
    image: 'https://images.pexels.com/photos/104827/cat-pet-animal-domestic-104827.jpeg?auto=compress&cs=tinysrgb&w=600',
    alt: '橘猫',
    desc: '性格亲人，十个橘猫九个胖，还有一个特别胖。最受欢迎的中华田园猫之一。',
  },
  {
    name: '🇬🇧 英国短毛猫',
    tag: '🐾 温顺',
    tagClass: '',
    image: 'https://images.pexels.com/photos/617278/pexels-photo-617278.jpeg?auto=compress&cs=tinysrgb&w=600',
    alt: '英国短毛猫',
    desc: '圆脸圆眼，性格安静温顺，毛色以蓝色最为经典，非常适合家庭饲养。',
  },
  {
    name: '🇹🇭 暹罗猫',
    tag: '💬 话痨',
    tagClass: '',
    image: 'https://images.pexels.com/photos/320014/pexels-photo-320014.jpeg?auto=compress&cs=tinysrgb&w=600',
    alt: '暹罗猫',
    desc: '拥有迷人的蓝色眼睛和重点色被毛，聪明好动，喜欢与人"聊天"。',
  },
  {
    name: '🧸 布偶猫',
    tag: '💖 粘人精',
    tagClass: 'popular',
    image: 'https://images.pexels.com/photos/1741205/pexels-photo-1741205.jpeg?auto=compress&cs=tinysrgb&w=600',
    alt: '布偶猫',
    desc: '体型较大，毛发柔软如丝，性格像狗狗一样粘人，是理想的室内伴侣猫。',
  },
  {
    name: '🐾 狸花猫',
    tag: '🏆 中华名猫',
    tagClass: '',
    image: 'https://images.pexels.com/photos/1643456/pexels-photo-1643456.jpeg?auto=compress&cs=tinysrgb&w=600',
    alt: '狸花猫',
    desc: '中国本土最古老的猫种之一，花纹独特，身体强壮，聪明独立且捕猎能力超强。',
  },
  {
    name: '🇺🇸 美国短毛猫',
    tag: '💪 健壮',
    tagClass: '',
    image: 'https://images.pexels.com/photos/45201/kitty-cat-kitten-pet-45201.jpeg?auto=compress&cs=tinysrgb&w=600',
    alt: '美国短毛猫',
    desc: '体格结实，性格温和友善，标志性的银色虎斑纹，是家庭宠物的绝佳选择。',
  },
  {
    name: '🔮 斯芬克斯无毛猫',
    tag: '✨ 独特',
    tagClass: 'rare',
    image: 'https://images.pexels.com/photos/2860825/pexels-photo-2860825.jpeg?auto=compress&cs=tinysrgb&w=600',
    alt: '斯芬克斯无毛猫',
    desc: '外貌独特，性情温顺黏人，皮肤需要定期护理，是猫中"小暖炉"。',
  },
  {
    name: '🌲 挪威森林猫',
    tag: '❄️ 北欧精灵',
    tagClass: '',
    image: 'https://images.pexels.com/photos/2714961/pexels-photo-2714961.jpeg?auto=compress&cs=tinysrgb&w=600',
    alt: '挪威森林猫',
    desc: '拥有浓密的双层被毛，体型高大健壮，性格友善沉稳，是猫界的"小狮子"。',
  },
]
</script>

<style scoped>
.cat-tag {
  display: inline-block;
  background: #f5ede8;
  color: #8a7a6e;
  font-size: 12px;
  padding: 2px 14px;
  border-radius: 30px;
  margin-top: 6px;
  font-weight: 500;
}
.cat-tag.popular {
  background: #fce8e0;
  color: #c17b5c;
}
.cat-tag.rare {
  background: #e8f0f5;
  color: #4a7a8a;
}
</style>
