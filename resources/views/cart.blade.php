@extends('base')

@section('title')
    Cart
@endsection

@section('main_content')

    <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-image w-100">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartTableItems as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <div class="image-container">
                                                    <img class="bd-placeholder-img card-img-top" alt="picture"
                                                        src="{{ asset($item->img_path) }}">
                                                </div>
                                            </td>
                                            <td>{{ $item->price }} ₽</td>
                                            <td>{{ $item->quantity }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <button onClick="loadScript()">Load Cart Script</button>
                        <script>
                          function loadScript() {
                            const script = document.createElement('script');
                            script.src = "{{ asset('js/cart.js') }}";
                            document.body.appendChild(script);
                          }
                        </script>
                        <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
                        <div class="container-xl">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
