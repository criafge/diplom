<template>
    <div v-for="course in courses">
        <div :class="isEdit(course.id) ? 'd-none' : ''" class="card" style="width: 18rem;">
            <div class="card-header">
                №{{ course.id }}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ course.title }}</li>
                <li class="list-group-item">{{ course.description }}</li>
                <li class="list-group-item">{{ course.cost }}</li>
            </ul>
            <div class="card-footer">
                <a href="#" @click.prevent="changeId(course.id, course.title, course.description, course.cost)">Редактировать</a>
                <a href="#" @click.prevent="deleteCourse(course.id)">Удалить</a>
            </div>
        </div>
        <div :class="isEdit(course.id) ? 'w-50' : 'd-none'">
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Наименование</label>
                <div class="col-sm-10">
                    <input type="text" v-model="title" class="form-control" id="title">
                </div>
            </div>
            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Описание</label>
                <div class="col-sm-10">
                    <textarea type="text" v-model="description" class="form-control" id="description"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="cost" class="col-sm-2 col-form-label">Цена</label>
                <div class="col-sm-10">
                    <input type="number" v-model="cost" class="form-control" id="cost">
                </div>
            </div>
            <button @click.prevent="updateCourse(course.id)" type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    mounted() {
        this.getCourses(),
        this.deleteCourse()
    },
    data() {
        return {
            courses: null,
            idCourse: null,
            title: null,
            cost: null,
            description: null
        }
    },
    methods: {
        getCourses() {
            axios.get('./api/admin/')
                .then(data => {
                    this.courses = data.data
                })
        },
        changeId(id, title, description, cost) {
            this.idCourse = id
            this.title = title
            this.description = description
            this.cost = cost
        },
        isEdit(id){
            return this.idCourse === id
        },

        updateCourse(id){
            this.idCourse = null;
            axios.patch(`/api/admin/update/${id}`, {title: this.title, description: this.description, cost: this.cost})
            .then(data =>{
                this.getCourses()
            })
        },
        deleteCourse(id){
            axios.delete(`/api/admin/delete/${id}`)
            .then(data =>{
                this.getCourses()
            })
        }
    }
}
</script>
