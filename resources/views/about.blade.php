@extends('layouts.app')

@section('title')
	О нас
@endsection

@section('content')

@section('nav-list')
	<li class="nav-item">
		<a class="nav-link" href="{{ route('home') }}">ГЛАВНАЯ</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ route('service') }}">УСЛУГИ</a>
	</li>
	<li class="nav-item active">
		<a class="nav-link" href="{{ route('about') }}">О НАС</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ route('contacts') }}">КОНТАКТЫ</a>
	</li>
@endsection

<div class="container mt-5">
	<h1 class="text-light article-head">О нас</h1>
	<div class="row">
		<div class="col-lg-6">
			<p class="lead text-secondary">
				Мы понимаем, что у многих студентов может не хватать времени, знаний, либо желания на выполнение той или иной работы,
				поэтому заявляем, что готовы взять бремя выполнения работы на наши крепкие плечи и поспособствовать выполнению докучливых
				трудов, будь то лабораторная, или же курсовая.
			</p>

			<p class="lead text-secondary">
				Мы - гики, обычные студенты, переделавшие кучу лаб. Так что,
				хоть мы и никакие не кандидаты наук, мы знаем с чем имеем дело, к тому же и оцениваем наш труд дешевле, чем те же
				мудреные академики. 
			</p>

			<p class="lead text-secondary">
				При обнаружении вами, либо же преподавателем ошибки в нашей работе, мы ее исправим бесплатно в оговоренные сроки. 
			</p>
		</div>

		<div class="col-lg-6">
			<img src="/images/всратыйПрогер566.jpg" class="img-fluid"/>
		</div>
	</div>

	<h1 class="text-light text-center article-head mt-5"> Тезисы </h1>
	<div class="row">
		<div class="col-lg-4">
			<div class="card bg-dark mt-4">
				<img src="/images/coolcartman.jpg" class="card-img-top"/>
				<div class="card-body">
					<h3 class="card-title text-light">
						Для вас
					</h3>
					<p class="card-text text-secondary lead">
						Низкие цены. Быстрые сроки. Мы нигде не публикуем выполненные работы. 
						Предоставляем возможность выбирать нужный объем работы(только код, блок-схема, или же целый отчет)
					</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card bg-dark mt-4">
				<img src="/images/plancartman.jpg" class="card-img-top"/>
				<div class="card-body">
					<h3 class="card-title text-light">
						О работе
					</h3>
					<p class="card-text text-secondary lead">
						Делаем все в соответствии с поставленной задачей. Пишем читаемый код. Оставляем комментарии.
						Каждую работу делаем собственноручно, поэтому уникальность гарантирована
					</p>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="card bg-dark mt-4">
				<img src="/images/dealcartman.png" class="card-img-top"/>
				<div class="card-body">
					<h3 class="card-title text-light">
						Гарантии
					</h3>
					<p class="card-text text-secondary lead">
						Исправления и доработки бесплатны. Выполнение работы в строго определенные сроки. 
						Полная конфиденциальность. Выполненная работа больше не будет использоваться. 
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

@include('inc.footer')
@endsection