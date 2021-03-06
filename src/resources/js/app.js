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

const files = require.context('./Components/', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import {InertiaApp} from "@inertiajs/inertia-vue";
import {Ziggy} from './ziggy';
import route from "ziggy-js";
import * as Sentry from "@sentry/browser";
import {Vue as VueIntegration} from "@sentry/integrations";
import VueMeta from 'vue-meta'
import moment from "moment";
import Toasted from 'vue-toasted';

Sentry.init({
    dsn: "http://15d69aad346c49f081b19597e10acb87@localhost:9080/3'",
    integrations: [new VueIntegration({Vue, attachProps: true})],
    attachProps: true,
    debug: true,
    logErrors: true
});

Vue.use(Toasted, {
    duration: 2000,
    keepOnHover: true,
})
Vue.use(VueMeta)
Vue.use(InertiaApp)

Vue.mixin({
    methods: {
        route: (name, params, absolute) => route(name, params, absolute, Ziggy),
    },
});

const app = document.getElementById('app')

Vue.filter('formatDate', function (value) {
    if (value) {
        return moment(String(value)).format('MM/DD/YYYY') + ' as ' + moment(String(value)).format('hh:ss')
    }
});

new Vue({
    render: h => h(InertiaApp, {
        props: {
            initialPage: JSON.parse(app.dataset.page),
            resolveComponent: name => require(`./Pages/${name}`).default,
        },
    }),
}).$mount(app)
