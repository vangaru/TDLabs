@extends('layouts.app')

@section('title')
	Услуги
@endsection

@section('content')

@section('nav-list')
	<li class="nav-item">
		<a class="nav-link" href="{{ route('home') }}">ГЛАВНАЯ</a>
	</li>
	<li class="nav-item active">
		<a class="nav-link" href="{{ route('service') }}">УСЛУГИ</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ route('about') }}">О НАС</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ route('contacts') }}">КОНТАКТЫ</a>
	</li>
@endsection

<div class="container">
	<div class="row">
		
	</div>
</div>

@endsection