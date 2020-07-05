@extends('layouts/presencia')
@section('content')
<section class="bgwhite p-t-66 p-b-38">
	<div class="container">
		<div class="col-md-4 p-b-30">
			<div class="row">
				<h5 class="m-text20 p-b-24">
				Dirección
				</h5>
				</div>	
	</div>
	<div class="col">
		<div class="col-md-9 p-b-30">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.2876602261717!2d-99.57518231905681!3d19.31331994032209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe1262039a3ffef72!2sDelegaci%C3%B3n%20Municipal%20de%20San%20Pedro%20Totoltepec!5e0!3m2!1ses-419!2smx!4v1571103758824!5m2!1ses-419!2smx" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
	</div>

	<div class="col">
				<div class="col-md-6 p-b-30">
					<h3>¡Envíanos tus comentarios!</h3>

					<form role="form" action="#" method="GET">
              	
                
                <div class="form-group">
                  <div class="input-group input-groupmb-3">
                    
                      <input type="text" class="form-control" name="nombre" placeholder="Nombre" required/>
                            
                  </div>
                </div>

                  <div class="form-group">
                  <div class="input-group input-groupmb-3">
                    
                      <input type="email" class="form-control" name="emailcomenta" placeholder="Email" required/>
                            
                  </div>
                </div>

                 <div class="form-group">
                  <div class="input-group input-groupmb-3">
                    
                      <input type="text" class="form-control" name="asunto" placeholder="Asunto" required/>
                            
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-groupmb-3">
                    
                      <h3> Mensaje: </h3>
                      <textarea name="mensaje" class="form-control">
                      	
                      </textarea>
                            
                  </div>
                </div>
                

                  <button type="submit" class="bg4 tag-item hov1 m-text9 trans-0-4">Enviar</button>
                </div>
              </form>
				</div>
				</div>		



</div>
</section>



@endsection