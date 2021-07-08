import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Productos from "../views/Productos.vue";
import ProductosDetalle from "@/views/ProductosDetalle";
import ProductosNuevo from "@/views/ProductosNuevo";

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home,
  },
  {
    path: '/productos',
    name: 'Productos',
    component: Productos,
  },
  {
    path: '/productos/nuevo',
    name: 'ProductosNuevo',
    component: ProductosNuevo
  },
  {
    path: '/productos/:id',
    name: 'ProductosDetalle',
    component: ProductosDetalle
  },
  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  },
  {
    path: '*',
    name: 'error',
    component: () => import(/* webpackChunkName: "about" */ '../views/Error.vue')
  }
]

const router = new VueRouter({
  routes
})

export default router
