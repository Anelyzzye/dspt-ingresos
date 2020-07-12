@extends('layouts/administrador')
@section('content')
<!-- Dark table -->
<form  method="GET" action="{{ route('donacion.index') }}" >
    <h4 class="text-white mb-0">Programa o beneficio </h4>
      	<div class="input-group-prepend">
      		<div class="input-group-text">
            <span class="fa fa-search">
            </span>
            </div>
        <input type="text" name="porcentaje" class="bg8 s-text6" placeholder="Ingrese el nombre">
    	</div>
    	<div><br></div>
  <input type="submit" value="Visualizar registros" class="tag-item size3 m-text2 hov2 trans-0-4"> 
</form> 

		<div><br></div>
        <div class="col">
          <div class="card bg-default shadow"><h3 class="text-white fs-33 mb-0">Registros de porcentaje donacion</h3>
            
              <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Programa / Beneficio</th>
                    <th scope="col">Porcentaje</th>
                    <th scope="col">Actualizar</th>                                  
                  </tr>
                </thead> 
                @foreach($donacion as $don)
                <tbody>
                  <tr>
                    
                    <th scope="row">
                      <div class="media align-items-center">
                       
                        <div class="media-body">
                          <span class="mb-0 text-lg">{{ $don->concepto }}  </span>
                        </div>
                      </div>
                    </th>
                    <td class="mb-0 text-lg">{{ $don->porcentaje }}</td>
                    <td>
                      <a href="{{ route('donacion.edit', $don->id)}}">
                    	<input type="submit" value="Editar" class=" tag-item size2 m-text3 hov3 trans-0-4"></a>
                    </td>

                    @endforeach
         </table>
         <p class="card">
           {{ $donacion->render()}}
         </p>
          </div> </div> 




@endsection