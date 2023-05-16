@extends('base')

@section('title')
    Home
@endsection

@section('main_content')
<div id="root"></div>

<script src="{{ asset('js/cards.jsx') }}"></script>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach ($cards as $card)
                            <div class="col">
                                <div class="card h-100 flex-fill">
                                    <img class="card-img-top" src="{{ asset($card->img_path) }}" alt="Card image">
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <p class="card-text">{{ $card->description }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success"
                                                    onclick='location.href="/addtocart/{{ $card->id }}"'><i
                                                        class="fas fa-shopping-basket"></i> In Cart</button>
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
        </div>
    </div>
@endsection