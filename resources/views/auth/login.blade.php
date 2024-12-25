@extends('layouts.A')
@section('custom-css')
    <style>
        body {
            background-color: #212529;
            overflow-x: hidden;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center g-lg-5 py-5">
            <div class="col-md-10 col-lg-5">
                <form method="POST" action="{{ route('login') }}" class="w-100 p-4 p-md-5 border rounded-3 bg-body-tertiary">
                    @csrf
                    <div class="form-floating mb-3">
                        <input id="email" type="email" placeholder="name@example.com"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="email">Email Address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input id="password" type="password" placeholder="Password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="password">Password</label>
                    </div>
                    <div class="text-center mb-4">
                        <div class="d-flex justify-content-around">
                            <a href="{{ route('welcome') }}" class="btn btn-dark btn-lg">Cancel</a>
                            <button class="btn btn-dark btn-lg" type="submit">Sign In</button>
                        </div>
                    </div>
                    <hr class="my-4">
                    <div class="text-center">
                        <small>
                            Don't have an account?
                            <a class="text-body-secondary" href="{{ route('register') }}">Sign up here</a>
                        </small>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
