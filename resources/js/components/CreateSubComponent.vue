<template>
    <div class="container">
        <h2>Добавить подписку</h2>
        <div class="mb-3">
            <label for="cost" class="form-label" >Цена</label>
            <input type="text" class="form-control" id="cost" name="cost" v-model="cost">
        </div>
        <div class="mb-3">
            <label for="course" class="form-label">Курс</label>
            <select name="course" v-model="course_id">
                <option value="">Выберите курс</option>
                <option v-for="course in courses" v-bind:value="course.id">{{ course.title }}</option>
            </select>
        </div>
        <div class="mb-3">
            <input @click.prevent="createSub" type="submit" class="form-control" value="Добавить">
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data(){
        return{
            cost: null,
            courses: null,
            course_id: null
        }
    },
    mounted(){
        this.showCourses()
    },
    methods:{
        createSub(){
            axios.post('/api/admin/create-subscription', {cost:this.cost, course_id:this.course_id})
            .then(data=>{
                this.cost = null
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
