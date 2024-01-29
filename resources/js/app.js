require('./bootstrap');

// main.js

import { createApp } from 'vue';
import App from './App.vue';
import store from './store/store';
import router from './router';
import * as globalMethods from './globalMethods'; // Import all global methods

const app = createApp(App);

// Add the methods to the Vue prototype
Object.keys(globalMethods).forEach(methodName => {
    app.config.globalProperties[`$${methodName}`] = globalMethods[methodName];
});

app.use(router).use(store).mount('#app');
