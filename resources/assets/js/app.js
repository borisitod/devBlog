require('./bootstrap');

window.Vue = require('vue');
window.Slug = require('slug');
Slug.defaults.mode = 'rfc3986';

import Buefy from 'buefy';


Vue.use(Buefy);
Vue.component('slug-widget', require('./components/slugWidget.vue'));

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

// var app = new Vue({
//     el: '#app',
//     data: {}
// })

require('./manage')
