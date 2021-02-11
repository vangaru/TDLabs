@extends('layouts.app')

@section('title')
Оформить заказ
@endsection

@section('nav-list')
	<li class="nav-item">
		<a class="nav-link" href="{{ route('index') }}">ГЛАВНАЯ</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ route('service') }}">УСЛУГИ</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="{{ route('about') }}">О НАС</a>
	</li>
	<li class="nav-item">
        <a href="mailto:2sdaydude@gmail.com" class="nav-link">КОНТАКТЫ</a>
    </li>
@endsection

@section('content')

<div class="container text-light mt-5">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card bg-dark text-secondary">
				<div class="card-header">Оформить заказ</div>
				<div class="card-body">
					<form method="POST" action="#">
						@csrf
				
						<div class="form-group row">
							<label for="serviceType" class="col-md-4 col-form-label text-md-right ">Тип работы</label>
							<div class="col-md-6">
								<input type="text" name="type" class="form-control" id="serviceType" placeholder="Введите тип услуги" value="{{ $order->type }}" readonly="" />
							</div>
						</div>
				
						<div class="form-group row">
							<label for="serviceSemester" class="col-md-4 col-form-label text-md-right">Семестр</label>
							<div class="col-md-6">
								<input type="number" name="semester" class="form-control" id="serviceSemester" placeholder="Введите семестр" value="{{ $order->semester }}" readonly="" />
							</div>
						</div>
				
						<div class="form-group row">
							<label for="serviceDescription" class="col-md-4 col-form-label text-md-right">Описание</label>
							<div class="col-md-6">
								<input type="text" name="description" class="form-control" id="serviceDescription" placeholder="Введите описание услуги" value="{{ $order->description }}" readonly="" />
							</div>
						</div>
				
						<div class="form-group row">
							<label for="servicePrice" class="col-md-4 col-form-label text-md-right">Цена</label>
							<div class="col-md-6">
								<input type="text" name="price" class="form-control" id="servicePrice" placeholder="Введите цену услуги" value="{{ $order->price }}" readonly="" />
							</div>
						</div>
				
						<div class="form-group row">
							<label for="serviceTerms" class="col-md-4 col-form-label text-md-right">Сроки</label>
							<div class="col-md-6">
								<input type="text" name="terms" class="form-control" id="serviceTerms" placeholder="Введите сроки" value="{{ $order->terms }}" readonly="" />
							</div>
						</div>

						<div class="form-group row">
							<label for="customer" class="col-md-4 col-form-label text-md-right">Ваше имя</label>
							<div class="col-md-6">
								<input type="text" name="customer" class="form-control" id="customer" placeholder="Ваше имя" value="{{ Auth::user()->name }}" readonly="">
							</div>
						</div>

						<div class="form-group row">
							<label for="customerEmail" class="col-md-4 col-form-label text-md-right">E-mail</label>
							<div class="col-md-6">
								<input type="text" name="email" class="form-control" id="customerEmail" placeholder="E-mail" value="{{ Auth::user()->email }}" readonly="">
							</div>
						</div>

						<div class="form-group-row">
							<div class="col-md-8 offset-md-2">
								<div class="upload-container d-flex justify-content-center align-items-center flex-column bg-222">
									<div>
										<input type="file" name="file" id="file"  multiple="" required="">
										<h1 class="display-2 text-center"><i class="far fa-file text-light"></i></h1>
										<label for="file" class=" text-light font-weight-bold">Выберите файл</label>
										<span class="text-light">или перетащите его сюда</span>
									</div>
								</div>
							</div>
						</div>
				
						<div class="form-group row mb-0">
							<div class="col-md-8 offset-md-4">
								<button type="submit" class="btn btn-success">Заказать</button>
							</div>
						</div>
				
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection