@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flex-column gap-3 cards">
            <h2 style="margin-top: 20px">Наши курсы</h2>
            <div class="d-flex justify-content-between">
                <form action="{{ route('courses') }}" method="get">
                    @csrf
                    <select class="form-select" name="filter">
                        <option selected>Язык</option>
                        @foreach ($languages as $language)
                            <option value="{{ $language->id }}">{{ $language->title }}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-primary" type="submit">Применить</button>
                </form>
            </div>
            <div class="d-flex justify-content-between">
                @foreach ($courses as $course)
                    <div class="card hover-card d-flex flex-column gap-5" style="width: 18rem;">
                        <img src="img/english.png" class="card-img-top h-50" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->title }}</h5>
                            <p class="card-text">{{ $course->cost }}/мес.</p>
                            <button type="button"  onclick="setCourseId({{ $course->id }})" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Оформить подписку</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Оформление подписки</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('create-sub')}}" method="POST">
                        @csrf
                        <input type="hidden" id="courseId" name="course_id" value="">
                        <div class="mb-3">
                            <select class="form-select" name="duration">
                                <option value="">Выберите длительность подписки</option>
                                <option value="1">1 месяц</option>
                                <option value="1">3 месяц</option>
                                <option value="1">6 месяц</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Оформить</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function setCourseId(courseId) {
            document.getElementById('courseId').value = courseId;
        }
    </script>
@endsection
