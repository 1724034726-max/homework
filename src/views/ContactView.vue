<script setup>
import { ref } from 'vue'
import AppHeader from '../components/AppHeader.vue'
import AppFooter from '../components/AppFooter.vue'

const submittedName = ref('')
const showForm = ref(true)

function handleSubmit(event) {
  event.preventDefault()
  const formData = new FormData(event.target)
  const name = formData.get('username')
  if (name) {
    submittedName.value = String(name).trim()
    showForm.value = false
  }
}
</script>

<template>
  <AppHeader />

  <main class="container container--narrow">
    <h2 class="section-title">联系我们</h2>
    <div v-if="!showForm" class="msg">
      <h3>谢谢你，{{ submittedName }}！</h3>
      <p>我们会尽快联系你，一起帮助更多的猫咪。</p>
    </div>
    <div v-else class="form-box">
      <form @submit="handleSubmit">
        <label for="username">你的名字：</label>
        <input type="text" id="username" name="username" required />
        <input type="submit" value="提交留言" />
      </form>
    </div>
  </main>

  <AppFooter />
</template>
