import {createRouter, createWebHistory} from 'vue-router';
import MainLayout from "@/layouts/MainLayout.vue";
import Main from "@/page/Main.vue";
import Admin from "@/page/Admin/Admin.vue";
import AdminLayout from "@/layouts/AdminLayout.vue";
import Login from "@/page/Auth/Login.vue";
import AuthLayout from "@/layouts/AuthLayout.vue";
import Register from "@/page/Auth/Register.vue";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: Main,
            name: 'main',
            meta: {
                layout: MainLayout,

            }
        },
        {
            path: '/admin',
            component: Admin,
            name: 'admin',
            meta: {
                layout: AdminLayout
            }
        },
        {
            path: '/login',
            component: Login,
            name: 'login',
            meta: {
                layout: AuthLayout
            }
        },
        {
            path: '/register',
            component: Register,
            name: 'register',
            meta: {
                layout: AuthLayout
            }
        }
    ]
})

export default router
