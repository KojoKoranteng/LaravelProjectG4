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

      .fixed-nav-bar {
      overflow: hidden;
      position: fixed; /* Set the navbar to fixed position */
      top: 0; /* Position the navbar at the top of the page */
      width: 100%; /* Full width */
      height: 100px;
      align-content: right;
      z-index: 9999;
      }

      .bckgrnd {
        background-color: #f1f1f1;
      }

      .backimg{
        background: linear-gradient(rgba(0,0,0,0),rgba(1,1,1,1)),url(/images/flagstaff.jpg);
        /* background: url(/images/flagstaff.jpg); */
        height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
      }
      nav.black{
        background: #000;
      }

    </style>


    <!-- Custom styles for this template -->
	<link href="sticky-footer-navbar.css" rel="stylesheet">
	
  </head>
  <body class="d-flex flex-column h-100 bckgrnd">
    <!--Nav bar begins here-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-nav-bar">

      <a class="navbar-brand" style="padding: 30px" href="#"><img class="rounded-right" src="/images/Logo.jpg" alt="" width="70px" height="70px"></a>
      <!-- Example single danger button -->
      <div class="btn-group">
        {{-- <button type="button" class="btn dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admin
        </button> --}}
        <button type="button" class="btn">
          <span class="glyphicon glyphicon-cog"></span><span class="caret">Admin</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="\addPropertyForm">Add Properties</a>
          <a class="dropdown-item" href="propertyList">Manage Properties</a>
        </div>
      </div>
      
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown" style="padding-right: 100px">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="{{route('showApartmentsForSale')}}">Apartments</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-white" href="{{route('showLandsForSale')}}">Lands</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="">About Us</a>
          </li>
          {{-- <li class="nav-item"> 
            <a class="nav-link text-white" href="#">Admin</a>
          </li> --}}
        </ul>
      </div>
    </nav>
    <!--Nav bar ends here-->

    <div>
      <img src="/images/fabian-kuhne-eksdFRXS28s-unsplash.jpg" alt="background image" width="100%" height="100%">
    </div>

    <div class="container" style="padding-top: 100px">
      <div class="row">
        
        <div class="col-sm-4">
          <div class="card starter_card" style="width:100%; height: 80%">
            <img src="/images/hutomo-abrianto-X5BWooeO4Cw-unsplash.jpg" alt="" height="100%">  
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card starter_card" style="width: 100%; height: 80%">
             <img src="/images/jason-briscoe-AQl-J19ocWE-unsplash.jpg" alt="" height="100%"> 
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card starter_card" style="width: 100%; height: 80%">
              <img src="/images/collov-home-design-H-1j_s0dhCw-unsplash.jpg" alt="" height="100%">
          </div>
        </div>

      </div>
    </div>

    <div class="container-fluid" style="padding-left: 50px">
      <p><h3>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo doloremque mollitia, exercitationem tenetur dolor odio nisi vitae. 
        Dolores, sed tenetur unde veritatis blanditiis necessitatibus maxime! Maxime ipsam optio soluta nihil?</h3></p>
    </div>

    <div class="container pb-5">

      <p style="font-size: 25px; font-family:Verdana; text-align: center; padding: 100px 0px 50px;" >Features Apartments</p>

      <div class="row">

        <div class="col-sm-4">
          <div class="card" style="width: 100%; height: 100%">
            <a href="{{route('showOneProperty')}}">
              <img class="card-img-top" src="/images/webaliser-_TPTXZd9mOo-unsplash.jpg" alt="" height="100%">
            </a>  
              <div class="card-body pt-3 pl-3">
                <h5 class="card-title pt-3 pb-3">Unique 4 bed townhomes at Cantonments</h5>
                <h6 class="card-subtitle mb-2 text-muted pt-3 pb-3">This property is an elegant townhouse residential development located in…</h6>
                <p style="margin-bottom: 1px; font-family: sans-serif;font-size:13px">Bedrooms</p>
                <p style="font-family: sans-serif; font-size:13px"><img src="/images/bed.jpg" alt="" width="35px" height="35px" style="margin: 0px 17px 0px 13px">3</p>
                <p style="margin-bottom: 1px; font-family:sans-serif;font-size:13px">Bathrooms</p>
                <p style="font-family:sans-serif; font-size:13px"><img src="/images/bath.jpg" alt="" width="35px" height="35px" style="margin: 0px 16px 0px 16px">3</p>
                <p style="margin-bottom: 1px;font-family:sans-serif; font-size:13px">For Sale</p>
                <p style="font-family: sans-serif; font-size:25px; font: bold">&cent;102,000</p>
               {{-- <button type="submit" class="btn btn-sm btn-primary">View Property</button> --}}
              </div>
            </div>
        </div>        

        <div class="col-sm-4">
          <div class="card" style="width: 100%; height: 100%">
            <a href="{{route('showOneProperty')}}">
              <img class="card-img-top" src="/images/ralph-ravi-kayden-2d4lAQAlbDA-unsplash.jpg" alt="" height="100%">
            </a> 
              <div class="card-body pt-3 pl-3">
                <h5 class="card-title pt-3 pb-3">4 bedroom townhomes at East Legon Hills</h5>
                <h6 class="card-subtitle mb-2 text-muted pb-3">This property is an elegant townhouse residential development located in…</h6>
                <p style="margin-bottom: 1px; font-family: sans-serif;font-size:13px">Bedrooms</p>
                <p style="font-family: sans-serif; font-size:13px"><img src="/images/bed.jpg" alt="" width="35px" height="35px" style="margin: 0px 17px 0px 13px">3</p>
                <p style="margin-bottom: 1px; font-family:sans-serif;font-size:13px">Bathrooms</p>
                <p style="font-family:sans-serif; font-size:13px"><img src="/images/bath.jpg" alt="" width="35px" height="35px" style="margin: 0px 16px 0px 16px">3</p>
                <p style="margin-bottom: 1px;font-family:sans-serif; font-size:13px">For Sale</p>
                <p style="font-family: sans-serif; font-size:25px; font: bold">&cent;320,000</p>
                {{-- <button type="submit" class="btn btn-sm btn-primary">View Property</button> --}}
              </div>
            </div>
        </div>

        <div class="col-sm-4">
          <div class="card" style="width: 100%; height: 100%">
          <a href="{{route('showOneProperty')}}">
              <img class="card-img-top" src="/images/r-architecture-Y8MJFQYYjh8-unsplash.jpg" alt="" height="100%">
          </a>    
              <div class="card-body pt-3 pl-3">
                <h5 class="card-title pt-3 pb-3">3 bed townhomes at Tse Addo</h5>
                <h6 class="card-subtitle mb-2 text-muted pb-3">This property is an elegant townhouse residential development located in…</h6>
                <p style="margin-bottom: 1px; font-family: sans-serif;font-size:13px">Bedrooms</p>
                <p style="font-family: sans-serif; font-size:13px"><img src="/images/bed.jpg" alt="" width="35px" height="35px" style="margin: 0px 17px 0px 13px">3</p>
                <p style="margin-bottom: 1px; font-family:sans-serif;font-size:13px">Bathrooms</p>
                <p style="font-family:sans-serif; font-size:13px"><img src="/images/bath.jpg" alt="" width="35px" height="35px" style="margin: 0px 16px 0px 16px">3</p>
                <p style="margin-bottom: 1px;font-family:sans-serif; font-size:13px">For Sale</p>
                <p style="font-family: sans-serif; font-size:25px; font: bold">&cent;128,000</p>
                {{-- <button type="submit" class="btn btn-sm btn-primary">View Property</button> --}}
              </div>
            </div>
        </div>
      </div>
    </div>

    <div class="container pt-5">
      <div class="row">
        <div class="col-sm-4">
          <div class="card" style="width: 100%; height: 100%">
            <a href="{{route('showOneProperty')}}">  
              <img class="card-img-top" src="/images/florian-schmidinger-b_79nOqf95I-unsplash.jpg" alt="" height="100%">
            </a>  
              <div class="card-body pt-3 pl-3">
                <h5 class="card-title pt-3 pb-3" style="padding: 5px 5px 5px 5px">10 bedroom Villa for sale at Haatso</h5>
                <h6 class="card-subtitle mb-2 text-muted pb-3">This property is an elegant townhouse residential development located in…</h6>
                <p style="margin-bottom: 1px; font-family: sans-serif;font-size:13px">Bedrooms</p>
                <p style="font-family: sans-serif; font-size:13px"><img src="/images/bed.jpg" alt="" width="35px" height="35px" style="margin: 0px 17px 0px 13px">3</p>
                <p style="margin-bottom: 1px; font-family:sans-serif;font-size:13px">Bathrooms</p>
                <p style="font-family:sans-serif; font-size:13px"><img src="/images/bath.jpg" alt="" width="35px" height="35px" style="margin: 0px 16px 0px 16px">3</p>
                <p style="margin-bottom: 1px;font-family:sans-serif; font-size:13px">For Sale</p>
                <p style="font-family: sans-serif; font-size:25px; font: bold">&cent;89,000</p>
                {{-- <button type="submit" class="btn btn-sm btn-primary">View Property</button> --}}
              </div>
            </div>
        </div>        

        <div class="col-sm-4">
          <div class="card" style="width: 100%; height: 100%">
            <a href="{{route('showOneProperty')}}">  
              <img class="card-img-top" src="/images/r-architecture-0tKCSyLXqQM-unsplash.jpg" alt="" height="100%">
            </a>  
              <div class="card-body pt-3 pl-3">
                <h5 class="card-title pt-3 pb-3">Modern 5 bedroom villa for sale at Oyarifa</h5>
                <h6 class="card-subtitle mb-2 text-muted pb-3">This property is an elegant townhouse residential development located in…</h6>
                <p style="margin-bottom: 1px; font-family: sans-serif;font-size:13px">Bedrooms</p>
                <p style="font-family: sans-serif; font-size:13px"><img src="/images/bed.jpg" alt="" width="35px" height="35px" style="margin: 0px 17px 0px 13px">3</p>
                <p style="margin-bottom: 1px; font-family:sans-serif;font-size:13px">Bathrooms</p>
                <p style="font-family:sans-serif; font-size:13px"><img src="/images/bath.jpg" alt="" width="35px" height="35px" style="margin: 0px 16px 0px 16px">3</p>
                <p style="margin-bottom: 1px;font-family:sans-serif; font-size:13px">For Sale</p>
                <p style="font-family: sans-serif; font-size:25px; font: bold">&cent;100,500</p>
                {{-- <button type="submit" class="btn btn-sm btn-primary">View Property</button> --}}
              </div>
            </div>
        </div>

        <div class="col-sm-4">
          <div class="card" style="width: 100%; height: 100%">
            <a href="{{route('showOneProperty')}}">  
              <img class="card-img-top" src="/images/r-architecture-Y8MJFQYYjh8-unsplash.jpg" alt="" height="100%">
            </a>  
              <div class="card-body pt-3 pl-3">
                <h5 class="card-title pt-3 pb-3">Modern Semi Detached Townhouses For Sale at Tema</h5>
                <h6 class="card-subtitle mb-2 text-muted pb-3">This property is an elegant townhouse residential development located in…</h6>
                <p style="margin-bottom: 1px; font-family: sans-serif;font-size:13px">Bedrooms</p>
                <p style="font-family: sans-serif; font-size:13px"><img src="/images/bed.jpg" alt="" width="35px" height="35px" style="margin: 0px 17px 0px 13px">3</p>
                <p style="margin-bottom: 1px; font-family:sans-serif;font-size:13px">Bathrooms</p>
                <p style="font-family:sans-serif; font-size:13px"><img src="/images/bath.jpg" alt="" width="35px" height="35px" style="margin: 0px 16px 0px 16px">3</p>
                <p style="margin-bottom: 1px;font-family:sans-serif; font-size:13px">For Sale</p>
                <p style="font-family: sans-serif; font-size:25px; font: bold">&cent;150,000</p>
                {{-- <button type="submit" class="btn btn-sm btn-primary">View Property</button> --}}
              </div>
            </div>
        </div>

      </div>
    </div>
    <br>
    <br>
    <div class="container-fluid pb-5" align ="center" style="background-color: black; height: 100%;">
        <div class="backimg">
          <p class="text-white" style="padding-top:250px; font-size:30px">Think Apartments, Think G4 Apartments</p>
        </div>
    </div>



    <div class="container-fluid pt-5 pb-5" style="background-color: rgb(214, 214, 214)">
        <p>Buy Apartments</p>
        <p>Buy Lands</p>
        <p>Contact Us</p>
        <p>Register to Sell</p>
        <br><br>
        <p>Copyright ©2022 G4 Real Apartments, All rights reserved</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>

      $(window).on("scroll",function(){
          if($(window).scrollTop()){
            $("nav").addClass("black");
          }
          else{
            $("nav").removeClass("black")
          }
      })

    </script>
  
  
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
