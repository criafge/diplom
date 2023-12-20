import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import AdminComponent from './components/AdminComponent.vue'
app.component('admin-component', AdminComponent);

app.mount('#app');
