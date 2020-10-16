// Before
import 'es6-promise/auto'
import './bootstrap'
import Vue from 'vue'
import Index from './Index'
import VueAuth from '@websanova/vue-auth'

import VueRouter from 'vue-router'
import VueAxios from 'vue-axios'
import Axios from 'axios';


import auth from './auth'
import router from './router'
// Set Vue globally
window.Vue = Vue

// Set Vue router
Vue.router = router
// Vue.use(VueRouter)
Vue.use(VueRouter,VueAxios,Axios);

// Set Vue authentication
// Vue.use(VueAxios, axios)
// axios.defaults.baseURL = `${process.env.MIX_APP_URL}/api`
// Vue.use(VueAuth, auth)

// Load Index
Vue.component('index', Index)
const app = new Vue({
  router,
  el: '#app'
});

// After
// import 'es6-promise/auto'
// import axios from 'axios'
// import './bootstrap'
// import Vue from 'vue'
// import VueAuth from '@websanova/vue-auth'
// import VueAxios from 'vue-axios'
// import VueRouter from 'vue-router'
// import Index from './Index'
// import auth from './auth'
// import router from './router'
// // Set Vue globally
// window.Vue = Vue
// // Set Vue router
// Vue.router = router
// Vue.use(VueRouter)
// // Set Vue authentication
// Vue.use(VueAxios, axios)
// axios.defaults.baseURL = `${process.env.MIX_APP_URL}/api`
// Vue.use(VueAuth, auth)
// // Load Index
// Vue.component('index', Index)
// const app = new Vue({
//   router,
//   el: '#app',
// });