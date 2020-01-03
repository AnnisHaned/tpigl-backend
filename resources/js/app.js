
import Vuetify from 'vuetify/lib'

import 'vuetify/dist/vuetify.min.css'
Vue.use(Vuetify)

require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
});
