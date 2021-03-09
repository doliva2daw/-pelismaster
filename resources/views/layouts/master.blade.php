<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>PelisMaster</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type='text/css'>
    <link rel="stylesheet" href="{{asset('css/mi.css')}}" type='text/css'>


</head>

<body>

    <header>
        <!--<div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>-->
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="/" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2"
                        viewBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                        <circle cx="12" cy="13" r="4" /></svg>
                    <strong>PelisMaster</strong>
                </a>
                <div id="nav">
                    @auth 
                    <a href="{{route('profile')}}" class="navbar-brand">{{Auth::user()->name}}</a>
                    @if($user[0]->role_id==4)
                    <a href="{{route('new')}}" class="navbar-brand">Añadir</a>
                    @elseif($user[0]->role_id==3)
                    <a href="{{route('new')}}" class="navbar-brand">Añadir</a>
                    @elseif($user[0]->role_id==2)
                    <a href="" class="navbar-brand">Valoraciones</a>
                    @elseif($user[0]->role_id==1)
                    <a href="{{route('profile')}}" class="navbar-brand">Pasate a prime</a>
                    @endif
                    <a href="javascript: document.getElementById('logout').submit()" class="btn btn-danger my-1">Cerrar sesion</a>
                    <form action="{{ route('logout')}} " id="logout" style="display:none" method="post"> 
                    @csrf 
                    @else 
                    <a href="{{ route('login') }}" class="btn btn-primary my-2">Iniciar sesion</a> 
                    @if (Route::has('register')) 
                    <a href="{{ route('register') }}" class="btn btn-secondary my-2">Registrarse</a> 
                    @endif 
                    @endauth
                </div>
            </div>
        </div>
    </header>   

    <main>
    @section('main')
    
    @show    
    </main>

    
