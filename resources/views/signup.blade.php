@extends('base')

@section('title')
    Sign Up
@endsection

@section('main_content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-auto mt-5">
                    <div class="card-header">
                        <h1 class="h3 mb-3 fw-normal">Sign Up</h1>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="signup/check">
                            @csrf

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Bob">
                                <label for="floatingName">Username</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="name@example.com">
                                <label for="floatingEmail">Email address</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>

                            <button class="w-100 btn btn-lg btn-success" type="submit">Sign Up</button>
                        </form>

                        <div class="text-center mt-3">
                            <p>Already registered? <a href="/login">Log In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection