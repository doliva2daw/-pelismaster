@extends('layouts.master')
@section('main')
<section class="py-5 text-center container" id="section1">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-dark">
                @auth
                Hola de nuevo {{Auth::user()->name}}
                @else
                ¡Descubre nuestro catalogo!
                @endauth
            </h1>
            <p class="lead text-muted">Te estabamos esperando, a continuacion te muestro algunas peliculas que pueden ser de tu interes. ¡Esperamos que te gusten!</p>
        </div>
    </div>
</section>

@include('layouts.video')
@include('layouts.footer')
@parent
@stop
