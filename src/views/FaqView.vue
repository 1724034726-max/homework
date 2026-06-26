<template>
  <AppLayout>
    <main class="container">
      <h2 class="section-title">❓ 常见问题</h2>

      <div v-for="item in faqList" :key="item.q" class="faq-item">
        <h3>{{ item.q }}</h3>
        <p>{{ item.a }}</p>
      </div>

      <div class="ask-box">
        <div v-if="isSuccess" class="success-box">
          <span class="success-icon">✅</span>
          <h4>谢谢 {{ lastQuestionName }} 的提问！</h4>
          <p>我们会在 <strong>48 小时内</strong> 通过邮箱回复你（如果留了的话）。</p>
          <p style="font-size:14px; color:#8a7a6e; margin-top:4px;">一起帮助更多流浪猫 ❤️</p>
          <button class="btn-back" @click="continueAsk">📝 继续提问</button>
          <div v-if="questions.length > 0" class="history-toggle">
            <button @click="showHistory = !showHistory">📜 查看已提交的问题（{{ questions.length }}条）</button>
            <div class="history-list" :class="{ show: showHistory }">
              <div v-for="q in reversedQuestions" :key="q.id" class="history-item">
                <strong>{{ q.name }}</strong> 问：{{ q.content.substring(0, 40) }}{{ q.content.length > 40 ? '…' : '' }}
                <span style="color:#b0a098; font-size:12px; margin-left:8px;">{{ q.time }}</span>
              </div>
            </div>
          </div>
        </div>

        <template v-else>
          <div class="ask-header">
            <h3>💬 我有问题想问</h3>
            <p>如果上面没有你想问的，在这里提交，我们会尽快回答你</p>
          </div>
          <div v-if="formError" class="form-banner-error">{{ formError }}</div>
          <form class="ask-form" @submit.prevent="handleSubmit">
            <div class="form-row">
              <div class="form-group">
                <label for="ask_name">你的名字 <span class="required">*</span></label>
                <input v-model="form.name" type="text" id="ask_name" placeholder="例如：小爱" required />
              </div>
              <div class="form-group">
                <label for="ask_email">邮箱（选填）</label>
                <input v-model="form.email" type="text" id="ask_email" placeholder="方便我们回复你" />
              </div>
            </div>
            <div class="form-group">
              <label for="ask_content">你的问题 <span class="required">*</span></label>
              <textarea v-model="form.content" id="ask_content" placeholder="请详细描述你的疑问…" required></textarea>
            </div>
            <div class="btn-wrap">
              <button type="submit" class="btn-ask">📩 提交问题</button>
            </div>
          </form>
          <div v-if="questions.length > 0" class="history-toggle">
            <button @click="showHistory = !showHistory">📜 查看已提交的问题（{{ questions.length }}条）</button>
            <div class="history-list" :class="{ show: showHistory }">
              <div v-for="q in reversedQuestions" :key="q.id" class="history-item">
                <strong>{{ q.name }}</strong> 问：{{ q.content.substring(0, 40) }}{{ q.content.length > 40 ? '…' : '' }}
                <span style="color:#b0a098; font-size:12px; margin-left:8px;">{{ q.time }}</span>
              </div>
            </div>
          </div>
        </template>
      </div>
    </main>
  </AppLayout>
</template>

<script setup>
import { ref, reactive, computed, onMounted, watch } from 'vue'
import { useRoute, useRouter } from 'vue-router'
import AppLayout from '../components/AppLayout.vue'

const STORAGE_KEY = 'catforest_questions'

const route = useRoute()
const router = useRouter()

const isSuccess = ref(false)
const formError = ref('')
const showHistory = ref(false)
const questions = ref([])

const form = reactive({
  name: '',
  email: '',
  content: '',
})

