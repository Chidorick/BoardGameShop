@extends('base')

@section('title')
    Login
@endsection

@section('main_content')
    <h1 class="h3 mb-3 fw-normal">Login</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="login/check">
        @csrf

        <div class="form-floating">
            <input type="text" class="form-control" name="email" id="email" placeholder="Bob@example.com">
            <label for="floatingName">Email</label>
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    </form>
@endsection
