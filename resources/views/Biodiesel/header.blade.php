<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ ( 'assets/css/style.css' )}}">
    
    <title>Web Aplication</title>
  </head>
  <style>
    .error{
     color: #FF0000; 
    }
  </style>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
  <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="" style="height: 90px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                    <button type="button" class="btn "><a class="nav-link" href="{{ route('login') }}">Login</a></button>
                    </li>
                @else
                    <li class="nav-item">
                    <button type="button" class="btn "><a class="nav-link" href="{{ route('logout') }}">Logout</a></button>
                    </li>
                @endguest
                            </ul>
  
  </div>
  </div> 
</nav>
