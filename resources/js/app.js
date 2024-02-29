require('./bootstrap');



import { createApp } from 'vue';
import App from './App.vue';
import store from './store/store';
import router from './router';
import * as globalMethods from './globalMethods'; // Import all global methods
import VueMultiselect from 'vue-multiselect';
import TextInput from "./components/micro/TextInput.vue";
import TextAreaInput from "./components/micro/TextAreaInput.vue";
import VueGapi from 'vue-gapi';

import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

const app = createApp(App);

// Add the methods to the Vue prototype
Object.keys(globalMethods).forEach(methodName => {
    app.config.globalProperties[`$${methodName}`] = globalMethods[methodName];
});

app.component('font-awesome-icon', FontAwesomeIcon); // Register font-awesome-icon globally
app.component('vue-multiselect', VueMultiselect); // Register vue-multiselect globally
app.component('TextInput', TextInput); // Register vue-multiselect globally
app.component('TextAreaInput', TextAreaInput); // Register vue-multiselect globally

// Install VueGapi plugin using Vue.use() and pass configuration options
app.use(VueGapi, {
    apiKey: 'AIzaSyBYJbRUrIm6CEImS-omab3OYX6jfR5X1wM',
    clientId: '904209696388-pk25pk2elkbiv7a1v6e6pbnatart5hf7.apps.googleusercontent.com',
    discoveryDocs: ['https://www.googleapis.com/discovery/v1/apis/drive/v3/rest'],
    scope: 'https://www.googleapis.com/auth/drive'
});

// Mount the app with router, store, and other configurations
app.use(router)
   .use(store)
   .mount('#app');
   

