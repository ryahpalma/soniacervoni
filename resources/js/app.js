require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('navbar-component', require('./components/Navbar.vue').default);
Vue.component('footer-component', require('./components/Footer.vue').default);
Vue.component('coursethanks-component', require('./components/CourseThanks.vue').default);
const app = new Vue({
    el: '#app',
});
