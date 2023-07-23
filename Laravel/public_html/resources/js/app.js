require('./bootstrap');

import Vue from 'vue';
//Rutas del website
import Router from './router.js';

//Librerias globales
import Library from './libs.js';
Vue.use(Library);

//Componentes del website
import components from './components/components.js';
Vue.use(components);

// == Lenguajes del sitio web ==
// import VueI18n from 'vue-i18n'
// // import messages from './langs';
// Vue.use(VueI18n);

// const i18n = new VueI18n({
//   locale: 'es', // set locale
//   fallbackLocale: 'en',
//   messages: messages // set locale messages
// })
// == fin ==

window.Vue=Vue;

//Instancia principal
const app = new Vue({
    el: '#app',
    router:Router,
    // mode: 'history',
    // i18n,
});
