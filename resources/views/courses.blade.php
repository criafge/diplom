@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flex-column gap-3 cards">
            <h2 style="margin-top: 20px">Наши курсы</h2>
            <div class="d-flex justify-content-between">
                <div class="card hover-card d-flex flex-column gap-5" style="width: 18rem;">
                    <img src="img/english.png" class="card-img-top h-50" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Английский язык</h5>
                        <p class="card-text">1200 руб/мес.</p>
                        <a id="login-btn" href="#" class="btn gradient">Подробнее</a>
                    </div>
                </div>
                <div class="card hover-card d-flex flex-column gap-5" style="width: 18rem;">
                    <img src="img/spanish.jpg" class="card-img-top h-50" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Испанский язык</h5>
                        <p class="card-text">1200 руб/мес.</p>
                        <a id="login-btn" href="#" class="btn gradient">Подробнее</a>
                    </div>
                </div>
                <div class="card hover-card d-flex flex-column gap-5" style="width: 18rem;">
                    <img src="img/french.png" class="card-img-top h-50" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Французский язык</h5>
                        <p class="card-text">1200 руб/мес.</p>
                        <a id="login-btn" href="#" class="btn gradient">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="card hover-card d-flex flex-column gap-5" style="width: 18rem;">
                    <img src="img/french.png" class="card-img-top h-50" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Французский язык</h5>
                        <p class="card-text">1200 руб/мес.</p>
                        <a id="login-btn" href="#" class="btn gradient">Подробнее</a>
                    </div>
                </div>
                <div class="card hover-card d-flex flex-column gap-5" style="width: 18rem;">
                    <img src="img/french.png" class="card-img-top h-50" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Французский язык</h5>
                        <p class="card-text">1200 руб/мес.</p>
                        <a id="login-btn" href="#" class="btn gradient">Подробнее</a>
                    </div>
                </div>
                <div class="card hover-card d-flex flex-column gap-5" style="width: 18rem;">
                    <img src="img/french.png" class="card-img-top h-50" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Французский язык</h5>
                        <p class="card-text">1200 руб/мес.</p>
                        <a id="login-btn" href="#" class="btn gradient">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
