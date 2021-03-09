@extends('layouts.master')
@section('main')
<section class="py-5 text-center container" id="section1">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-dark">
                @auth
                Video
                @endauth
            </h1>
            <p class="lead text-muted">Edita tus datos ¡Te recomendamos que actualices a prime si aun no lo has hecho!</p>
        </div>
    </div>
</section>
<br><br>

@include('layouts.footer')
@parent
@stop