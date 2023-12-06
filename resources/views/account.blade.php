@extends('home')

@section('home')
    <div class="d-flex flex-column gap-4" style="margin-left: 500px">
        <h2>Изменение профиля </h2>
        <form class="d-flex flex-column gap-3">
            <div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Почта">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Имя</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Имя">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Логин</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Логин">
                </div>
            </div>
            <button type="submit" class="btn gradient">Сохранить изменения </button>
        </form>
    </div>
@endsection
