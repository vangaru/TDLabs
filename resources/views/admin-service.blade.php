@extends('layouts.app')

@section('title')
Услуги
@endsection

@section('nav-list')
<li class="nav-item">
	<a class="nav-link" href="{{ route('admin.reviews') }}">ОТЗЫВЫ</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="{{ route('admin.users') }}">ПОЛЬЗОВАТЕЛИ</a>
</li>
<li class="nav-item active">
	<a class="nav-link" href="{{ route('admin.service') }}">УСЛУГИ</a>
</li>
<li class="nav-item">
	<a class="nav-link" href="#">РАБОТЫ</a>
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
					<th scope="col">Редактировать</th>
					<th scope="col">Удалить</th>
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
					<td>
						<a href="{{ route('admin.service.redact', $labwork->id) }}">
							<button class="btn btn-success">Редактировать</button>
						</a>
					</td>
					<td>
						<a href="{{ route('admin.service.delete', $labwork->id) }}">
							<button class="btn btn-danger">Удалить</button>
						</a>
					</td>
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
					<th scope="col">Редактировать</th>
					<th scope="col">Удалить</th>
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
					<td>
						<a href="{{ route('admin.service.redact', $coursework->id) }}">
							<button class="btn btn-success">Редактировать</button>
						</a>
					</td>
					<td>
						<a href="{{ route('admin.service.delete', $coursework->id) }}">
							<button class="btn btn-danger">Удалить</button>
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="mt-3">
		<div class="row">
			<div class="col-md-10 col-lg-9">
				<form method="POST" action="{{ route('admin.service.add') }}">
					@csrf

					<div class="form-group">
						@if($errors->any())
						<div class="alert alert-danger col-md-10 col-lg-9 ml-3">
							<ul> 
							@foreach($errors->all() as $e)
								<li> {{ $e }} </li>
							@endforeach
							</ul>
						</div>
						@endif
					</div>

					<div class="form-group">
						<label for="serviceType"><h1 class="text-light">Добавить услугу</h1></label><br/>
						<label for="serviceType" class="text-primary lead">Тип услуги</label>
						<input type="text" name="type" class="form-control" id="serviceType" placeholder="Введите тип услуги" required=""/>
					</div>

					<div class="form-group">
						<label for="serviceSemester" class="text-primary lead">Семестр</label>
						<input type="number" name="semester" class="form-control" id="serviceSemester" placeholder="Введите семестр" required=""/>
					</div>

					<div class="form-group">
						<label for="serviceDescription" class="text-primary lead">Описание</label>
						<input type="text" name="description" class="form-control" id="serviceDescription" placeholder="Введите описание услуги" required=""/>
					</div>

					<div class="form-group">
						<label for="servicePrice" class="text-primary lead">Цена</label>
						<input type="text" name="price" class="form-control" id="servicePrice" placeholder="Введите цену услуги" required=""/>
					</div>

					<div class="form-group">
						<label for="serviceTerms" class="text-primary lead">Сроки</label>
						<input type="text" name="terms" class="form-control" id="serviceTerms" placeholder="Введите сроки" required=""/>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-outline-primary">Добавить</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

@endsection