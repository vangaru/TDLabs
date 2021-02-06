@extends('layouts.app')

@section('title')
	Услуги
@endsection

@section('nav-list')
	<li class="nav-item">
		<a class="nav-link" href="{{ route('index') }}">ГЛАВНАЯ</a>
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

@section('content')

<div class="container mt-5">
	<div>
		<h2 class="text-light article-head">Лабораторные Работы</h2>
		<table class="table table-hover table-striped table-dark">
			<thead>
				<tr>
					<th scope="col">Семестр</th>
					<th scope="col">Тип</th>
					<th scope="col">Услуга</th>
					<th scope="col">Цена</th>
					<th scope="col">Сроки</th>
				</tr>
			</thead>
			<tbody>
				@foreach($labworks as $labwork)
				<tr>
					<th scope="row">{{ $labwork->semester }}</th>
					<td>{{ $labwork->type }}</td>
					<td>{{ $labwork->description }}</td>
					<td>{{ $labwork->price }}</td>
					<td>{{ $labwork->terms }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="mt-4">
		<h2 class="text-light article-head mt-3">Курсовые Работы</h2>
		<table class="table table-hover table-striped table-dark">
			<thead>
				<tr>
					<th scope="col">Семестр</th>
					<th scope="col">Тип</th>
					<th scope="col">Услуга</th>
					<th scope="col">Цена</th>
					<th scope="col">Сроки</th>
				</tr>
			</thead>
			<tbody>
				@foreach($courseworks as $coursework)
				<tr>
					<th scope="row">{{ $coursework->semester }}</th>
					<td>{{ $coursework->type }}</td>
					<td>{{ $coursework->description }}</td>
					<td>{{ $coursework->price }}</td>
					<td>{{ $coursework->terms }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection