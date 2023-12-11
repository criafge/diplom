<template>
    <div>
        <create-course-component></create-course-component>
        <course-component></course-component>
        <create-teacher-component></create-teacher-component>
        <teacher-component></teacher-component>
    </div>
</template>

<script>
import CourseComponent from './CourseComponent.vue'
import CreateCourseComponent from './CreateCourseComponent.vue'
import CreateTeacherComponent from './CreateTeacherComponent.vue'
import TeacherComponent from './TeacherComponent.vue'

export default {
    components: {
        CourseComponent,
        CreateCourseComponent,
        CreateTeacherComponent,
        TeacherComponent
    }
}
</script>
