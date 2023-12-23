// app.js
import '../assets/js/custom-switcher';
import '../assets/js/custom';
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import {createApp} from 'vue/dist/vue.esm-bundler.js';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({
    data() {
        return {}
    },
});


import SuccessMessage from './components/SuccessMessage.vue';
import ErrorMessage from './components/ErrorMessage.vue';
import Clients from './components/customer-portal/clients/index.vue';
import CreateClient from './components/customer-portal/clients/create.vue';
import PortalAnnouncements from "./components/customer-portal/chat/announcements.vue";
import PortalMessages from "./components/customer-portal/chat/messages.vue";
import Questionnaire from './components/client-app/questionnaire.vue';
import ClientAnnouncements from "./components/client-app/chat/announcements.vue";


app.component('error-message', ErrorMessage);
app.component('success-message', SuccessMessage);

// Customer portal
app.component('clients', Clients);
app.component('create-client', CreateClient);
app.component('portal-announcements', PortalAnnouncements);
app.component('portal-messages', PortalMessages);

// Client app
app.component('questionnaire', Questionnaire);
app.component('client-announcements', ClientAnnouncements);



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
