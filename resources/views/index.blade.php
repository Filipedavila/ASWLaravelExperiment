@extends('layouts.main')
@section('tittle', 'titulo da pagina')


@section('content')
    <div class="container-fluid ">
    <header class="row ">
        
    <div class="col "><h1><a href="#/register"><img src="img/header.png" height="80" width="150"> </a></h1></div>
    </header>
<nav class="navbar navbar-expand-md navbar-dark bg-primary bg-gradient ">
  <a class="navbar-brand" href=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link "btn btn-outline-light btn-floating m-1"  href="index.php?page=content">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Voluntários</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Instituições</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre nós</a>
      </li>
    
    </ul>
  </div>
</nav>
<article class="row mt-5">
    <div class="col ml-5">
        
    <h1>Index</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <div class="col">
        <div class="text-center">
            <img src="img/test.jpg" class="rounded" alt="..."height="350px">
          </div>
    </div>
    </article>
    @endsection