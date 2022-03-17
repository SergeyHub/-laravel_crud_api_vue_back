require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

import { createApp } from "vue";
import router from './router'
import List from './components/companies/List'

Alpine.start();

createApp({
    components: {
        List
    }
}).use(router).mount("#app")
