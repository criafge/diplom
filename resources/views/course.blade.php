@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flex-column gap-5 " style="margin-top: 30px">
            <div class="d-flex justify-content-between">
                @foreach ($lessons as $lesson)
                    <div class="bg-light rounded d-flex flex-column p-3" style="height: 320px; width: 320px;">
                        <div class="d-flex justify-content-between">
                            <h2>Урок {{$lesson->num}}</h2>
                            <img style="width: 20px; height: 25px" src="img/galochka.png" alt="">
                        </div>
                        <h3>{{$lesson->title}}</h3>
                        <p>{{$lesson->information}}</p>
                        <a class="btn gradient" href="">Пройти</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
