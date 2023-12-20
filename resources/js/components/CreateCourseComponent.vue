<template>
    <div class="container w-300 mb-5">


        <div class="mb-3">
            <h2 class="mt-3">Добавить новый курс</h2>
            <label for="title" class="form-label">Название</label>
            <input type="text" class="form-control" id="title" name="title" v-model="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea class="form-control" name="description" v-model="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="cost" class="form-label">Цена за месяц</label>
            <textarea class="form-control" name="cost" v-model="cost"></textarea>
        </div>
        <div class="mb-3">
            <label for="language" class="form-label">Язык</label>
            <select class="form-select" aria-label="Default select example" name="language" v-model="language_id">
                <option selected>Выберите язык</option>
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
    data() {
        return {
            title: null,
            cost: null,
            description: null,
            language_id: null,
            languages: null
        }
    },
    mounted() {
        this.showLanguages()
    },
    methods: {
        createCourse() {
            axios.post('/api/admin/create-course', { title: this.title, description: this.description, cost: this.cost, language_id: this.language_id })
                .then(data => {
                    this.title = null
                    this.description = null
                    this.cost = null
                    this.language_id = null
                    console.log(data);
                })
        },
        showLanguages() {
            axios.get('api/admin/')
                .then(data => {
                    this.languages = data.data[0].languages
                    console.log(data)
                })
        }
    }
}
</script>