const faqList = [
  {
    q: 'Q：领养猫咪需要付费吗？',
    a: 'A：领养本身不收取费用，但领养人需承担猫咪后续的疫苗、绝育和日常开销（猫粮、猫砂等）。部分猫咪的首次驱虫和疫苗由我们承担。',
  },
  {
    q: 'Q：外地可以领养吗？',
    a: 'A：目前仅限同城（梅州）领养，因为我们需要家访和定期回访。如果您在外地，可以先通过"云养猫"支持我们。',
  },
  {
    q: 'Q：云养猫的钱用在哪里？',
    a: 'A：每月30元全部用于您认养猫咪的猫粮、猫砂和基础医疗。我们会定期在朋友圈和社群发布支出明细。',
  },
  {
    q: 'Q：我想救助一只流浪猫，该怎么做？',
    a: 'A：首先确保自身安全，用食物引诱或使用诱捕笼。然后联系我们的救助热线，我们会指导您送医或安排接手。',
  },
  {
    q: 'Q：网站上的图片是真实的吗？',
    a: 'A：救助故事中的图片均为真实拍摄，猫咪图鉴的品种图片来源于免费图库，仅用作科普展示。',
  },
]

const reversedQuestions = computed(() => [...questions.value].reverse())

const lastQuestionName = computed(() => {
  if (questions.value.length === 0) return '你'
  return questions.value[questions.value.length - 1].name
})

function loadQuestions() {
  try {
    const data = localStorage.getItem(STORAGE_KEY)
    questions.value = data ? JSON.parse(data) : []
  } catch {
    questions.value = []
  }
}

function saveQuestion(name, email, content) {
  questions.value.push({
    id: Date.now(),
    name,
    email: email || '未留邮箱',
    content,
    time: new Date().toLocaleString('zh-CN'),
  })
  localStorage.setItem(STORAGE_KEY, JSON.stringify(questions.value))
}

function handleSubmit() {
  const name = form.name.trim()
  const email = form.email.trim()
  const content = form.content.trim()

  if (!name || !content) {
    formError.value = '请填写姓名和问题内容（邮箱选填）'
    return
  }

  formError.value = ''
  saveQuestion(name, email, content)
  router.push({ path: '/faq', query: { success: '1' } })
}

function continueAsk() {
  isSuccess.value = false
  router.push('/faq')
}

watch(
  () => route.query.success,
  (val) => {
    isSuccess.value = val === '1'
    if (val === '1') {
      loadQuestions()
    }
  }
)

onMounted(() => {
  loadQuestions()
  isSuccess.value = route.query.success === '1'
})
</script>

