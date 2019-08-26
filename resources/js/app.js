// require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';
import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.css'

import ArticleIndex from './components/article/ArticleIndex.vue'
import ArticleCreate from './components/article/ArticleCreate.vue'
import ArticleEdit from './components/article/ArticleEdit.vue'

Vue.use(VueMaterial)
Vue.use(VueRouter)

const router = new VueRouter({
    routes: [
        {
            path: '/',
            components: 
            {
                articleIndex: ArticleIndex,
                articleCreate: ArticleCreate
            },
        },
        {
            name: 'createArticle',
            path: '/article/create',
            component: ArticleCreate,
        },
        {
            name: 'editArticle',
            path: '/article/edit',
            component: ArticleEdit,
        },
    ]
})

const app = new Vue({router}).$mount('#app');
