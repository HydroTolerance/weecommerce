import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
  // Other routes...
  {
    path: '/logout',
    name: 'logout',
    component: LogoutComponent
  }
]

const router = new VueRouter({
  routes
})

export default router
