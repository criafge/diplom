<template>
    <div class="container">
        <div class="mb-3">
            <label for="title" class="form-label" >Наименование</label>
            <input type="text" class="form-control" id="title" name="title" v-model="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea class="form-control" name="description" v-model="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="cost" class="form-label">Цена</label>
            <textarea class="form-control" name="cost" v-model="cost"></textarea>
        </div>
        <div class="mb-3">
            <input @click.prevent="createCourse" type="submit" class="form-control" value="Добавить">
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data(){
        return{
            title: null,
            description: null,
            cost: null
        }
    },
    methods:{
        createCourse(){
            axios.post('/api/admin/create-course', {title:this.title, description:this.description, cost:this.cost})
            .then(data=>{
                this.title = null
                this.description = null
                this.cost = null
                console.log(data);
            })
        }
    }
}
</script>
