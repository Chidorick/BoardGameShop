@extends('base')

@section('title')
    Home
@endsection

@section('main_content')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

    <div id="root"></div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($cards as $card)
                    <div class="col">
                        <div class="card h-100 flex-fill">
                            <img class="card-img-top" src="{{ asset($card->img_path) }}" alt="Card image">
                            <div class="card-overlay">
                                <div class="overlay-content">
                                    <p class="card-text">{{ $card->description }}</p>
                                    <button type="button" class="btn btn-block" onclick='location.href="/addtocart/{{ $card->id }}"'>
                                        <i class="fas fa-shopping-basket"></i>В корзину
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection