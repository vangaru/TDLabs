@extends('layouts.app')

@section('title')
	TDLabs
@endsection

@section('content')

@section('nav-list')
	<li class="nav-item">
		<a class="nav-link" href="{{ ('home') }}">ГЛАВНАЯ</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ ('service') }}">УСЛУГИ</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ ('about') }}">О НАС</a>
	</li>
	<li class="nav-item active">
		<a class="nav-link" href="{{ ('contacts') }}">КОНТАКТЫ</a>
	</li>
@endsection

@endsection