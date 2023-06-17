import './bootstrap';
import { createApp } from 'vue';
import { createPinia } from 'pinia';

import App from './App.vue';

const oPinia = createPinia();

createApp(App)
    .use(oPinia)
    .mount('#app');
