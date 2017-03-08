
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */
import Vuex from 'vuex';
Vue.use(Vuex);

import state from './vuex/state.js';
import getters from './vuex/getters.js';
import actions from './vuex/actions.js';
import mutations from './vuex/mutations.js';

const store = new Vuex.Store({
    state,
    getters,
    actions,
    mutations
});

Vue.component('autosList', require('./containers/autos-list.vue'));
Vue.component('employersList', require('./containers/employers-list.vue'));
Vue.component('organizationsList', require('./containers/organizations-list.vue'));
Vue.component('waybillsList', require('./containers/waybills-list.vue'));
Vue.component('print', require('./containers/print.vue'));

const app = new Vue({
    el: '#app',
    store
});
