/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';
// import { createMetaManager } from 'vue-meta'

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});
// app.use(createMetaManager());

import router from '@/router';
import store from '@/store';
app.use(router);
app.use(store);

import vuedraggable from 'vuedraggable';
app.use(vuedraggable);

// import 'bootstrap/dist/css/bootstrap.css'
// import 'bootstrap-vue/dist/bootstrap-vue.css'

import VSwatches from 'vue3-swatches'
import 'vue3-swatches/dist/style.css'
app.use(VSwatches);

import { InstallCodemirro } from "codemirror-editor-vue3";
app.use(InstallCodemirro);

import {ServerTable, ClientTable, EventBus} from 'v-tables-3';
app.use(ServerTable, {}, 'bootstrap4')
app.use(ClientTable, {}, 'bootstrap4')
// app.use(ClientTable, [options = {}], [theme = 'bootstrap4'], [swappables = {}],[themeOverride = {}])
// app.use(ServerTable, [options = {}], [theme = 'bootstrap4'], [swappables = {}],[themeOverride = {}])

// if 401 response returned from server, remove token from localstorage
axios.interceptors.response.use(
    response => response,
    error => {
        if (error.response.status === 401) {
            store.dispatch('auth/logout')
        }
        return Promise.reject(error)
    }
);


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
