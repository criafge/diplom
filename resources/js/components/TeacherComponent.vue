<template>
    <div class="container center-position w-300 mb-3">
        <div v-for="teacher in teachers">
            <div class="card" >
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{teacher.id}}</li>
                    <li class="list-group-item">{{ teacher.name }}</li>
                    <li class="list-group-item">{{ teacher.email }}</li>
                </ul>
                <div class="card-footer">
                    <a @click.prevent="deleteTeacher(teacher.id)" class="btn btn-primary">Удалить</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    mounted() {
        this.showTeacher(),
        this.deleteCourse()
    },
    data() {
        return {
            teachers: null,
            idTeacher: null
        }
    },
    methods: {
        showTeacher(){
            axios.get('api/admin/')
            .then(data=>{
                this.teachers = data.data[0].teachers
            })
        },
        deleteTeacher(id) {
            axios.delete(`/api/admin/delete-teacher/${id}`)
                .then(data => {
                    this.showTeacher()
                })
        }
    }
}
</script>
