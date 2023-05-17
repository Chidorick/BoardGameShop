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
                    @if ($cartTableItems->isEmpty())
                        <div class="empty-cart">Корзина пуста</div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-image w-100">
                                <thead>
                                    <tr>
                                        <th scope="col">Название</th>
                                        <th scope="col"> </th>
                                        <th scope="col">Цена</th>
                                        <th scope="col">Количество</th>
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
                        <div class="d-flex justify-content-between">
                            <form action="{{ route('clearCart') }}" method="POST">
                                @csrf
                                <button class="btn red-button" type="submit">Очистить корзину</button>
                            </form>
                            <button class="btn green-button" onClick="openPopup()">Оформить</button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div id="popup" class="popup hidden">
    <div class="popup-content">
        <span class="close" onClick="closePopup()">&times;</span>
        <form>
            <label for="address">Адрес:</label>
            <input type="text" id="address" name="address" required><br><br>

            <label for="city">Город:</label>
            <select id="city" name="city" required>
                <option value="city1">Москва</option>
                <option value="city2">Санкт-Петербург</option>
            </select><br><br>

            <label for="phone">Телефон:</label>
            <input type="tel" id="phone" name="phone" required><br><br>

            <button class="green-button" type="button" onclick="location.href='/'">Оформить</button>
        </form>
    </div>
</div>

<script src="{{ asset('js/cart.js') }}"></script>

@endsection