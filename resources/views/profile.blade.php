@extends('layouts.master')
@section('main')
<section class="py-5 text-center container" id="section1">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-dark">
                @auth
                Perfil
                @endauth
            </h1>
            <p class="lead text-muted">Edita tus datos ¡Te recomendamos que actualices a prime si aun no lo has hecho!</p>
        </div>
    </div>
</section>
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">{{ __('Tus Datos') }}</div>

            <div class="card-body">
                <form method="POST" action="{{route('updateprofile')}}">
                    @csrf
                    @method('POST')
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" placeholder="{{Auth::user()->name}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{Auth::user()->name}}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" placeholder="{{Auth::user()->email}}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{Auth::user()->email}}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div><br><br>

                    <div class="form-group row">
                        <div class="col-md-6">
                            {{ __('Actualiza tu contraseña') }}
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña Actual') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="lastpassword" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Nueva contraseña') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div><br><br>

                    <div class="form-group row">
                    <label for="prime" class="col-md-4 col-form-label text-md-right">Actualiza tu plan</label>
                        <div class="col-md-6">
                            <strong>@if($user[0]->role_id==4)
                            {{ __('Tu plan actual es Admin') }}
                            @elseif($user[0]->role_id==3)
                            {{ __('Tu plan actual es Autor') }}
                            @elseif($user[0]->role_id==2)
                            {{ __('Tu plan actual es Prime') }}
                            @elseif($user[0]->role_id==1)
                            {{ __('Tu plan actual es Autor') }}
                            @endif</strong>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="prime" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                        <div class="col-md-6">
                            <input type="radio" id="prime" name="role" value="1">{{ __('   Invitado (Recibe nuestras novedades) Gratis') }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="prime" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                        <div class="col-md-6">
                            <input type="radio" id="prime" name="role" value="2">{{ __('   Prime (Disfruta de todo el contenido) 9,99€/mes') }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="editor" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                        <div class="col-md-6">
                            <input type="radio" id="editor" name="role" value="3">{{ __('   Autor (Sube tu contenido e ingresa) 50€/mes') }}
                        </div>
                    </div><br>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Actualizar') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@include('layouts.footer')
@parent
