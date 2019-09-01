require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter)

import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.css'
Vue.use(VueMaterial)

import axios from 'axios';
import VueAxios from 'vue-axios';
Vue.use(VueAxios, axios);

import App from './components/App.vue'
import Home from './components/pages/Home.vue'
import AppNotFound from './components/pages/404.vue'
import ArticleIndex from './components/article/Index.vue'
import ArticleCreate from './components/article/Create.vue'
import ArticleEdit from './components/article/Edit.vue'

import EditorIndex from './components/editor/Index.vue'

const routes = [
    {
        name: 'home',
        path: '/',
        component: Home,
    },
    {
        name: 'article.index',
        path: '/article',
        component: ArticleIndex,
    },
    {
        name: 'article.create',
        path: '/article/create',
        component: ArticleCreate,
    },
    {
        name: 'article_edit',
        path: '/article/:id/edit',
        component: ArticleEdit,
    },
    {
        name: 'editor',
        path: '/editor',
        component: EditorIndex,
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