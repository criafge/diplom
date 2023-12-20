@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">

            @foreach ($lessons as $lesson)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <form action="{{route('update-lesson', $lesson->id)}}" method="POST">
                            @csrf
                            <h2></h2>
                            <div class="mb-3">
                                <label for="title" class="form-label">Название</label>
                                <input type="text" class="form-control" name="title" value="{{ $lesson->title }}">
                            </div>
                            <div class="mb-3">
                                <label for="information" class="form-label">Теория</label>
                                <textarea class="form-control" name="information" value="{{ $lesson->information }}"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="num" class="form-label">Номер урока</label>
                                <input type="text" class="form-control" name="num" value="{{ $lesson->num }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