<style scoped>
.faq-item {
  background: rgba(255, 255, 255, 0.75);
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
  border-radius: 24px;
  padding: 22px 28px;
  margin-bottom: 16px;
  box-shadow: 0 4px 20px rgba(120, 80, 60, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.5);
  border-left: 6px solid #c17b5c;
  transition: transform 0.2s;
}
.faq-item:hover {
  transform: translateX(4px);
}
.faq-item h3 {
  color: #4a2c1e;
  font-size: 17px;
  margin-bottom: 4px;
}
.faq-item p {
  color: #6a5a4e;
  font-size: 15px;
  margin: 0;
  line-height: 1.6;
}
.ask-box {
  background: rgba(255, 255, 255, 0.78);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  border-radius: 32px;
  padding: 40px 38px;
  margin: 40px 0 50px;
  box-shadow: 0 16px 48px rgba(120, 80, 60, 0.06);
  border: 1px solid rgba(255, 255, 255, 0.6);
}
.ask-box .ask-header {
  text-align: center;
  margin-bottom: 28px;
}
.ask-box .ask-header h3 {
  color: #4a2c1e;
  font-size: 26px;
  margin-bottom: 4px;
}
.ask-box .ask-header p {
  color: #8a7a6e;
  font-size: 15px;
}
.form-banner-error {
  background: #fce8e6;
  border: 1px solid #f5cdc8;
  border-radius: 20px;
  padding: 12px 20px;
  color: #b33a34;
  font-size: 15px;
  font-weight: 500;
  margin-bottom: 24px;
  display: flex;
  align-items: center;
  gap: 10px;
}
.form-banner-error::before {
  content: '⚠️';
  font-size: 20px;
}
.ask-form .form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}
.ask-form .form-group {
  margin-bottom: 18px;
  position: relative;
}
.ask-form label {
  display: block;
  font-weight: 600;
  font-size: 14px;
  color: #4a2c1e;
  margin-bottom: 5px;
}
.ask-form label .required {
  color: #d68f6e;
  margin-left: 2px;
}
.ask-form input,
.ask-form textarea {
  width: 100%;
  padding: 14px 18px;
  border: 2px solid #e8ddd5;
  border-radius: 18px;
  font-size: 16px;
  font-family: inherit;
  background: rgba(255, 255, 255, 0.5);
  transition: all 0.3s ease;
  color: #3d2e24;
  box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.01);
}
.ask-form input::placeholder,
.ask-form textarea::placeholder {
  color: #b0a098;
  font-weight: 400;
  font-size: 15px;
}
.ask-form input:focus,
.ask-form textarea:focus {
  outline: none;
  border-color: #c17b5c;
  background: #ffffff;
  box-shadow: 0 0 0 5px rgba(193, 123, 92, 0.10), inset 0 2px 4px rgba(0, 0, 0, 0.02);
  transform: translateY(-1px);
}
.ask-form input {
  height: 56px;
}
.ask-form textarea {
  min-height: 120px;
  resize: vertical;
  line-height: 1.6;
}
.btn-ask {
  background: linear-gradient(135deg, #c17b5c, #d68f6e);
  color: #fff;
  border: none;
  padding: 14px 44px;
  border-radius: 40px;
  font-size: 18px;
  font-weight: 700;
  cursor: pointer;
  transition: all 0.3s cubic-bezier(.34,1.56,.64,1);
  display: inline-block;
  letter-spacing: 1px;
  box-shadow: 0 6px 20px rgba(193, 123, 92, 0.2);
}
.btn-ask:hover {
  transform: scale(1.04) translateY(-2px);
  box-shadow: 0 14px 34px rgba(193, 123, 92, 0.30);
}
.btn-ask:active {
  transform: scale(0.96);
}
.ask-form .btn-wrap {
  text-align: center;
  margin-top: 12px;
}
.success-box {
  text-align: center;
  padding: 30px 20px;
}
.success-box .success-icon {
  font-size: 64px;
  display: block;
  margin-bottom: 12px;
}
.success-box h4 {
  color: #2e7d32;
  font-size: 24px;
  margin-bottom: 6px;
}
.success-box p {
  color: #6a5a4e;
  font-size: 17px;
}
.success-box .btn-back {
  display: inline-block;
  margin-top: 18px;
  background: #c17b5c;
  color: #fff;
  padding: 10px 32px;
  border-radius: 30px;
  text-decoration: none;
  font-weight: 600;
  transition: background 0.3s;
  border: none;
  cursor: pointer;
  font-size: 16px;
}
.success-box .btn-back:hover {
  background: #d68f6e;
}
.history-toggle {
  text-align: center;
  margin-top: 20px;
}
.history-toggle button {
  background: none;
  border: none;
  color: #8a7a6e;
  font-size: 14px;
  cursor: pointer;
  text-decoration: underline;
  transition: color 0.2s;
}
.history-toggle button:hover {
  color: #c17b5c;
}
.history-list {
  margin-top: 16px;
  background: rgba(245, 237, 232, 0.4);
  border-radius: 20px;
  padding: 16px 24px;
  display: none;
}
.history-list.show {
  display: block;
}
.history-list .history-item {
  padding: 8px 0;
  border-bottom: 1px solid #e8ddd5;
  font-size: 14px;
  color: #6a5a4e;
}
.history-list .history-item:last-child {
  border-bottom: none;
}
@media (max-width: 640px) {
  .ask-box {
    padding: 24px 18px;
  }
  .ask-form .form-row {
    grid-template-columns: 1fr;
    gap: 0;
  }
  .ask-form input {
    height: 50px;
  }
  .btn-ask {
    width: 100%;
    padding: 14px;
  }
}
</style>
