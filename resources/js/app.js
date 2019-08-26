require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.css'

import App from './components/App.vue'
import ArticleIndex from './components/article/ArticleIndex.vue'
import ArticleCreate from './components/article/ArticleCreate.vue'
import ArticleEdit from './components/article/ArticleEdit.vue'

Vue.use(VueMaterial)
Vue.use(VueRouter)

const routes = [
    {
        name: 'home',
        path: '/',
        component: ArticleIndex,
    },
    {
        name: 'createArticle',
        path: '/create',
        component: ArticleCreate,
    },
    {
        name: 'editArticle',
        path: '/edit',
        component: ArticleEdit,
    },
]

const router = new VueRouter({mode:'history', routes: routes})
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');