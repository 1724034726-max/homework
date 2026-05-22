<script setup>
import AppHeader from '../components/AppHeader.vue'
import AppFooter from '../components/AppFooter.vue'
</script>

<template>
  <AppHeader />

  <main class="container">
    <h2 class="section-title">温暖救助故事</h2>
    <div class="story">
      <img
        src="https://images.pexels.com/photos/416160/pexels-photo-416160.jpeg?auto=compress&cs=tinysrgb&w=600"
        alt="小橘"
      />
      <div class="story-text">
        <h3>车底下的小橘</h3>
        <p>
          去年冬天，志愿者在小区车底下发现了一只瑟瑟发抖的小橘猫，只有两个月大。经过半个月的治疗和喂养，小橘恢复了健康，现在已经被一个善良的家庭领养，过上了幸福生活。
        </p>
      </div>
    </div>
    <div class="story">
      <img
        src="https://images.pexels.com/photos/2071873/pexels-photo-2071873.jpeg?auto=compress&cs=tinysrgb&w=600"
        alt="小黑"
      />
      <div class="story-text">
        <h3>小黑重生记</h3>
        <p>
          浑身是伤的小黑被发现在垃圾桶旁，紧急送医后进行了手术。现在伤口已经愈合，性格格外粘人，正在等待一个永远的家。
        </p>
      </div>
    </div>
    <div class="story">
      <img
        src="https://images.pexels.com/photos/3777622/pexels-photo-3777622.jpeg?auto=compress&cs=tinysrgb&w=600"
        alt="三花"
      />
      <div class="story-text">
        <h3>三花妈妈的坚强</h3>
        <p>
          三花妈妈在工地生下了四只宝宝，志愿者发现后把它们一起转移到了安全的中途之家。如今小猫们都已经断奶，即将开放领养。
        </p>
      </div>
    </div>
  </main>

  <AppFooter />
</template>
