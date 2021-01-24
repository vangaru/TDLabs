@extends('layouts.app')

@section('title')
	TDLabs
@endsection

@section('content')

@section('nav-list')
	<li class="nav-item active">
		<a class="nav-link" href="#">ГЛАВНАЯ</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#">УСЛУГИ</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#">О НАС</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#">КОНТАКТЫ</a>
	</li>
@endsection

@include('inc.banner')

@endsection