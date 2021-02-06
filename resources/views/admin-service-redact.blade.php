@extends('layouts.app')

@section('title')
	{{ $service->description }}
@endsection

@section('nav-list')
<li class="nav-item">
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
	<div class="mt-3">
		<div class="row">
			<div class="col-md-10 col-lg-9">
				<form method="POST" action="{{ route('admin.service.redact.submit', $service->id) }}">
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
						<label for="serviceType"><h1 class="text-light">Редактировать услугу</h1></label><br/>
						<label for="serviceType" class="text-primary lead">Тип услуги</label>
						<input type="text" name="type" class="form-control" id="serviceType" placeholder="Введите тип услуги" value="{{ $service->type }}" required=""/>
					</div>

					<div class="form-group">
						<label for="serviceSemester" class="text-primary lead">Семестр</label>
						<input type="number" name="semester" class="form-control" id="serviceSemester" placeholder="Введите семестр" value="{{ $service->semester }}" required=""/>
					</div>

					<div class="form-group">
						<label for="serviceDescription" class="text-primary lead">Описание</label>
						<input type="text" name="description" class="form-control" id="serviceDescription" placeholder="Введите описание услуги" value="{{ $service->description }}" required=""/>
					</div>

					<div class="form-group">
						<label for="servicePrice" class="text-primary lead">Цена</label>
						<input type="text" name="price" class="form-control" id="servicePrice" placeholder="Введите цену услуги" value="{{ $service->price }}" required=""/>
					</div>

					<div class="form-group">
						<label for="serviceTerms" class="text-primary lead">Сроки</label>
						<input type="text" name="terms" class="form-control" id="serviceTerms" placeholder="Введите сроки" value="{{ $service->terms }}" required=""/>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-outline-primary">Обновить</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>

@endsection