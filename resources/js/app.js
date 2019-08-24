require('./bootstrap');

window.Vue = require('vue');

import ExampleComponent from './components/ExampleComponent.vue'
import NavbarComponent from './components/NavbarComponent.vue'

const app = new Vue({
    el: '#app',
    components: {
        ExampleComponent,
        NavbarComponent,
    }
});
