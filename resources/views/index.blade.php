@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flex-column gap-5">
            <div class="w-100 d-flex align-items-center justify-content-between" style="height: 875px;">
                <div>
                    <h1 style="font-size: 64px">GlobalSpeak</h1>
                    <p class="fs-2">Просто изучай языки и не выходи из дома</p>
                </div>
                <div class="intro-img">
                    <img src="img/intro3.jpg" style="height: 700px" alt="">
                </div>
            </div>
            <div class="d-flex flex-column gap-3 cards">
                <h2>Популярные языки</h2>
                <div class="d-flex justify-content-between">
                    @foreach ($languages as $language)
                        <div class="card hover-card d-flex flex-column gap-5" style="width: 18rem;">
                            <img src="img/english.png" class="card-img-top h-50" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $language->title }}</h5>
                                <a id="login-btn" href="language/{{$language->id}}" class="btn gradient">Подробнее</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $languages->links('pagination::bootstrap-5') }}
                <div>
                    <a href="{{ route('courses') }}" class="fs-5 links-header">Смотреть все</a>
                </div>
            </div>

            <div class="d-flex align-items-center rounded bg-blue justify-content-around p-1">
                <div style="width: 450px">
                    <p class="fs-2 text-wrap">После прохождения любого курса вы получите сертификат</p>
                    <p class="fs-5 text-dark-emphasis">Сертификат подтверждает ваше обучение иностранному языку</p>
                </div>
                <img src="img/asd.png" alt="" style="height: 300px">
            </div>

            <div class="d-flex flex-column gap-4">
                <h2 class="text-center">Обучение у нас это:</h2>
                <div class="d-flex justify-content-between gap-5">
                    <div class="rounded d-flex align-items-center p-2"
                        style="background-color: rgba(135, 60, 255, 0.3); height: 250px">
                        <p class="fs-4 text-center">Изучение иностранного языка в формате игровых тестов</p>
                    </div>
                    <div class="rounded d-flex align-items-center p-2" style="background-color: rgba(120, 155, 255, 0.3)">
                        <p class="fs-4 text-center">Теоретический материал всегда под рукой</p>
                    </div>
                    <div class="rounded d-flex align-items-center p-2" style="background-color: rgba(255, 160, 65, 0.3)">
                        <p class="fs-4 text-center">Преподаватели, которые всегда помогут в трудную минуту</p>
                    </div>
                </div>
            </div>

            <div class="test-block d-flex align-items-center justify-content-around">
                <div style="width: 600px">
                    <p class="fs-4">Не знаешь с чего начать?</p>
                    <p class="fs-4"> Пройди тест на уровень владения языка!</p>
                </div>
                <a class="btn gradient">Пройти тест</a>
            </div>
        </div>
    </div>
@endsection
