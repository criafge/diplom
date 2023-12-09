<template>
    <div>
        <create-course-component></create-course-component>
        <course-component></course-component>
    </div>
</template>

<script>
import CourseComponent from './CourseComponent.vue'
import CreateCourseComponent from './CreateCourseComponent.vue'

export default {
    components: {
        CourseComponent,
        CreateCourseComponent
    }
}
</script>
