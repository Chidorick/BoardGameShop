@extends('base')

@section('title')
    Add to Cart
@endsection

@section('main_content')
    <h1 class="h3 mb-3 fw-normal">Add to Cart</h1>
    <div class="card shadow-sm">
        <img class="bd-placeholder-img card-img-top" width="100%" height="340" alt="picture" role="img" preserveAspectRatio="xMidYMid slice"
            src={{ asset($card->img_path) }}>
        <div class="card-body">
            <p class="card-text">{{ $card->description }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <small class="fs-5">{{ $card->price }} ₽</small>
            </div>
        </div>
    </div>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="/addtocart/check">
        @csrf

        <div class="form-floating">
            <input type="hidden" class="form-control" name="good_id" id="good_id" value="{{$card->id}}">
        </div>

        <div class="form-floating">
            <input type="number" class="form-control" name="quantity" id="quantity" min="1" max="99999" value="1">
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Add to Cart</button>
    </form>
@endsection
