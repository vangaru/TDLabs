@extends('layouts.app')

@section('title')
Пользователи
@endsection

@section('nav-list')
<li class="nav-item">
	<a class="nav-link" href="{{ route('admin.reviews') }}">ОТЗЫВЫ</a>
</li>
<li class="nav-item active">
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
	<h1 class="text-light article-head">Пользователи</h1>

	<form class="row" action="{{ route('admin.users.sort') }}" method="POST">
		@csrf

		<div class="col-md-10 col-lg-9">
			<select name="sort" class="form-control">
				<option disabled>Сортировать пользователей</option>
				<option value="name">По Именам</option>
				<option value="old_users">Самые старые</option>
				<option value="new_users">Самые новые</option>
			</select>
		</div>
		<div class="col-md-2 col-lg-3">
			<button type="submit" class="btn btn-outline-success">Сортировка</button>
		</div>
	</form>

	<table class="table table-hover table-striped table-dark mt-3">
		<thead>
			<tr>
				<th scope="col">Имя</th>
				<th scope="col">e-mail</th>
				<th scope="col">Дата Регистрации</th>
				<th scope="col">Удаление</th>
			</tr>
		</thead>

		<tbody>
			@foreach($users as $user)
			<tr>
				<td><span class="align-self-center">{{ $user->name }}</span></td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->created_at }}</td>
				<td><a href="{{ route('admin.users.delete', $user->id) }}"><button type="button" class="btn btn-warning">Удалить</button></a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>


@endsection