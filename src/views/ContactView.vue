<template>
  <AppLayout>
    <main class="container">
      <h2 class="section-title">📬 联系我们</h2>
      <p style="text-align:center; font-size:18px; color:#6a5a4e; max-width:600px; margin: -10px auto 10px;">
        如有任何疑问、领养意向或合作建议，欢迎随时与我们联系 💌
      </p>

      <div v-if="submitted && submitName" class="msg-box">
        <div class="msg-icon">🐾</div>
        <h3>谢谢您，{{ submitName }}！</h3>
        <p>您的留言已收到，我们会在 <strong>3个工作日内</strong> 与您联系。</p>
        <p style="margin-top:5px; font-size:15px; color:#8a7a6e;">一起帮助更多流浪猫 ❤️</p>
        <button class="btn-back" @click="resetForm">返回继续填写</button>
      </div>

      <div v-else-if="submitted && !submitName" class="msg-box" style="border:2px solid #d68f6e;">
        <div class="msg-icon">⚠️</div>
        <h3>请填写您的姓名</h3>
        <p>方便我们称呼您，谢谢！</p>
        <button class="btn-back" @click="resetForm">返回修改</button>
      </div>

      <div v-else class="contact-wrapper">
        <div class="contact-info">
          <h3>📌 联系方式</h3>
          <div v-for="item in contactInfo" :key="item.label" class="info-item" :style="item.noBorder ? { borderBottom: 'none', paddingBottom: '5px' } : {}">
            <span class="info-icon">{{ item.icon }}</span>
            <div class="info-text">
              <strong>{{ item.label }}</strong>
              <template v-if="item.links">
                <div style="margin-top:5px; display:flex; gap:12px; flex-wrap:wrap;">
                  <a v-for="link in item.links" :key="link" href="#" style="color:#c17b5c; text-decoration:none; font-weight:500;">{{ link }}</a>
                </div>
              </template>
              <template v-else>{{ item.value }}</template>
            </div>
          </div>
        </div>

        <div class="form-wrapper">
          <h3>✉️ 给我们留言</h3>
          <p class="form-subtitle">收到消息后，我们会尽快回复您</p>
          <form @submit.prevent="handleSubmit">
            <div class="form-group">
              <label for="name">您的姓名 <span class="required">*</span></label>
              <input v-model="form.name" type="text" id="name" placeholder="请输入您的姓名" required />
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="phone">手机号码</label>
                <input v-model="form.phone" type="text" id="phone" placeholder="选填" />
              </div>
              <div class="form-group">
                <label for="email">电子邮箱</label>
                <input v-model="form.email" type="text" id="email" placeholder="选填" />
              </div>
            </div>
            <div class="form-group">
              <label for="message">留言内容 <span class="required">*</span></label>
              <textarea v-model="form.message" id="message" placeholder="请告诉我们您的需求或建议…（如：领养咨询、合作意向、问题反馈等）" required></textarea>
            </div>
            <button type="submit" class="btn-submit">✉️ 提交留言</button>
          </form>
        </div>
      </div>
    </main>
  </AppLayout>
</template>

<script setup>
import { ref, reactive } from 'vue'
import AppLayout from '../components/AppLayout.vue'

const submitted = ref(false)
const submitName = ref('')
const form = reactive({
  name: '',
  phone: '',
  email: '',
  message: '',
})

const contactInfo = [
  { icon: '📞', label: '联系电话', value: '138-2388-5678' },
  { icon: '📧', label: '电子邮箱', value: 'catforest@help.com' },
  { icon: '📍', label: '办公地址', value: '广东省梅州市嘉应学院 计算机学院' },
  { icon: '🕐', label: '工作时间', value: '周一至周五 9:00 – 18:00' },
  { icon: '💬', label: '社交媒体', links: ['微信', '微博', '小红书'], noBorder: true },
]

function handleSubmit() {
  const name = form.name.trim()
  submitted.value = true
  submitName.value = name
}

function resetForm() {
  submitted.value = false
  submitName.value = ''
  form.name = ''
  form.phone = ''
  form.email = ''
  form.message = ''
}
</script>

