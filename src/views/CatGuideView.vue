<script setup>
import AppHeader from '../components/AppHeader.vue'
import AppFooter from '../components/AppFooter.vue'
</script>

<template>
  <AppHeader />

  <main class="container">
    <h2 class="section-title">猫咪品种图鉴</h2>
    <div class="card-grid card-grid--guide">
      <div class="card">
        <img
          src="https://images.pexels.com/photos/104827/cat-pet-animal-domestic-104827.jpeg?auto=compress&cs=tinysrgb&w=600"
          alt="橘猫"
        />
        <div class="card-content">
          <h3>橘猫</h3>
          <p>性格亲人，十个橘猫九个胖，还有一个特别胖。最受欢迎的中华田园猫之一。</p>
        </div>
      </div>
      <div class="card">
        <img
          src="https://images.pexels.com/photos/617278/pexels-photo-617278.jpeg?auto=compress&cs=tinysrgb&w=600"
          alt="英短"
        />
        <div class="card-content">
          <h3>英国短毛猫</h3>
          <p>圆脸圆眼，性格安静温顺，毛色以蓝色最为经典，非常适合家庭饲养。</p>
        </div>
      </div>
      <div class="card">
        <img
          src="https://images.pexels.com/photos/320014/pexels-photo-320014.jpeg?auto=compress&cs=tinysrgb&w=600"
          alt="暹罗"
        />
        <div class="card-content">
          <h3>暹罗猫</h3>
          <p>拥有迷人的蓝色眼睛和重点色被毛，聪明好动，喜欢与人交流。</p>
        </div>
      </div>
      <div class="card">
        <img
          src="https://images.pexels.com/photos/1741205/pexels-photo-1741205.jpeg?auto=compress&cs=tinysrgb&w=600"
          alt="布偶"
        />
        <div class="card-content">
          <h3>布偶猫</h3>
          <p>体型较大，毛发柔软如丝，性格像狗狗一样粘人，是理想的室内猫。</p>
        </div>
      </div>
    </div>
  </main>

  <AppFooter />
</template>
