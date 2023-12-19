<template>
    <div class="container">
        <h2>Добавить урок</h2>
        <div class="mb-3">
            <label for="name" class="form-label" >Имя</label>
            <input type="text" class="form-control" id="name" name="name" v-model="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" v-model="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" class="form-control" name="password" v-model="password">
        </div>
        <div class="mb-3">
            <label for="course" class="form-label">Курс</label>
            <select name="course" v-model="course_id">
                <option value="">Выберите курс</option>
                <option v-for="course in courses" v-bind:value="course.id">{{ course.title }}</option>
            </select>
        </div>
        <div class="mb-3">
            <input @click.prevent="createTeacher" type="submit" class="form-control" value="Добавить">
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data(){
        return{
            courses: null,
            name: null,
            email: null,
            password: null,
            course_id: null
        }
    },
    mounted(){
        this.showCourses()
    },
    methods:{
        createTeacher(){
            axios.post('/api/admin/create-teacher', {name:this.name, email:this.email, password:this.password, course_id:this.course_id})
            .then(data=>{
                this.name = null
                this.email = null
                this.password = null
                this.course_id = null
                console.log(data);
            })
        },
        showCourses(){
            axios.get('api/admin/')
            .then(data=>{
                this.courses = data.data[0].courses
                console.log(data)
            })
        }
    }
}
</script>