<style scoped>
.contact-wrapper {
  display: grid;
  grid-template-columns: 1fr 1.5fr;
  gap: 40px;
  margin: 30px 0 50px;
}
.contact-info {
  background: rgba(255, 255, 255, 0.75);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  border-radius: 32px;
  padding: 35px 30px;
  box-shadow: 0 12px 40px rgba(120, 80, 60, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.6);
}
.contact-info h3 {
  color: #4a2c1e;
  font-size: 22px;
  margin-bottom: 20px;
  text-align: center;
}
.contact-info .info-item {
  display: flex;
  align-items: center;
  gap: 15px;
  padding: 14px 0;
  border-bottom: 1px solid rgba(200, 180, 168, 0.25);
}
.contact-info .info-icon {
  font-size: 28px;
  width: 45px;
  text-align: center;
  flex-shrink: 0;
}
.contact-info .info-text {
  font-size: 16px;
  color: #4a3a2e;
}
.contact-info .info-text strong {
  display: block;
  font-size: 13px;
  color: #8a7a6e;
  font-weight: 500;
}
.form-wrapper {
  background: rgba(255, 255, 255, 0.75);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  border-radius: 32px;
  padding: 35px 30px;
  box-shadow: 0 12px 40px rgba(120, 80, 60, 0.08);
  border: 1px solid rgba(255, 255, 255, 0.6);
}
.form-wrapper h3 {
  color: #4a2c1e;
  font-size: 22px;
  margin-bottom: 6px;
  text-align: center;
}
.form-wrapper .form-subtitle {
  text-align: center;
  color: #8a7a6e;
  font-size: 14px;
  margin-bottom: 25px;
}
.form-group {
  margin-bottom: 18px;
}
.form-group label {
  display: block;
  font-weight: 600;
  font-size: 14px;
  color: #4a2c1e;
  margin-bottom: 5px;
}
.form-group label .required {
  color: #d68f6e;
  margin-left: 2px;
}
.form-group input,
.form-group textarea {
  width: 100%;
  padding: 12px 16px;
  border: 2px solid #e8ddd5;
  border-radius: 16px;
  font-size: 16px;
  font-family: inherit;
  background: rgba(255, 255, 255, 0.5);
  transition: border-color 0.3s, box-shadow 0.3s;
}
.form-group input:focus,
.form-group textarea:focus {
  outline: none;
  border-color: #c17b5c;
  box-shadow: 0 0 0 4px rgba(193, 123, 92, 0.10);
  background: #fff;
}
.form-group textarea {
  resize: vertical;
  min-height: 120px;
}
.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 18px;
}
.btn-submit {
  width: 100%;
  background: linear-gradient(135deg, #c17b5c, #d68f6e);
  color: #fff;
  border: none;
  padding: 14px;
  border-radius: 30px;
  font-size: 18px;
  font-weight: 700;
  cursor: pointer;
  transition: transform 0.2s, box-shadow 0.3s;
  letter-spacing: 1px;
}
.btn-submit:hover {
  transform: scale(1.02);
  box-shadow: 0 12px 28px rgba(193, 123, 92, 0.25);
}
.btn-submit:active {
  transform: scale(0.98);
}
.msg-box {
  background: rgba(255, 248, 244, 0.8);
  backdrop-filter: blur(8px);
  border-radius: 32px;
  padding: 50px 40px;
  text-align: center;
  margin: 30px 0 50px;
  border: 1px solid rgba(255, 255, 255, 0.6);
}
.msg-box .msg-icon {
  font-size: 64px;
  margin-bottom: 15px;
}
.msg-box h3 {
  color: #4a2c1e;
  font-size: 28px;
  margin-bottom: 10px;
}
.msg-box p {
  font-size: 18px;
  color: #6a5a4e;
}
.msg-box .btn-back {
  display: inline-block;
  margin-top: 20px;
  background: #c17b5c;
  color: #fff;
  padding: 10px 30px;
  border-radius: 30px;
  text-decoration: none;
  font-weight: 600;
  transition: background 0.3s;
  border: none;
  cursor: pointer;
  font-size: 16px;
}
.msg-box .btn-back:hover {
  background: #d68f6e;
}
@media (max-width: 768px) {
  .contact-wrapper {
    grid-template-columns: 1fr;
    gap: 25px;
  }
  .form-row {
    grid-template-columns: 1fr;
  }
}
</style>
