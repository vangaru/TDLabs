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

<div class="container mt-5">
	<h2 class="text-light article-head">Цены на лабораторные работы</h2>
	<table class="table table-hover table-striped table-dark">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Семестр</th>
				<th scope="col">Услуга</th>
				<th scope="col">Цена</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</td>
				<td>1</td>
				<td>Код к лабораторной работе</td>
				<td>5 Рублей</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>1</td>
				<td>Блок-схема к лабораторной работе</td>
				<td>5 Рублей</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>1</td>
				<td>Работа целиком: код + блок-схема + отчет</td>
				<td>8 Рублей</td>
			</tr>
			<tr>
				<th scope="row">4</th>
				<td>2</td>
				<td>Код к лабораторной работе</td>
				<td>7 Рублей</td>
			</tr>
			<tr>
				<th scope="row">5</th>
				<td>2</td>
				<td>Блок-схема к лабораторной работе</td>
				<td>7 Рублей</td>
			</tr>
			<tr>
				<th scope="row">6</th>
				<td>2</td>
				<td>Работа целиком: код + блок-схема + отчет</td>
				<td>12 Рублей</td>
			</tr>
			<tr>
				<th scope="row">7</th>
				<td>3</td>
				<td>Код к лабораторной работе</td>
				<td>10 Рублей</td>
			</tr>
			<tr>
				<th scope="row">8</th>
				<td>3</td>
				<td>Работа целиком: код + отчет</td>
				<td>12 Рублей</td>
			</tr>
		</tbody>
	</table>
</div>

<div class="container mt-5">
	<h2 class="text-light article-head">Цены на Курсовые работы</h2>
	<table class="table table-hover table-striped table-dark">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Семестр</th>
				<th scope="col">Услуга</th>
				<th scope="col">Цена</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row">1</th>
				<td>2</td>
				<td>Код к курсовой работе</td>
				<td>25 Рублей</td>
			</tr>
			<tr>
				<th scope="row">2</th>
				<td>2</td>
				<td>Блок-схема к курсовой работе</td>
				<td>15 Рублей</td>
			</tr>
			<tr>
				<th scope="row">3</th>
				<td>2</td>
				<td>Работа целиком: код + блок-схема + оформление</td>
				<td>50 Рублей</td>
			</tr>
			<tr>
				<th scope="row">4</th>
				<td>3</td>
				<td>Код к курсовой работе</td>
				<td>40 Рублей</td>
			</tr>
			<tr>
				<th scope="row">5</th>
				<td>3</td>
				<td>Блок-схема к курсовой работе</td>
				<td>15 Рублей</td>
			</tr>
			<tr>
				<th scope="row">6</th>
				<td>3</td>
				<td>Работа целиком: код + блок-схема + оформление</td>
				<td>60 Рублей</td>
			</tr>
		</tbody>
	</table>
</div>

@include('inc.footer')
@endsection