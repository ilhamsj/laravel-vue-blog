require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter)

import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.css'
Vue.use(VueMaterial)

import App from './components/App.vue'
import AppNotFound from './components/404.vue'
import ArticleIndex from './components/article/Index.vue'
import ArticleCreate from './components/article/Create.vue'
import ArticleEdit from './components/article/Edit.vue'

const routes = [
    {
        name: 'home',
        path: '/',
        component: ArticleIndex,
    },
    {
        name: 'create',
        path: '/create',
        component: ArticleCreate,
    },
    {
        name: 'editArticle',
        path: '/edit',
        component: ArticleEdit,
    },
    {
        name: '404',
        path: '/*',
        component: AppNotFound,
    },
]

const router = new VueRouter({
    mode:'history', 
    routes: routes
})

const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');