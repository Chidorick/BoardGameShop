@extends('base')

@section('title')
    Home
@endsection

@section('main_content')
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($cards as $card)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="100%" alt="ffff"
                                src={{ asset($card->img_path) }}>
                            <div class="card-body">
                                <p class="card-text">Адепта Сороритас, также известные как Сестры Битвы или Дочери
                                    Императора, - карающая рука Экклезиархии, церкви Империума.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-warning">In Cart</button>
                                    </div>
                                    <small class="fs-5">{{ $card->price }} ₽</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
