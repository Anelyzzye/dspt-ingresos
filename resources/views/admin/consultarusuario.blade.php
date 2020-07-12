@extends('layouts/administrador')
@section('content')
<!-- Dark table -->
<form  method="GET" action="{{ route('ciudadano.index') }}" >
    <h4 class="text-white mb-0">Nombre del administrativo: </h4>
      	<div class="input-group-prepend">
      		<div class="input-group-text">
            <span class="fa fa-search">
            </span>
            </div>
        <input type="text" name="admin" class="bg8 s-text6" placeholder="Ingrese el nombre">
    	</div>
    	<div><br></div>
  <input type="submit" value="Visualizar registros" class="tag-item size3 m-text2 hov2 trans-0-4"> 
</form> 

		<div><br></div>
        <div class="col">
          <div class="card bg-default shadow"><h3 class="text-white fs-33 mb-0">Registros administrativos</h3>
            
              <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Nombre Administrativo</th>
                    <th scope="col">Email</th>
                    <th scope="col">Actualizar</th>                                  
                  </tr>
                </thead> 
                @foreach($ciudadano as $ciud)
                <tbody>
                  <tr>
                    
                    <th scope="row">
                      <div class="media align-items-center">
                       
                        <div class="media-body">
                          <span class="mb-0 text-lg">{{ $ciud->nombres }} {{ $ciud->apellidopat }} {{ $ciud->apellidomat }} </span>
                        </div>
                      </div>
                    </th>
                    <td class="mb-0 text-lg">{{ $ciud->email }}</td>
                    <td>
                      <a href="{{ route('ciudadano.edit',$ciud->id) }}">
                    	<input type="submit" value="Editar" class=" tag-item size2 m-text3 hov3 trans-0-4"></a>
                    </td>

                    @endforeach
         </table>
         <p class="card">
           {{ $ciudadano->render()}}
         </p>
          </div> </div> 




@endsection