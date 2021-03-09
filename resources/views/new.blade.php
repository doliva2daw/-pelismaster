@extends('layouts.master')
@section('main')
<section class="py-5 text-center container" id="section1">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-dark">
                @auth
                Añadir video
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
            <div class="card-header">{{ __('Datos del video') }}</div>

            <div class="card-body">
                <form method="POST" action="{{route('newvideo')}}">
                    @csrf
                    @method('POST')
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>

                        <div class="col-md-6">
                            <input id="title" type="text" placeholder="" class="form-control @error('name') is-invalid @enderror" name="title" value="" autofocus>

                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Enlace') }}</label>

                        <div class="col-md-6">
                            <input id="route" type="text" placeholder="" class="form-control @error('email') is-invalid @enderror" name="route" value="">

                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Descripcion') }}</label>

                        <div class="col-md-6">
                            <input id="description" type="text" class="form-control @error('password') is-invalid @enderror" name="description" >

                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Tiempo duracion') }}</label>

                        <div class="col-md-6">
                            <input id="time" type="text" class="form-control @error('password') is-invalid @enderror" name="time" >

                        </div>
                    </div><br>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Añadir') }}
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
