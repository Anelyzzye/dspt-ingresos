@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">¡Bienvenida al sistema de citas, <strong>
                    {{ Auth::user()->name  }} {{ Auth::user()->apellidopat}} </strong> !</div>


               
                   

                    <p style="text-align: justify;">

                        ¿Cómo registro mi cita?:<br>
                        1.- Da clic en <strong>comenzar</strong><br>
                        2.- Ingresa los datos correspondientes (Trámite, día, hora)
                        Es importante llenar todos los campos de lo contrario no se podrá guardar tu cita. <br>
                        3.- Da clic en Generar Cita. <br>


                        <br>
                        Es importante:<br>
                        1.- Acudir a tu cita puntualmente, llegar 10 minutos antes de la hora estipulada. <br>
                        2.- Contar con IFE/INE actualizada, de lo contrario, acudir con con curp y comprobante de domicilio no mayor a 3 meses. 
                        <br>
                        <center>
                            <a href="{{ route('cita.create')}}">
                            <button class="flex-c-m tag-item size2 m-text2 bg3 hov1 trans-0-4" type="button">
     Agendar cita</a>
</button>

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
