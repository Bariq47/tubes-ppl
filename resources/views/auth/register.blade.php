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
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container">
        <div class="row justify-content-center g-lg-5 py-5">
            <div class="col-md-10 col-lg-5">
                <form method="POST" action="{{ route('register') }}"
                    class="w-100 p-4 p-md-5 border rounded-3 bg-body-tertiary">
                    @csrf
                    <div class="form-floating mb-3">
                        <input id="name" type="text" placeholder="Name"
                            class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input id="email" type="email" placeholder="name@example.com"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">
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
                            autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="password">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control"
                            name="password_confirmation" required autocomplete="new-password">
                        <label for="password-confirm">Confirm Password</label>
                    </div>
                    <div class="text-center mb-4">
                        <div class="d-flex justify-content-around">
                            <a href="{{ route('welcome') }}" class="btn btn-dark btn-lg">Cancel</a>
                            <button class="btn btn-dark btn-lg" type="submit">Sign Up</button>
                        </div>
                    </div>
                    <hr class="mb-2">
                    <div class="text-center">
                        <small>
                            Have an account? 
                            <a class="text-body-secondary" href="{{ route('login') }}">Sign in.</a>
                        </small>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
