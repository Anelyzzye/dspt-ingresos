@extends('layouts/administrador')
@section('content')
<div class="card">
	<h3 class="fs-33">Actualización de la publicación de eventos</h3>
	<div class="form-group">
		<form action="{{route('eventos.update',$evento->id)}}" method="POST" class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto" enctype="multipart/form-data">
		@csrf
		@method('PATCH')
		<div class="col-lg-6">
			<h6 class="m-text18">Titulo del evento:</h6>
			
			<input type="text" name="evento_titulo" class="bg8 s-text6" value="{{$evento->evento_titulo}}">
			@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('evento_titulo') }}
				</div>
			@endif
		</div>
		
		<div class="col-lg-6">
		<h6 class="m-text18">Texto del evento:</h6>
		<input  type="text" name="evento_texto" class="bg8 s-text6" value="{{ $evento->evento_texto }}"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('evento_texto') }}
				</div>
			@endif
		</div>

		<div class="col-lg-6">
			<h6 class="m-text18">Fecha de la publicación</h6>
			
			<input type="date" name="evento_fecha" class="bg8 s-text6" value="{{$evento->evento_fecha}}">
			@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('evento_fecha') }}
				</div>
			@endif
		</div>

		<div class="col-lg-6">
			<h6 class="m-text18">Fecha de publicación </h6>
		<input type="file" name="evento_image" class="bg8 s-text6"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('evento_image') }}
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