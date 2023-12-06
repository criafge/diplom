@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex align-items-center ">
            <div class="d-flex flex-column gap-5 ">
                <div class="m-4">
                    <img class="rounded-circle" style="width: 150px" src="img/default.jpg" alt="">
                    <p class="fs-5">Имя пользователя</p>
                </div>
                <div class="d-flex  flex-column gap-4">
                    <div class="d-flex align-items-center gap-4 bg-light rounded" style="height: 80px; padding-left:20px">
                        <img style="width: 40px" src="img/user.png" alt="">
                        <p class="fs-5">Аккаунт</p>
                    </div>
                    <div class="d-flex align-items-center gap-4 bg-light rounded" style="height: 80px; padding-left:20px">
                        <img style="width: 40px" src="img/pen.png" alt="">
                        <p class="fs-5">Пароль</p>
                    </div>
                    <div class="d-flex align-items-center gap-4 bg-light rounded" style="height: 80px; padding-left:20px">
                        <img style="width: 40px" src="img/sub.png" alt="">
                        <p class="fs-5">Мои курсы</p>
                    </div>
                </div>
            </div>
            <div>
                @yield('home')
            </div>
        </div>
    </div>
@endsection
