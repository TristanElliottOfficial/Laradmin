/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('v-input', require('./components/Inputs/VInput.vue').default);
Vue.component('v-input-error', require('./components/Inputs/VInputError.vue').default);
Vue.component('v-checkbox', require('./components/Inputs/VCheckbox.vue').default);
Vue.component('v-button', require('./components/Buttons/VButton').default);
Vue.component('v-header-button', require('./components/Buttons/VHButton').default);
Vue.component('v-auth-card', require('./components/Cards/VAuthCard').default);
Vue.component('v-card', require('./components/Cards/VCard').default);
Vue.component('v-table-card', require('./components/Cards/VTableCard').default);
Vue.component('v-header', require('./components/Layouts/VHeader').default);
Vue.component('v-alert', require('./components/Alerts/VAlert').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
