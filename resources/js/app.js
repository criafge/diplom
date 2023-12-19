import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import AdminComponent from './components/AdminComponent.vue'
app.component('admin-component', AdminComponent);

import CabinetComponent from './components/CabinetComponent.vue'
app.component('cabinet-component', CabinetComponent);


app.mount('#app');
