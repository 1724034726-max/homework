<template>
  <div class="login-page">
    <div class="login-container">
      <div class="login-card">
        <div class="login-logo">
          <img src="/logo.png" alt="猫语森林" />
          <h1>🐾 猫语森林</h1>
          <p>用爱终止流浪</p>
        </div>

        <div class="login-error" :class="{ show: showError }">{{ errorMessage }}</div>

        <form class="login-form" autocomplete="off" @submit.prevent="handleSubmit">
          <div class="form-group">
            <label for="username">账号</label>
            <input v-model="username" type="text" id="username" placeholder="请输入用户名" />
          </div>
          <div class="form-group">
            <label for="password">密码</label>
            <input v-model="password" type="password" id="password" placeholder="请输入密码" />
          </div>
          <button type="submit" class="btn-login">🌟 进入猫语森林</button>
        </form>

        <div class="demo-hint">
          💡 演示账号：<code>catlover</code> ｜ 密码：<code>123456</code>
        </div>

        <div class="login-footer">
          一起帮助更多流浪猫 ❤️
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { useRouter } from 'vue-router'
import { login } from '../composables/useAuth'

const router = useRouter()
const username = ref('catlover')
const password = ref('123456')
const showError = ref(false)
const errorMessage = ref('⚠️ 用户名或密码错误')

let errorTimer = null

function handleSubmit() {
  const result = login(username.value.trim(), password.value.trim())
  if (result.success) {
    router.push('/')
  } else {
    errorMessage.value = '⚠️ 用户名或密码错误，请重试'
    showError.value = true
    clearTimeout(errorTimer)
    errorTimer = setTimeout(() => {
      showError.value = false
    }, 3000)
  }
}
</script>

<style scoped>
.login-page {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(145deg, #f7ede8 0%, #e8d9d0 100%);
  margin: 0;
  padding: 20px;
}
.login-container {
  width: 100%;
  max-width: 420px;
}
.login-card {
  background: rgba(255, 255, 255, 0.7);
  backdrop-filter: blur(16px);
  -webkit-backdrop-filter: blur(16px);
  border-radius: 48px;
  padding: 48px 36px 40px;
  box-shadow: 0 30px 60px rgba(120, 80, 60, 0.15),
              0 10px 30px rgba(120, 80, 60, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.5);
  transition: transform 0.3s ease;
}
.login-card:hover {
  transform: translateY(-4px);
}
.login-logo {
  text-align: center;
  margin-bottom: 28px;
}
.login-logo img {
  height: 56px;
  width: auto;
}
.login-logo h1 {
  font-size: 26px;
  font-weight: 700;
  color: #4a2c1e;
  margin-top: 8px;
  letter-spacing: 2px;
}
.login-logo p {
  font-size: 15px;
  color: #8a7a6e;
  margin-top: 2px;
}
.login-form .form-group {
  margin-bottom: 20px;
}
.login-form label {
  display: block;
  font-weight: 600;
  font-size: 14px;
  color: #4a2c1e;
  margin-bottom: 6px;
}
.login-form input {
  width: 100%;
  padding: 14px 18px;
  border: 2px solid #e8ddd5;
  border-radius: 30px;
  font-size: 16px;
  background: rgba(255, 255, 255, 0.6);
  transition: border-color 0.3s, box-shadow 0.3s;
  outline: none;
  font-family: inherit;
}
.login-form input:focus {
  border-color: #c17b5c;
  box-shadow: 0 0 0 4px rgba(193, 123, 92, 0.15);
  background: #fff;
}
.login-form .btn-login {
  width: 100%;
  padding: 14px;
  border: none;
  border-radius: 30px;
  font-size: 18px;
  font-weight: 700;
  color: #fff;
  background: linear-gradient(135deg, #c17b5c, #d68f6e);
  cursor: pointer;
  transition: transform 0.2s, box-shadow 0.3s;
  letter-spacing: 1px;
  margin-top: 4px;
}
.login-form .btn-login:hover {
  transform: scale(1.02);
  box-shadow: 0 12px 28px rgba(193, 123, 92, 0.3);
}
.login-form .btn-login:active {
  transform: scale(0.98);
}
.login-error {
  background: #fce8e6;
  color: #b33a34;
  padding: 10px 16px;
  border-radius: 30px;
  font-size: 14px;
  text-align: center;
  margin-bottom: 16px;
  display: none;
  border: 1px solid #f5cdc8;
}
.login-error.show {
  display: block;
}
.login-footer {
  text-align: center;
  margin-top: 20px;
  font-size: 13px;
  color: #a09084;
}
.demo-hint {
  background: #f5ede8;
  border-radius: 20px;
  padding: 12px 16px;
  margin-top: 18px;
  font-size: 14px;
  color: #6a5a4e;
  text-align: center;
  border: 1px dashed #dccfc6;
}
.demo-hint code {
  background: #e8ddd5;
  padding: 2px 10px;
  border-radius: 12px;
  font-size: 13px;
  color: #4a2c1e;
}
</style>
