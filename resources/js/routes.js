import Index from "./routes/Products/Index.vue";
import Show from "./routes/Products/Show.vue";
import Checkout from "./routes/Order/Checkout.vue";
import Summary from "'./routes/Order/Summary.vue";
//import {createRouter, createWebHistory} from "vue-router";

const routes = [
    {
        path: '/index',
        name: 'index',
        component: Index
    },
    {
        path: '/product/:slug',
        name: 'show',
        component: Show
    },
    {
        path: '/checkout',
        name: 'checkout',
        component: Checkout
    },
    {
        path: '/summary',
        name: 'summary',
        component: Summary
    }
];

const router = createRouter({
    //mode: 'history',
    history: createWebHistory(),
    routes
  })
  
export default router;