import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

// import ExampleComponent from './components/ExampleComponent.vue'
import CreateCourseComponent from './components/CreateCourseComponent.vue'
app.component(CreateCourseComponent);

app.mount('#app');
