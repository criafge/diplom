@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Добавить новый курс</h2>
        {{-- <form>
            <div class="mb-3">
                <label for="title" class="form-label">Наименование</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Описание</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <div class="mb-3 form-check">
                <label for="language" class="form-check-label" for="exampleCheck1">Язык</label>
                <select name="language" id="">
                    @foreach ($languages as $language)
                        <option value="{{$language->id}}">{{$language->title}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form> --}}
        <CreateCourseComponent></CreateCourseComponent>
    </div>
@endsection
