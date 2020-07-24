@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sistema de Citas, recuerda no dejar ningún campo vacio. <strong>
                    </strong> !
                    <center>
		<h3 class="text-muted">
			@if(session()->has('msj'))
			<div class="alert alert-danger" role="alert">
 					{{ session('msj')}}
		</div>
		@endif
		</h3>

                </div>
<form action="{{route('cita.store')}}" method="POST" class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
		@csrf
		<div class="col-lg-6">
			<h6 class="m-text18">Nombre(s):</h6>
			
			<select class="bg8 s-text6" name="user_id">
				
				<option value="{{ Auth::user()->id  }}">  {{ Auth::user()->name  }} {{ Auth::user()->apellidopat}} {{ Auth::user()->apellidomat}} </option>
				
			</select>
		</div>
		
		<div class="col-lg-6">
		<h6 class="m-text18">Seleccione el día</h6>
		<input type="date" name="dia" class="bg8 s-text6"><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('dia') }}
				</div>
			@endif
		</div>

		<div class="col-lg-6">
		<h6 class="m-text18">Seleccione el horario:</h6>
		<select class="bg8 s-text6" name="hora">
			<option>9:30am</option>
			<option>10:00am</option>
			<option>10:30am</option>
			<option>11:00am</option>
			<option>11:30am</option>
			<option>12:00am</option>
			<option>12:30am</option>
			<option>1:00pm</option>
		</select>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('hora') }}
				</div>
			@endif
		</div>



		<div class="col-lg-6">
		<h6 class="m-text18">Selección el trámite o servicio</h6>
		<select class="bg8 s-text6" name="tipotramites_id">
				@foreach($tramites as $t)
				<option value="{{ $t->id }}"> {{ $t->nombretipotramite }} </option>
				@endforeach
			</select><br>
		@if($errors->any())
				<div class="alert-danger mb-4">
   			 		{{ $errors->first('tipotramites_id') }}
				</div>
			@endif
		</div>


		<div class="col-lg-6">
		
		<input type="hidden" name="statuscitas" class="bg8 s-text6" value="0"><br>

		</div>

		
		<div class="col-lg-6">
			<div><br></div>
		<input type="submit" value="Crear cita" class=" tag-item size2 m-text22 hov2 trans-0-4">
	</div>

	</form>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


@endsection