@extends('layouts/administrador')
@section('content')
<!-- Dark table -->
<form  method="GET" action="{{ route('eventos.index') }}" >
    <h4 class="text-white mb-0">Publicaciones/eventos </h4>
      	<div class="input-group-prepend">
      		<div class="input-group-text">
            <span class="fa fa-search">
            </span>
            </div>
        <input type="text" name="titulo" class="bg8 s-text6" placeholder="Ingrese el titulo del evento">
    	</div>
    	<div><br></div>
  <input type="submit" value="Visualizar registros" class="tag-item size3 m-text2 hov2 trans-0-4"> 
</form> 

		<div><br></div>
        <div class="col">
          <div class="card bg-default shadow"><h3 class="text-white fs-33 mb-0">Eventos publicados</h3>
            
              <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Titulo del evento</th>
                    
                    <th scope="col">Actualizar</th>
                    <th scope="col">Eliminar publicación</th>                                  
                  </tr>
                </thead> 
                @foreach($eventos as $eve)
                <tbody>
                  <tr>
                    
                    <th scope="row">
                      <div class="media align-items-center">
                       
                        <div class="media-body">
                          <span class="mb-0 text-lg">{{ $eve->evento_titulo }}  </span>
                        </div>
                      </div>
                    </th>
                   
                    <td>
                      <a href="{{ route('eventos.edit', $eve->id) }}">
                    	<input type="submit" value="Editar" class=" tag-item size2 m-text3 hov3 trans-0-4"></a>
                    </td>

                     <td>
                      <form action="{{route('eventos.delete', $eve->id)}}" method="POST">
                          @method("DELETE")
                          @csrf
                      <input type="submit" value="Eliminar" class=" tag-item size2 m-text33 hov3 trans-0-4">
                    </form>
                    </td>

                    @endforeach
         </table>
         <p class="card">
           {{ $eventos->render()}}
         </p>
          </div> </div> 




@endsection