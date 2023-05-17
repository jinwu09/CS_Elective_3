import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import OrderViewVue from '@/views/OrderView.vue'
import ProductsViewVue from '@/views/ProductsView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/home',
      name: 'home',
      component: HomeView
    },
    {
      path: '/order',
      name: 'orders',
      component: OrderViewVue
    },
    {
      path: '/products',
      name: 'products',
      component: ProductsViewVue
    }
  ]
})

export default router
