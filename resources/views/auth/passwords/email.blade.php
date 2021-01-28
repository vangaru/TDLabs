@extends('layouts.app')

@section('nav-list')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">ГЛАВНАЯ</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('service') }}">УСЛУГИ</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('about') }}">О НАС</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('contacts') }}">КОНТАКТЫ</a>
    </li>
@endsection

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-secondary">
                <div class="card-header">{{ __('Смена Пароля') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-primary">
                                    {{ __('Отправить Ссылку На Смену Пароля') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
