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
            <label for="language" class="form-label">Язык</label>
            <select name="language" v-model="language_id">
                <option value="">Выберите язык</option>
                <option v-for="language in languages" v-bind:value="language.id">{{ language.title }}</option>
            </select>
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
            language_id: null,
            languages: null
        }
    },
    mounted(){
        this.showLanguages()
    },
    methods:{
        createCourse(){
            axios.post('/api/admin/create-course', {title:this.title, description:this.description, language_id:this.language_id})
            .then(data=>{
                this.title = null
                this.description = null
                this.language_id = null
                console.log(data);
            })
        },
        showLanguages(){
            axios.get('api/admin/')
            .then(data=>{
                this.languages = data.data[0].languages
                console.log(data)
            })
        }
    }
}
</script>
