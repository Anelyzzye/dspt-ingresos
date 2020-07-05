@extends('layouts/presencia')
@section('content')

<section class="bgwhite p-t-66 p-b-38">
	<div class="container">
			<div class="col-12 p-b-30">
				<div class="col-12">
					<h5 class="m-text20 p-b-24">
					Trámites y requisitos <br>
				</h5>
				</div>	
	
	<div class="w-size20 w-full-sm">
						<p class="s-text12 p-b-23">
							En este apartado podrás conocer, cuáles son los trámites que puedes realizar en la Delegación de San Pedro Totoltepec, así como acceder a la sección para agendar una cita, recuerda que por motivos de salud el horario es restringido
						</p>
						<p>
							Es importante revisar la documentación solicida en la parte de abajo de esta misma sección, una vez revisa la información, le solicitamos crear una cuenta de acceso al sistema de citas <strong>*Clic en Nuevo*</strong>, si ya has realizado tu cuenta <strong>*Clic en Crear*</strong> <br>
							<center>
		<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				 <a href="{{ route('register')}}">
				<button class="  bg4 tag-item hov1 m-text9 trans-0-4" target="_blank">Nuevo
				</button></a>

				<a href="{{ route('login')}}">
				<button class="  bg4 tag-item hov1 m-text9 trans-0-4" target="_blank"> &nbsp;Crear&nbsp;
				</button></a>	
		</center>
						</p>
	</div>

</div>
</div></section>	


<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="p-b-11 m-text24">
					Constancia de Domicilio 
				</h4>
				<span class="m-text10 t-center">
						<ul>
				<li><strong>INE/IFE con direccion actualizada</strong></li>
				<li>*No cuenta con el INE por ser menor de edad ó no tener direción actualizada presentar:
					
						<li>CURP</li>
						<li>Comprobante de domicilio ó IFE (Papá o Mamá)</li>
					</ul>
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="p-b-11 m-text24">
					Constancia de Ingresos 
				</h4>

				<span class="m-text10 t-center">
					<ul>
				<li><strong>INE/IFE con direccion actualizada</strong></li>
				<li><strong>Información del ingreso mensual</strong></li>
				<li>*No cuenta con el INE por ser menor de edad ó no tener direción actualizada presentar:
					
						<li>CURP</li>
						<li>Comprobante de domicilio ó IFE (Papá o Mamá)</li>
					</ul>
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="p-b-11 m-text24">
					Constancia de Identidad
				</h4>

				<span class="m-text10 t-center">
						<ul>
				<li><strong>INE/IFE con direccion actualizada</strong></li>
				<li><strong>CURP / Acta de Nacimiento</strong></li>
				<li><strong>Fotografia infantil (blanco y negro)</strong></li>

				<li>*No cuenta con el INE por ser menor de edad ó no tener direción actualizada presentar:
					
						<li>CURP</li>
						<li>Comprobante de domicilio ó IFE (Papá o Mamá)</li>
					</ul>
				</span>
			</div>
		</div>
	</section>

	
		<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="p-b-11 m-text24">
					Acta informativa 
				</h4>
					<span class="m-text10 t-center">
						<ul>
				<li><strong>INE/IFE con direccion actualizada</strong></li>
				<li>*No cuenta con el INE por ser menor de edad ó no tener direción actualizada presentar:
					
						<li>CURP</li>
						<li>Comprobante de domicilio ó IFE (Papá o Mamá)</li>
					</ul>
					</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="p-b-11 m-text24">
					Reapertura de panteón 
				</h4>

				<span class="m-text10 t-center">
					<ul>
						<li>Certificado de Defunción</li>
						<li>Registro de inhumación</li>
						<li>IFE/INE Solicitante</li>
					</ul>
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="p-b-11 m-text24">
					Contrato de compra - venta
				</h4>

				<span class="m-text10 t-center">
					Para el inicio de este proceso es necesario, solicitar las medidas del terreno
				</span>
			</div>
		</div>
	</section>
	




@endsection