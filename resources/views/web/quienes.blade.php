@extends('layouts/presencia')
@section('content')
<section class="bgwhite p-t-66 p-b-38">
	<div class="container">
			<div class="col-md-4 p-b-30">
				<div class="row">
					<h5 class="m-text20 p-b-24">
					¿Quiénes somos? <br>
				</h5>
				</div>	
	</div>	
	<div class="row">
		<ul>
					<li>
						<div class="flex-w p-l-15 p-r-15">
					<span class="s-text18 w-size19 w-full-sm">
						Misión:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text12 p-b-23" style="text-align: justify;">
							Promover el de desarrollo, mejora del medio ambiente, calidad de servicios públicos, y de salud en la comunidad.
						</p>
				</div>
					</li>	

				 <li>
				 	<div class="flex-w p-l-15 p-r-15">
					<span class="s-text18 w-size19 w-full-sm">
						Visión:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text12 p-b-23" style="text-align: justify;">
							Mantener una seguridad pública, promover la cultura, solidaria, y competitiva con los habitantes de la comunidad. 
						</p>
				</div>
				 </li>
				
				</ul>
	</div>
</section>
		<!-- content page -->
	<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="{{ asset('assets/presencia/juan.jpg')}}" alt="Primer Delegado">
					</div>
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						Juan Abad Morales
					</h3>

					<p class="p-b-28" style="text-align: justify;">
						Primer Delegado Municipal de la Delegación San Pedro Totoltepec, comprometido con la comunidad, promovedor de actividades
						culturales, campañas de salud, siempre al pendiente de gestionar apoyos sociales en beneficio de la comunidad.
					</p>

					<div class="bo13 p-l-29 m-l-9 p-b-10">
						<p class="p-b-11" style="text-align: justify;">
							Debemos usar el tiempo sabiamente y darnos cuenta de que siempre es el momento oportuno para hacer las cosas bien
						</p>

						<span class="s-text7">
							- Nelson Mandela
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>

			<!-- content page -->
	<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="{{ asset('assets/presencia/roberto.jpg')}}" alt="Segundo Delegado">
					</div>
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						Roberto Flores
					</h3>

					<p class="p-b-28" style="text-align: justify;">
						Segundo Delegado Municipal de la Delegación San Pedro Totoltepec, comprometido con el mejoramiento urbano, limpieza de la comunidad y seguridad pública. 
						Apoyo y trabajo arduo en las faenas, mantenimiento de la explanada (kiosko), panteón municipal. 
					</p>

					<div class="bo13 p-l-29 m-l-9 p-b-10" style="text-align: justify;">
						<p class="p-b-11">
							El que nunca ha aprendido a obedecer no puede ser un buen comandante 
						</p>

						<span class="s-text7">
							- Aristóteles
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="{{ asset('assets/presencia/angel.jpg')}}" alt="Tercer Delegado">
					</div>
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						Angel Díaz
					</h3>

					<p class="p-b-28" style="text-align: justify;">
						Tercer Delegado Municipal de la Delegación San Pedro Totoltepec, 
						dedicado e involucrado en las actividades y obras públicas a la comunidad. 
						Trabajando constantemente por tener una comunidad digna, limpia.
					</p>

					<div class="bo13 p-l-29 m-l-9 p-b-10">
						<p class="p-b-11" style="text-align: justify;">
							Cuanto mayor es el esfuerzo, mayor es la gloria
						</p>

						<span class="s-text7">
							- Pierre Corneille
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection