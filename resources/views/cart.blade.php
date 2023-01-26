@extends('base')

@section('title')
    Cart
@endsection

@section('main_content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
      </tr>
    </thead>
    <tbody>
        @foreach($cartTableItems as $item)
      <tr>
        <td>{{ $item->name }}</td>
        <td><img class="bd-placeholder-img card-img-top" width="100" height="200" alt="picture" role="img" preserveAspectRatio="xMidYMid slice"
            src={{ asset($item->img_path) }}></td>
        <td>{{ $item->price }}</td>
        <td>{{ $item->quantity }}</td>
      </tr>
      @endforeach
    </tbody>
@endsection
