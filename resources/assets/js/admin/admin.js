import './bootstrap.js';
import App from './App';
import BootstrapVue from 'bootstrap-vue'
import router from './routes';

Vue.use(BootstrapVue);

import axios from 'axios';
import VueAxios from 'vue-axios';
import VueAuth from '@websanova/vue-auth';
import swal from 'sweetalert2';
import 'sweetalert2/src/sweetalert2.scss'
import { VueEditor } from 'vue2-editor'
Vue.use(VueEditor);
global.jQuery = require('jquery');
var $ = global.jQuery;
window.$ = $;
Vue.router = router;

window.axios = axios;
window.swal = swal;
Vue.use(VueAxios, axios)
Vue.use(VueAuth, {
    auth: require('@websanova/vue-auth/drivers/auth/bearer.js'),
    http: require('@websanova/vue-auth/drivers/http/axios.1.x.js'),
    router: require('@websanova/vue-auth/drivers/router/vue-router.2.x.js'),
    loginData: {url: 'api/admin/login', method: 'POST', redirect: '/'},
    logoutData: {url: 'api/admin/logout', method: 'POST', redirect: 'login', authType: 'bearer'},
    fetchData: {url: 'api/admin/account', method: 'GET', authType: 'bearer'},
    refreshData: {url: 'api/admin/refresh', method: 'POST'}
});

import { Photoshop } from 'vue-color';

new Vue({
    el: '#app',
    template: '<App/>',
    router,
    components: {
        App,
        Photoshop
    }
});