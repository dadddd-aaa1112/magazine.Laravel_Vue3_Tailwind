import {createRouter, createWebHistory} from 'vue-router';
import MainLayout from "@/layouts/MainLayout.vue";
import Main from "@/page/Main.vue";
import Admin from "@/page/Admin/Admin.vue";
import AdminLayout from "@/layouts/AdminLayout.vue";
import Login from "@/page/Auth/Login.vue";
import AuthLayout from "@/layouts/AuthLayout.vue";
import Register from "@/page/Auth/Register.vue";
import List from "@/page/Article/List.vue";
import Item from "@/page/Article/Item.vue";
import CreateArticle from "@/page/Admin/Article/CreateArticle.vue";
import CreateCategory from "@/page/Admin/Category/CreateCategory.vue";
import CreateTag from "@/page/Admin/Tag/CreateTag.vue";


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
        },
        {
            path: '/articles',
            component: List,
            name: 'articlesList',
            meta: {
                layout: MainLayout
            }
        },
        {
            path: '/articles/:id',
            component: Item,
            name: 'article_item',
            meta: {
                layout: MainLayout
            }
        },
        {
            path: '/admin/create_article',
            component: CreateArticle,
            name: 'create_article',
            meta: {
                layout: AdminLayout
            }
        },
        {
            path: '/admin/create_category',
            component: CreateCategory,
            name: 'create_category',
            meta: {
                layout: AdminLayout
            }
        },
        {
            path: '/admin/create_tag',
            component: CreateTag,
            name: 'create_tag',
            meta: {
                layout: AdminLayout
            }
        }
    ]
})

export default router
