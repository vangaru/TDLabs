@extends('layouts.app')

@section('title')
Домашняя
@endsection

@section('content')

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
	<li class="nav-item">
		<a class="nav-link" href="{{ route('contacts') }}">КОНТАКТЫ</a>
	</li>
@endsection



@include('inc.footer')
@endsection