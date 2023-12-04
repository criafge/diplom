@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex align-items-center m-4">
            <a class="fs-3 text-black" href="{{route('theory')}}" style="text-decoration:none">Посмотреть теоретический материал</a>
            <img style="height: 30px; padding-top:5px"  src="img/3042406.png" alt="">
        </div>
        <div class="d-flex flex-column gap-5 " style="margin-top: 30px">
            <div class="d-flex justify-content-between">
                <div class="bg-light rounded d-flex flex-column p-3" style="height: 320px; width: 320px;">
                    <div class="d-flex justify-content-between">
                        <h2>Урок 1</h2>
                        <img style="width: 20px; height: 25px" src="img/galochka.png" alt="">
                    </div>
                    <h3>Название</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum voluptatibus totam sunt hic quo
                        itaque corporis vel ratione placeat perferendis.</p>
                    <a class="btn gradient" href="">Пройти</a>
                </div>
                <div class="bg-light rounded d-flex flex-column p-3" style="height: 320px; width: 320px;">
                    <div>
                        <h2>Урок 1</h2>
                        <img src="" alt="">
                    </div>
                    <h3>Название</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum voluptatibus totam sunt hic quo
                        itaque corporis vel ratione placeat perferendis.</p>
                    <a class="btn gradient" href="">Пройти</a>
                </div>
                <div class="bg-light rounded d-flex flex-column p-3" style="height: 320px; width: 320px;">
                    <div>
                        <h2>Урок 1</h2>
                        <img src="" alt="">
                    </div>
                    <h3>Название</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum voluptatibus totam sunt hic quo
                        itaque corporis vel ratione placeat perferendis.</p>
                    <a class="btn gradient" href="">Пройти</a>
                </div>

            </div>
            <div class="d-flex justify-content-between">
                <div class="bg-light rounded d-flex flex-column p-3" style="height: 320px; width: 320px;">
                    <div>
                        <h2>Урок 1</h2>
                        <img src="" alt="">
                    </div>
                    <h3>Название</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum voluptatibus totam sunt hic quo
                        itaque corporis vel ratione placeat perferendis.</p>
                    <a class="btn gradient" href="">Пройти</a>
                </div>
                <div class="bg-light rounded d-flex flex-column p-3" style="height: 320px; width: 320px;">
                    <div>
                        <h2>Урок 1</h2>
                        <img src="" alt="">
                    </div>
                    <h3>Название</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum voluptatibus totam sunt hic quo
                        itaque corporis vel ratione placeat perferendis.</p>
                    <a class="btn gradient" href="">Пройти</a>
                </div>
                <div class="bg-light rounded d-flex flex-column p-3" style="height: 320px; width: 320px;">
                    <div>
                        <h2>Урок 1</h2>
                        <img src="" alt="">
                    </div>
                    <h3>Название</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum voluptatibus totam sunt hic quo
                        itaque corporis vel ratione placeat perferendis.</p>
                    <a class="btn gradient" href="">Пройти</a>
                </div>

            </div>
        </div>
    </div>
@endsection
