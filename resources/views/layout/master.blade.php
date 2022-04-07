<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title> @yield('page_title')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .container {
        margin: 3em auto;
        width: 100%;
        border: solid white 5px;
        border-radius: 30px;
        box-shadow: 5px 5px 25px rgba(0, 0, 0, 0.5);
        overflow: hidden;

      }
      .container .thumbnail {
        display: flex;
        flex-wrap: wrap;
        padding-left: 20px
      }
      .container .thumbnail .thumb {
        height: 200px;
        width: 200px;
        transition: all 0.2s;
        object-fit: cover;
        cursor: pointer;
      }
      .container .thumbnail .thumb:hover {
        box-shadow: 3px 3px 20px;
        opacity: 0.8;
      }
  
      .desc {
        position: relative;
        width: 600px;
        height: 400px;
        overflow: hidden;
     }
      .desc:hover .judul {
        transform: translateY(80px);
      }
      .desc:hover .title {
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.3) 30%, rgba(0, 0, 0, 0.3) 70%, rgba(0, 0, 0, 0.8) 100%);
        opacity: 1;
      }
      .desc:hover .text {
        transform: translateY(-150px);
      }
      .desc .prev {
        object-fit: cover;
        width: 600px;
        height: 400px;
        padding-left: 20px
      }
      .desc .title {
        margin: auto;
        overflow: hidden;
        width: 100%;
        height: 100%;
        position: absolute;
        transition: all 0.3s ease;
        opacity: 0;
        display: flex;
        flex-direction: column;
      }
      .desc .title .judul {
        color: white;
        padding: 20px;
        margin-top: -40px;
        transition: all 0.3s ease;
      }
      .desc .title .text {
        color: white;
        margin-top: 350px;
        padding: 20px;
        transition: all 0.35s ease 0.4s;
      }
  
      @keyframes fade {
        to {
          opacity: 1;
        }
      }
      .effect {
        opacity: 0;
        animation: fade 0.2s forwards;
      }
  
      .active {
        opacity: 0.5;
      }
      
    </style>


    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">

<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/Home" style="font:oblique; font-size:30px; font-family:Trebuchet MS">G4 Apartments</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/Home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('showContactUS')}}">Contact Us</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="#">G4 Apartments Global</a>
          </li>

        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container pt-5 mt-5">
        @yield('content')
  </div>
</main>

<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">Copyright© 2022 G4 Real Apartments, All rights reserved</span>
  </div>
</footer>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
