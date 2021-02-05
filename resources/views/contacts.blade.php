@extends('layouts.app')

@section('title')
	TDLabs
@endsection

@section('nav-list')
	<li class="nav-item">
		<a class="nav-link" href="{{ route('index') }}">ГЛАВНАЯ</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ route('service') }}">УСЛУГИ</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ route('about') }}">О НАС</a>
	</li>
	<li class="nav-item active">
		<a class="nav-link" href="{{ route('contacts') }}">КОНТАКТЫ</a>
	</li>
@endsection

@section('content')


@endsection