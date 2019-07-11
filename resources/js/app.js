
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

 Vue.component('order-progress', require('./components/OrderProgress.vue').default);
 Vue.component('order-alert', require('./components/OrderAlert.vue').default);
 Vue.component('order-notifications', require('./components/OrderNotifications.vue').default);

 const app = new Vue({
     el: '#app',
     mounted() {
       Echo.channel('pizza-tracker')
       .listen('OrderStatusChanged', (e) => {
         console.log('omgggg realtime bro')
       });
     }
 });
