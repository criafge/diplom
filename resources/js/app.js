import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});
import CreateCourseComponent from './components/CreateCourseComponent.vue'
app.component('create-course-component', CreateCourseComponent);

app.mount('#app');
