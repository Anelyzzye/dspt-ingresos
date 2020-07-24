@extends('layouts/administrador')
@section('content')
<div class="card">
	<h3 class="fs-33">Crear un nuevo aviso</h3>
	<div class="form-group">
		<form action="{{ route('avisos.store')}}" method="POST" class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto" enctype="multipart/form-data">
		@csrf
		<div class="col-lg-6">
			<h6 class="m-text18">Titulo del aviso:</h6>
			
			<input type="text" name="aviso_titulo" class="bg8 s-text6">
			@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('aviso_titulo') }}
				</div>
			@endif
		</div>
		
		<div class="col-lg-6">
		<h6 class="m-text18">Link:</h6>
		<input type="text" name="aviso_link" class="bg8 s-text6"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('aviso_link') }}
				</div>
			@endif
		</div>

		<div class="col-lg-6">
			<h6 class="m-text18">Flyer del aviso:</h6>
		<input type="file" name="aviso_image" class="bg8 s-text6"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('aviso_image') }}
				</div>
			@endif
		</div>	
		
		<div class="col-lg-6">
			<div><br></div>
		<input type="submit" value="Guardar" class=" tag-item size2 m-text22 hov2 trans-0-4">
	</div>

	</form>


@endsection