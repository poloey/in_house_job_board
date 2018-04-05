/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import 'noty/lib/noty.css'
import {store} from './store'

window.Vue = require('vue');

//for eventing multiple file
window.Events = new Vue();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('avatar', require('./components/Avatar.vue'))
Vue.component('delete', require('./components/Delete.vue'))
Vue.component('knowledge-base', require('./components/KnowledgeBase.vue'))
Vue.component('knowledge-base-platform', require('./components/KnowledgeBasePlafrom.vue'))
Vue.component('knowledge-base-keyword', require('./components/KnowledgeBaseKeyword.vue'))
Vue.component('student-directory', require('./components/StudentDirectory.vue'))

const app = new Vue({
    el: '#app',
    store
});
