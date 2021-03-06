@extends('layouts/administrador')
@section('content')
<div class="card">
	<h3 class="fs-33">Actualizar trámites ó servicios</h3>
	<div class="form-group">
		<form action="{{route('tramites.update',$tramites->id)}}" method="POST" class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
		@csrf
		@method('PATCH')
		<div class="col-lg-6">
			<h6 class="m-text18">Nombre del trámite / servicio:</h6>
			
			<input type="text" name="nombretipotramite" class="bg8 s-text6" value="{{$tramites->nombretipotramite}}">
			@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('nombretipotramite') }}
				</div>
			@endif
		</div>
		
		<div class="col-lg-6">
		<h6 class="m-text18">Nomenclatura asignada:</h6>
		<input type="text" name="clavetramite" class="bg8 s-text6" value="{{$tramites->clavetramite}}"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('clavetramite') }}
				</div>
			@endif
		</div>

		<div class="col-lg-6">
			<h6 class="m-text18">Precio:</h6>
		<input type="text" name="costo" class="bg8 s-text6" value="{{$tramites->costo}}"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('costo') }}
				</div>
			@endif
		</div>	
		
		<div class="col-lg-6">
			<div><br></div>
		<input type="submit" value="Actualizar" class=" tag-item size2 m-text22 hov2 trans-0-4">
	</div>

	</form>


@endsection