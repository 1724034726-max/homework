import { createRouter, createWebHashHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import CatGuideView from '../views/CatGuideView.vue'
import RescueStoriesView from '../views/RescueStoriesView.vue'
import CloudAdoptView from '../views/CloudAdoptView.vue'
import AboutView from '../views/AboutView.vue'
import ContactView from '../views/ContactView.vue'

const router = createRouter({
  history: createWebHashHistory(),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView,
      meta: { title: '邓云心的网站主页 | 替换为你的网站名称' },
    },
    {
      path: '/cat-guide',
      name: 'cat-guide',
      component: CatGuideView,
      meta: { title: '猫咪图鉴 - 猫语森林' },
    },
    {
      path: '/rescue-stories',
      name: 'rescue-stories',
      component: RescueStoriesView,
      meta: { title: '救助故事 - 猫语森林' },
    },
    {
      path: '/cloud-adopt',
      name: 'cloud-adopt',
      component: CloudAdoptView,
      meta: { title: '云养猫 - 猫语森林' },
    },
    {
      path: '/about',
      name: 'about',
      component: AboutView,
      meta: { title: '关于我们 - 猫语森林' },
    },
    {
      path: '/contact',
      name: 'contact',
      component: ContactView,
      meta: { title: '联系我们 - 猫语森林' },
    },
  ],
  scrollBehavior() {
    return { top: 0 }
  },
})

router.afterEach((to) => {
  document.title = to.meta.title || '猫语森林'
})

export default router
