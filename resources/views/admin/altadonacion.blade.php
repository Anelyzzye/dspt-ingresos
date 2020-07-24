@extends('layouts/administrador')
@section('content')
<div class="card">
	<h3 class="fs-33">Registro porcentaje de donaciones</h3>
	<div class="form-group">
		<form action="{{ route('donacion.store') }}" method="POST" class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
		@csrf
		<div class="col-lg-6">
			<h6 class="m-text18">Nombre del programa o beneficio:</h6>
			
			<input type="text" name="concepto" class="bg8 s-text6">
			@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('concepto') }}
				</div>
			@endif
		</div>
		
		<div class="col-lg-6">
		<h6 class="m-text18">Costo *aplicado descuento</h6>
		<input type="text" name="porcentaje" class="bg8 s-text6"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('porcentaje') }}
				</div>
			@endif
		</div>

		<div class="col-lg-6">
			<br>
		</div>	
		
		<div class="col-lg-6">
			<div><br></div>
		<input type="submit" value="Guardar" class=" tag-item size2 m-text22 hov2 trans-0-4">
	</div>

	</form>


@endsection