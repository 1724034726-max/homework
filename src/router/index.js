import { createRouter, createWebHistory } from 'vue-router'
import { isLoggedIn } from '../composables/useAuth'

const routes = [
  {
    path: '/login',
    name: 'login',
    component: () => import('../views/LoginView.vue'),
    meta: { guest: true, title: '登录 · 猫语森林' },
  },
  {
    path: '/',
    name: 'home',
    component: () => import('../views/HomeView.vue'),
    meta: { requiresAuth: true, title: '猫语森林 · 用爱终止流浪' },
  },
  {
    path: '/cat-guide',
    name: 'cat-guide',
    component: () => import('../views/CatGuideView.vue'),
    meta: { requiresAuth: true, title: '猫咪图鉴 · 猫语森林' },
  },
  {
    path: '/rescue-stories',
    name: 'rescue-stories',
    component: () => import('../views/RescueStoriesView.vue'),
    meta: { requiresAuth: true, title: '救助故事 · 猫语森林' },
  },
  {
    path: '/cloud-adopt',
    name: 'cloud-adopt',
    component: () => import('../views/CloudAdoptView.vue'),
    meta: { requiresAuth: true, title: '云养猫 · 猫语森林' },
  },
  {
    path: '/about',
    name: 'about',
    component: () => import('../views/AboutView.vue'),
    meta: { requiresAuth: true, title: '关于我们 · 猫语森林' },
  },
  {
    path: '/contact',
    name: 'contact',
    component: () => import('../views/ContactView.vue'),
    meta: { requiresAuth: true, title: '联系我们 · 猫语森林' },
  },
  {
    path: '/adopt-process',
    name: 'adopt-process',
    component: () => import('../views/AdoptProcessView.vue'),
    meta: { requiresAuth: true, title: '领养流程 · 猫语森林' },
  },
  {
    path: '/volunteer',
    name: 'volunteer',
    component: () => import('../views/VolunteerView.vue'),
    meta: { requiresAuth: true, title: '志愿者招募 · 猫语森林' },
  },
  {
    path: '/donate',
    name: 'donate',
    component: () => import('../views/DonateView.vue'),
    meta: { requiresAuth: true, title: '爱心捐赠 · 猫语森林' },
  },
  {
    path: '/faq',
    name: 'faq',
    component: () => import('../views/FaqView.vue'),
    meta: { requiresAuth: true, title: '常见问题 · 猫语森林' },
  },
  {
    path: '/health-tips',
    name: 'health-tips',
    component: () => import('../views/HealthTipsView.vue'),
    meta: { requiresAuth: true, title: '猫咪健康小课堂 · 猫语森林' },
  },
  {
    path: '/story-detail-xiaoju',
    name: 'story-detail-xiaoju',
    component: () => import('../views/StoryDetailXiaojuView.vue'),
    meta: { requiresAuth: true, title: '小橘的冬天 · 猫语森林' },
  },
  {
    path: '/cat-detail-orange',
    name: 'cat-detail-orange',
    component: () => import('../views/CatDetailOrangeView.vue'),
    meta: { requiresAuth: true, title: '橘猫 · 猫语森林' },
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
  scrollBehavior() {
    return { top: 0 }
  },
})

router.beforeEach((to) => {
  if (to.meta.title) {
    document.title = to.meta.title
  }

  if (to.meta.requiresAuth && !isLoggedIn()) {
    return { name: 'login' }
  }

  if (to.meta.guest && isLoggedIn()) {
    return { name: 'home' }
  }
})

export default router
