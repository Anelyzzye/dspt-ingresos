@extends('layouts/administrador')
@section('content')
<div class="card">
	<h3 class="fs-33">Actualizar usuario administrador</h3>
	<div class="form-group">
		<form action="{{ route('ciudadano.update',$ciudadanos->id) }}" method="POST" class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
		@csrf
		@method('PATCH')
		<div class="col-lg-6">
			<h6 class="m-text18">Nombre(s):</h6>
			
			<input type="text" name="nombres" class="bg8 s-text6" value="{{$ciudadanos->nombres}}">
			@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('nombres') }}
				</div>
			@endif
		</div>
		
		<div class="col-lg-6">
		<h6 class="m-text18">Apellido paterno:</h6>
		<input type="text" name="apellidopat" class="bg8 s-text6" value="{{$ciudadanos->apellidopat}}"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('apellidopat') }}
				</div>
			@endif
		</div>

		<div class="col-lg-6">
		<h6 class="m-text18">Apellido materno:</h6>
		<input type="text" name="apellidomat" class="bg8 s-text6" value="{{$ciudadanos->apellidomat}}"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('apellidomat') }}
				</div>
			@endif
		</div>



		<div class="col-lg-6">
		<h6 class="m-text18">Correo electrónico:</h6>
		<input type="email" name="email" class="bg8 s-text6" value="{{$ciudadanos->email}}"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('email') }}
				</div>
			@endif
		</div>

		<div class="col-lg-6">
		<h6 class="m-text18">Contraseña</h6>
		<input type="password" name="password" class="bg8 s-text6"
		value="{{$ciudadanos->password}}"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('password') }}
				</div>
			@endif
		</div>

		<div class="col-lg-6">
		<h6 class="m-text18">Confirmación contraseña:</h6>
		<input type="password" name="password_confirmation" class="bg8 s-text6"
		value="{{$ciudadanos->password}}"><br>
		</div>

		<div class="col-lg-6">
		
		<input type="hidden" name="tipociudadanos_id" class="bg8 s-text6" value="3"><br>

		</div>

		
		<div class="col-lg-6">
			<div><br></div>
		<input type="submit" value="Actualizar" class=" tag-item size2 m-text22 hov2 trans-0-4">
	</div>

	</form>


@endsection