@extends('base')

@section('title')
    Login
@endsection

@section('main_content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-auto mt-5">
                    <div class="card-header">
                        <h1 class="h3 mb-3 fw-normal">Вход в аккаунт</h1>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="login/check">
                            @csrf

                            <div class="form-group">
                                <label for="floatingName">Email</label>
                                <input type="text" class="form-control" name="email" id="email"
                                    placeholder="Bob@example.com">
                            </div>

                            <div class="form-group">
                                <label for="floatingPassword">Пароль</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password">
                            </div>

                            <button class="w-100 btn btn-lg btn-primary btn-success" type="submit">Войти</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
