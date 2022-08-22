@extends('layouts.app')
@section('content')


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Prueba Diana</title>
  </head>
  <style>

    .nav{
        background:black;
    }


    .nav li{
        style="display:inline-block;margin-left:10%"
    }


  </style>
  <body>
    <nav class="navbar navbar-expand-lg bg-black" >
        <div class="container-fluid">
          <a class="navbar-brand" href="#"  style="color: aliceblue" >Prueba Tecnica</a>

          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/cliente" style="color: aliceblue;margin-left:10%" >Home</a>
              </li>
            </ul>
          </div>


          <a href="/articulos" class="font-semibold
          hover:bg-indigo-700 py-3 px-4 rounded-md">Modo Administrador</a>

          @if(auth()->check())

          <div style="margin-top: 1.5%">
            <p class="text-xl" style="color: antiquewhite">Bienvenido:  <b >{{ auth()->user()->name }}</b></p>
          </div>
        @else
        @endif

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif




                @else
                    <li class="nav-item dropdown">
                        <div >
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
      </nav>

      
    <div class="container">
        @yield('contenido')

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>

        @endsection
