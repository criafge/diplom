@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container p-3 w-300">
            <h2>Мои подписки</h2>
            
        </div>
        <div class="container p-3 w-300">
            <form action="{{route('update-data-user', $user->id)}}" method="POST">
                @csrf
                <h2 class="center">Изменить данные</h2>
                <div class="mb-3">
                    <label for="name" class="form-label">Имя</label>
                    <input type="text" class="form-control" name="name" value="{{$user->name}}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Почта</label>
                    <input type="email" class="form-control" name="email" value="{{$user->email}}">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>

    </div>
@endsection
