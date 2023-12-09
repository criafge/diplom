import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import AdminComponent from './components/AdminComponent.vue'

app.component('admin-component', AdminComponent);
import CreateCourseComponent from './components/CreateCourseComponent.vue'
app.component('create-course-component', CreateCourseComponent);

app.mount('#app');
