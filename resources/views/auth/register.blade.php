@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/login.css">

    <div class="container form-box">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="row mb-3 name-label">
                        <label for="name"
                            class="col-md-4 col-form-label text-md-end name-input-label">{{ __('Nama') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text"
                                class="form-control @error('name') is-invalid @enderror name-input" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3 email-label">
                        <label for="email"
                            class="col-md-4 col-form-label text-md-end email-input-label">{{ __('Email') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror email-input" name="email"
                                value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3 password-label">
                        <label for="password"
                            class="col-md-4 col-form-label text-md-end password-input-label">{{ __('Kata Sandi') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror password-input" name="password"
                                required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3 password-confirmation-label">
                        <label for="password-confirm"
                            class="col-md-4 col-form-label text-md-end password-confirmation-input-label">{{ __('Konfirmasi') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control password-confirmation-input"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-5 offset-md-4 d-grid gap-2"style="margin-left: 37%; margin-top: 2%;">
                            <button type="submit" class="btn btn-danger">
                                {{ __('Daftar') }}
                            </button>
                        </div>
                    </div>

                </form>

                <p class="mt-4 text-center" style="margin-left: 16%;">Sudah memiliki akun? <a class="text-primary" href="{{ url('/Masuk') }}" class="text-decoration-none text-dark">Masuk</a></p>

            </div>
        </div>
    </div>
@endsection
