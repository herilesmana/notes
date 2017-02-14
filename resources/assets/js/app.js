
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 Vue.component('app-header', require('./components/App-header.vue'));
 Vue.component('search-panel', require('./components/Search-panel.vue'));
 Vue.component('app-main', require('./components/Main.vue'));
 Vue.component('pagination', require('./components/Pagination.vue'));
 Vue.component('app-footer', require('./components/Footer.vue'));
 Vue.component('add-button', require('./components/Add-button.vue'));
 Vue.component('add-modal', require('./components/Add-modal.vue'));
 Vue.component('edit-modal', require('./components/Edit-modal.vue'));

const app = new Vue({
    el: '#notes-app'
});
