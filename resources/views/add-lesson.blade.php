@extends('layouts.app')

@section('content')
    <div class="container center-position w-300 mt-3">
        <form action="{{route('create-lesson')}}" method="POST">
            @csrf
            <h2 class="center">Добавить урок</h2>
            <div class="mb-3">
                <label for="title" class="form-label">Название</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label for="information" class="form-label">Теория</label>
                <textarea class="form-control" name="information"></textarea>
            </div>
            <div class="mb-3">
                <label for="num" class="form-label">Номер урока</label>
                <input type="text" class="form-control" name="num">
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection
