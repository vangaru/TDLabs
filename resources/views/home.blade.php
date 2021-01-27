@extends('layouts.app')

@section('title')
	TDLabs
@endsection

@section('content')

@section('nav-list')
	<li class="nav-item active">
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

@include('inc.banner')
@include('inc.timer')

<div class="container mt-5">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
			<h1 class="text-light" id="conditions-head">Условия и нюансы</h1>
			<ul class="list-group list-group-flush center-block">
				<li class="list-group-item bg-222">
					<p class="lead text-secondary">Мы делаем лабы, связынные только с программированием.
					Не принимаем заявки с просьбами сделать типовые расчеты, домашние аттестации и т.д.</p>
				</li>
				<li class="list-group-item bg-222">
					<p class="lead text-secondary">Мы не преподаватели и кандидаты наук. Мы обычные гики, 
					переделавшие кучу лаб, и знаем, с чем имеем дело и как с этим работать, так что не стесняйтесь.</p>
				</li>
				<li class="list-group-item bg-222">
					<p class="lead text-secondary">Сразу четко озвучивайте все требования к работам
					(тема, предмет, задачи, условия, вариант, преподавтель, сроки, факульет, группа, ФИО), т.к. в дальнейшем
					будет сложно с нами связаться через почту- мы там не особо сидим.</p>
				</li>
				<li class="list-group-item bg-222">
					<p class="lead text-secondary">В случае какой-либо ошибки с нашей стороны, мы гарантируем, что исправим ее,
					либо, вернем вам деньги (но скорее всего исправим, так что не переживайте).</p>
				<li class="list-group-item bg-222">
					<p class="lead text-secondary">Чтобы заказать работу - перейдите в раздел 
					<a href="{{ route('about') }}" class="text-secondary"><u>Услуги</u></a>
					, выберите тип работы и заполните необходимые формочки.</p>
				</li>
			</ul>
			</div>
		</div>
	</div>
</div>


@endsection