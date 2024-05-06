<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        @vite('resources/css/app.css')
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- Styles -->
        
    </head>
    <body class="antialiased">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <img src="{{ url('img/sos-rs.jpg') }}" width="70"  class="navbar-brand" alt="" srcset="">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Página Inicial</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('cadastroPessoa') }}">Cadastrar pessoa</a>
                      </li>
                      {{-- PARA ADICIONAR MAIS ITENS NO MENU UTILIZE O PADRAO ABAIXO

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Ação</a></li>
                          <li><a class="dropdown-item" href="#">Outra Ação</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Algo Mais Aqui</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Desativado</a>
                      </li> --}}

                    </ul>
                    <form class="d-flex ms-auto">
                      <input class="form-control me-2" type="search" placeholder="Pesquisar por nome" aria-label="Pesquisar">
                      <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                    </form>
                  </div>
                </div>
              </nav>
   
       