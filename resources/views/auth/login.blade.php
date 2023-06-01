@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/login.css">

    <div class="login"> 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
    
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
    
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
    
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Kata Sandi') }}</label>
    
                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">
    
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
    
                        <div class="col-md-2 offset-md-4 d-grid gap-2" style="margin-left: 50%; margin-top: 4%;">
                            <button type="submit" class="btn btn-danger">
                                {{ __('Masuk') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
    @endsection
