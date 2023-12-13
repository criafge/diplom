import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import AdminComponent from './components/AdminComponent.vue'
app.component('admin-component', AdminComponent);

import TeacherComponent from './components/TeacherComponent.vue'
app.component('teacher-component', TeacherComponent);


app.mount('#app');
