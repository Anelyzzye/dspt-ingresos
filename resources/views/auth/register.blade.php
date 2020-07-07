@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido al sistema de registro de la ciudadania') }}
                    <p>Para generar una cita para realizar tus trámites. 
                Debes tener en cuenta los siguientes puntos:
                <ul>
                    <li>Todos los campos deben ser llenados</li>
                    <li>Debes de llenar la información solicitada con los datos de tu IFE/INE ya que serán los datos con los que se expedirá la solicitud del trámite.</li>
                    <li>No puedes prestar tu dirección de correo electronico, este mismo es personal.</li>
                </ul>
                 </p>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre (s):') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="apellidopat" class="col-md-4 col-form-label text-md-right">{{ __('Apellido paterno:') }}</label>

                            <div class="col-md-6">
                                <input id="apellidopat" type="text" class="form-control @error('apellidopat') is-invalid @enderror" name="apellidopat" value="{{ old('apellidopat') }}" required autocomplete="apellidopat" autofocus>

                                @error('apellidopat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="apellidomat" class="col-md-4 col-form-label text-md-right">{{ __('Apellido materno:') }}</label>

                            <div class="col-md-6">
                                <input id="apellidomat" type="text" class="form-control @error('apellidopat') is-invalid @enderror" name="apellidomat" value="{{ old('apellidomat') }}" required autocomplete="apellidomat" autofocus>

                                @error('apellidopat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña:') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña:') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="flex-c-m tag-item size2 m-text2 bg3 hov1 trans-0-4">
                                    {{ __('Guardar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
