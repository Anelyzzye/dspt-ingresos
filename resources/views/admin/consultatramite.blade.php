@extends('layouts/administrador')
@section('content')
<!-- Dark table -->
<form  method="GET" action="{{ route('tramites.index') }}" >
    <h4 class="text-white mb-0">Trámite o servicio </h4>
      	<div class="input-group-prepend">
      		<div class="input-group-text">
            <span class="fa fa-search">
            </span>
            </div>
        <input type="text" name="tramite" class="bg8 s-text6" placeholder="Ingrese el nombre del tramite">
    	</div>
    	<div><br></div>
  <input type="submit" value="Visualizar registros" class="tag-item size3 m-text2 hov2 trans-0-4"> 
</form> 

		<div><br></div>
        <div class="col">
          <div class="card bg-default shadow"><h3 class="text-white fs-33 mb-0">Registro de los trámites y servicios disponibles</h3>
            
              <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Nombre trámite ó servicio / Nomenclatura</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Actualizar</th>                                  
                  </tr>
                </thead> 
                @foreach($tram as $t)
                <tbody>
                  <tr>
                    
                    <th scope="row">
                      <div class="media align-items-center">
                       
                        <div class="media-body">
                          <span class="mb-0 text-lg">{{ $t->nombretipotramite }} - {{$t->clavetramite}} </span>
                        </div>
                      </div>
                    </th>
                    <td class="mb-0 text-lg">{{ $t->costo }}</td>
                    <td>
                      <a href="{{route('tramites.edit',$t->id)}}">
                    	<input type="submit" value="Editar" class=" tag-item size2 m-text3 hov3 trans-0-4"></a>
                    </td>

                    @endforeach
         </table>
         <p class="card">
           {{ $tram->render()}}
         </p>
          </div> </div> 




@endsection