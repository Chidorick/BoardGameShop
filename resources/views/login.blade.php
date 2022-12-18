@extends('base')

@section('title')
    Login
@endsection

@section('main_content')
    <h1 class="h3 mb-3 fw-normal">Login</h1>
    <form method="POST" action="login/check">
        @csrf

        <div class="form-floating">
            <input type="text" class="form-control" name="name" id="name" placeholder="Bob">
            <label for="floatingName">Username</label>
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    </form>
@endsection
