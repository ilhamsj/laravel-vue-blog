// require('./bootstrap');

window.Vue = require('vue');
import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.css'
import ExampleComponent from './components/ExampleComponent.vue'
import NavbarComponent from './components/NavbarComponent.vue'

Vue.use(VueMaterial)

const app = new Vue({
    el: '#app',
    components: {
        ExampleComponent,
        NavbarComponent,
    }
});
