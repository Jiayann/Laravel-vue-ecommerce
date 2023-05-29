import {createRouter, createWebHistory} from "vue-router";
import Dashboard from "../views/Dashboard.vue";



const routes = [
    {
        path: '/dashboard',
        name: 'dashboard',
        component: Dashboard
    }
]

const router = createRouter({
    //mode: 'history',
    history: createWebHistory(),
    routes
  })

export default router;