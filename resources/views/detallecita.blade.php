@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Anote los datos de su cita<strong>
                    {{ Auth::user()->name  }} {{ Auth::user()->apellidopat}} </strong> !</div>


              <form>
              
                <h6 class="heading-small text-muted mb-4">Información de su cita</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                      
                        <label class="form-control-label" for="input-username">Nombre del solicitante: </label>
                        <input type="text" id="input-username" class="bg8 s-text6" placeholder="Username" value="{{ $cita->nombre }} {{ $cita->app }} {{ $cita->apm }}" disabled>
                        
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Fecha de la cita:</label>
                        <input type="email" id="input-email" class="bg8 s-text6" value="{{ $cita->dia}}" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Asistir a las:</label>
                        <input type="text" id="input-first-name" class="bg8 s-text6" value="{{ $cita->hora}}"  disabled>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Su trámite corresponde:</label>
                        <input type="text" id="input-last-name" class="bg8 s-text6" value="{{ $cita->tramite}}"  disabled>
                      </div>
                    </div>
                  </div>
                </div>
            

                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Agradecemos tu preferencia</h6>
                


               
                   


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