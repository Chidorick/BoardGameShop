@extends('base')

@section('title')
    Add to Cart
@endsection

@section('main_content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <img src="{{ asset($card->img_path) }}" class="card-img h-100 mx-auto d-block" style="max-width: 100%;">
                    </div>
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">Add to Cart</h5>
                            <p class="card-text">{{ $card->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="fs-5">{{ $card->price }} ₽</small>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger mt-3">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="POST" action="/addtocart/check" class="mt-3">
                                @csrf
                                <input type="hidden" class="form-control" name="good_id" value="{{ $card->id }}">
                                <div class="form-group">
                                    <label for="quantity">Quantity</label>
                                    <input type="number" class="form-control w-100" id="quantity" name="quantity" min="1" max="99999" value="1">
                                </div>
                                <button class="btn btn-success btn-block" type="submit">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
