@extends('layouts.app')

@section('title')
	Главная
@endsection

@section('nav-list')
	<li class="nav-item active">
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

@section('content')

@include('inc.banner')
@include('inc.timer')
<figure class="mt-4">
	<div class="fixed-wrap">
		<div id="fixed"></div>
	</div>
</figure>

<br/>
<div class="container">
	<div class="row">
		<div class="col-md-10, col-lg-9">
			<h1 class="text-light article-head">Условия и нюансы</h1>
			<ul class="list-group list-group-flush text-secondary">
				<li class="list-group-item bg-222">
					<p class="lead">Мы делаем лабы, связынные только с программированием.
					Не принимаем заявки с просьбами сделать типовые расчеты, домашние аттестации и т.д.</p>
				</li>
				<li class="list-group-item bg-222">
					<p class="lead">Мы не преподаватели и кандидаты наук. Мы обычные гики, 
					переделавшие кучу лаб, и знаем, с чем имеем дело и как с этим работать, так что не стесняйтесь.</p>
				</li>
				<li class="list-group-item bg-222">
					<p class="lead">Сразу четко озвучивайте все требования к работам
					(тема, предмет, задачи, условия, вариант, преподавтель, сроки, факульет, группа, ФИО), т.к. в дальнейшем
					будет сложно с нами связаться через почту - мы там не особо сидим.</p>
				</li>
				<li class="list-group-item bg-222">
					<p class="lead">В случае какой-либо ошибки с нашей стороны, мы гарантируем, что исправим ее,
					либо, вернем вам деньги (но скорее всего исправим, так что не переживайте).</p>
				</li>
				<li class="list-group-item bg-222">
					<p class="lead">Чтобы заказать работу - перейдите в раздел 
					<a href="{{ route('about') }}" class="text-secondary"><u>Услуги</u></a>
					, выберите тип работы и заполните необходимые формочки.</p>
				</li>
			</ul>
		</div>
	</div>

	<div class="col-md-10, col-lg-9 text-center">
		<button type="button" class="btn btn-outline-success" data-toggle="collapse" data-target="#reviews">
			Посмотреть отзывы
		</button>
	</div>

	<div class="mt-3 collapse" id="reviews">
		<div class="row">
			<div class="col-md-9">
				<ul class="list-group list-group-flush text-secondary">
					@foreach($reviews as $review)
					<li class="list-group-item bg-222">
						<h3 style="display: inline">{{ $review->name }}</h3>
						<span class="ml-2"> {{ $review->date }} </span>
						<p class="lead"> {{ $review->review }} </p>
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>

	<div class="mt-3">
		<div class="row">
			<div class="col-md-10 col-lg-9">
				<form method="POST" action="{{ route('addReview') }}">
					@if(Auth::user())

					@csrf

					<input type="hidden" name="name" value="{{ Auth::user()->name }}"/>
					<input type="hidden" name="date" value="{{ date('Y-m-d') }}"/>
					
					<div class="form-group row">
						<label for="review" class="col-md-9 col-lg-10 col-form-label"><h3 class="text-light">Оставьте отзыв</h3></label>
						@if($errors->any())
						<div class="alert alert-danger col-md-10 col-lg-9 ml-3">
							<ul> 
							@foreach($errors->all() as $e)
								<li> {{ $e }} </li>
							@endforeach
							</ul>
						</div>
						@endif
						<textarea class="form-control ml-3 mr-3" id="review" name="review" rows="6"></textarea>
					</div>

					<div class="form-group row">
						<div class="col-md-8">
							<button type="submit" class="btn btn-outline-primary">Отправить</button>
						</div>
					</div>

					@else

					<fieldset disabled>
						<div class="form-group row">
							<label for="review" class="co-md-9 col-lg-10 col-form-label"><h3 class="text-secondary">Авторизуйтесь, чтобы оставить отзыв</h3></label>
							<textarea class="form-control ml-3 mr-3" id="review" name="review" rows="6"></textarea>
						</div>

						<div class="form-group row">
							<div class="col-md-8">
								<button type="submit" class="btn btn-outline-primary">Отправить</button>
							</div>
						</div>
					</fieldset>

					@endif
				</form>
			</div>
		</div>
	</div>

</div>
@endsection