@extends('layouts.app')

@section('title')
Отзывы
@endsection

@section('nav-list')

<li class="nav-item active">
	<a class="nav-link" href="{{ route('admin.reviews') }}">ОТЗЫВЫ</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{ route('admin.users') }}">ПОЛЬЗОВАТЕЛИ</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{ route('admin.service') }}">УСЛУГИ</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="#">РАБОТЫ</a>
</li>

@endsection

@section('content')

<div class="container mt-5">
	<h1 class="text-light article-head">Редактировать Отзывы</h1>

	<form class="row" action="{{ route('admin.reviews.sort') }}" method="POST">
		@csrf

		<div class="col-md-10 col-lg-9">
			<select name="sort" class="form-control">
				<option disabled>Сортировать отзывы</option>
				<option value="author">По авторам</option>
				<option value="old_reviews">Самые старые</option>
				<option value="new_reviews">Самые новые</option>
			</select>
		</div>
		<div class="col-md-2 col-lg-3">
			<button type="submit" class="btn btn-outline-success">Сортировка</button>
		</div>
	</form>

	<ul class="list-group list-group-flush text-secondary">
		@foreach($reviews as $review)
		<li class="list-group-item bg-222">
			<div class="row">
				<div class="col-md-10 col-lg-9">
					<h3 style="display: inline">{{ $review->name }}</h3>
					<span class="ml-2"> {{ $review->date }} </span>
					<p class="lead"> {{ $review->review }} </p>
				</div>
				<div class="col-md-2 col-lg-3 align-self-center">
					<a href="{{ route('admin.reviews.delete', $review->id) }}">
						<button type="button" class="btn btn-danger">Удалить</button>
					</a>
				</div>
			</div>
		</li>
		@endforeach
	</ul>
</div>


@endsection