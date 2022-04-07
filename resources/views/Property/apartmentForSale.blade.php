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

      .fixed-nav-bar1 {
      overflow: hidden;
      position: fixed; /* Set the navbar to fixed position */
      top: 0; /* Position the navbar at the top of the page */
      width: 100%; /* Full width */
      height: 100px;
      align-content: right;
      z-index: 9999;
      background-color: rgb(14, 13, 13) 
      }

      .bckgrnd {
        background-color: #e7e7e7;
      }

    </style>


    <!-- Custom styles for this template -->
	<link href="sticky-footer-navbar.css" rel="stylesheet">
	
  </head>
  <body class="d-flex flex-column h-100 bckgrnd">
    <!--Nav bar begins here-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-nav-bar1">

      <a class="navbar-brand" style="padding: 30px" href="/Home"><img src="/images/Logo.jpg" alt="" width="70px" height="70px"></a>
      
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown" style="padding-right: 100px">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#" style="color: darkgoldenrod">Apartments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('showLandsForSale')}}">Lands</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('showContactUS')}}">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('addRegistration')}}">List Your Property</a>
          </li>
        </ul>
      </div>
    </nav>
    <!--Nav bar ends here-->


    <div class="container pb-5">

      <p style="font-size: 25px; font-family:Verdana; text-align: left; padding: 160px 0px 25px 0px;" >For Sale</p>

      <div class="row">

        <div class="col-sm-4">
          <div class="card" style="width: 100%; height: 100%">
              <img class="card-img-top" src="/images/webaliser-_TPTXZd9mOo-unsplash.jpg" alt="" height="100%">
              <div class="card-body pt-3 pl-3" >
                <h5 class="card-title pt-3 pb-3">Unique 4 bed townhomes at Cantonments</h5>
                <h6 class="card-subtitle mb-2 text-muted pt-3 pb-3">This property is an elegant townhouse residential development located in…</h6>
                <p style="margin-bottom: 1px; font-family:Lucida Sans; font-size:13px">Bedrooms</p>
                <p style="font-family:Lucida Sans; font-size:13px"><img src="/images/bed.jpg" alt="" width="35px" height="35px" style="margin: 0px 17px 0px 13px">3</p>
                <p style="margin-bottom: 1px; font-family:Lucida Sans;font-size:13px">Bathrooms</p>
                <p style="font-family:sans-serif; font-size:13px"><img src="/images/bath.jpg" alt="" width="35px" height="35px" style="margin: 0px 16px 0px 16px">3</p>
                <p style="margin-bottom: 1px;font-family:Lucida Sans; font-size:13px">For Sale</p>
                <p style="font-family: Lucida Sans; font-size:25px; font: bold">&cent;102,000</p>
                <button type="submit" class="btn btn-sm btn-primary"><a class="nav-link text-white" href="{{route('showOneProperty')}}">View Property</a></button>
              </div>
            </div>
        </div>        

        <div class="col-sm-4">
          <div class="card" style="width: 100%; height: 100%">
              <img class="card-img-top" src="/images/ralph-ravi-kayden-2d4lAQAlbDA-unsplash.jpg" alt="" height="100%">
              <div class="card-body pt-3 pl-3" action="{{route('showOneProperty')}}" method="POST">
                <h5 class="card-title pt-3 pb-3">4 bedroom townhomes at East Legon Hills</h5>
                <h6 class="card-subtitle mb-2 text-muted pb-3">This property is an elegant townhouse residential development located in…</h6>
                <p style="margin-bottom: 1px; font-family:Lucida Sans;font-size:13px">Bedrooms</p>
                <p style="font-family:Lucida Sans; font-size:13px"><img src="/images/bed.jpg" alt="" width="35px" height="35px" style="margin: 0px 17px 0px 13px">3</p>
                <p style="margin-bottom: 1px; font-family:Lucida Sans;font-size:13px">Bathrooms</p>
                <p style="font-family:Lucida Sans; font-size:13px"><img src="/images/bath.jpg" alt="" width="35px" height="35px" style="margin: 0px 16px 0px 16px">3</p>
                <p style="margin-bottom: 1px;font-family:Lucida Sans; font-size:13px">For Sale</p>
                <p style="font-family:Lucida Sans; font-size:25px; font: bold">&cent;320,000</p>
                <button type="submit" class="btn btn-sm btn-primary"><a class="nav-link text-white" href="{{route('showOneProperty')}}">View Property</a></button>
              </div>
            </div>
        </div>

        <div class="col-sm-4">
          <div class="card" style="width: 100%; height: 100%">
              <img class="card-img-top" src="/images/r-architecture-Y8MJFQYYjh8-unsplash.jpg" alt="" height="100%">
              <div class="card-body pt-3 pl-3" action="{{route('showOneProperty')}}" method="POST">
                <h5 class="card-title pt-3 pb-3">3 bed townhomes at Tse Addo</h5>
                <h6 class="card-subtitle mb-2 text-muted pb-3">This property is an elegant townhouse residential development located in…</h6>
                <p style="margin-bottom: 1px; font-family:Lucida Sans;font-size:13px">Bedrooms</p>
                <p style="font-family:Lucida Sans; font-size:13px"><img src="/images/bed.jpg" alt="" width="35px" height="35px" style="margin: 0px 17px 0px 13px">3</p>
                <p style="margin-bottom: 1px; font-family:Lucida Sans;font-size:13px">Bathrooms</p>
                <p style="font-family:Lucida Sans; font-size:13px"><img src="/images/bath.jpg" alt="" width="35px" height="35px" style="margin: 0px 16px 0px 16px">3</p>
                <p style="margin-bottom: 1px;font-family:Lucida Sans; font-size:13px">For Sale</p>
                <p style="font-family:Lucida Sans; font-size:25px; font: bold">&cent;128,000</p>
                <button type="submit" class="btn btn-sm btn-primary"><a class="nav-link text-white" href="{{route('showOneProperty')}}">View Property</a></button>
              </div>
            </div>
        </div>
      </div>
    </div>

    <div class="container pt-5" style="padding-bottom:100px">
      <div class="row">
        <div class="col-sm-4">
          <div class="card" style="width: 100%; height: 100%">
              <img class="card-img-top" src="/images/florian-schmidinger-b_79nOqf95I-unsplash.jpg" alt="" height="100%">
              <div class="card-body pt-3 pl-3" action="{{route('showOneProperty')}}" method="POST">
                <h5 class="card-title pt-3 pb-3" style="padding: 5px 5px 5px 5px">10 bedroom Villa for sale at Haatso</h5>
                <h6 class="card-subtitle mb-2 text-muted pb-3">This property is an elegant townhouse residential development located in…</h6>
                <p style="margin-bottom: 1px; font-family:Lucida Sans;font-size:13px">Bedrooms</p>
                <p style="font-family:Lucida Sans; font-size:13px"><img src="/images/bed.jpg" alt="" width="35px" height="35px" style="margin: 0px 17px 0px 13px">3</p>
                <p style="margin-bottom: 1px; font-family:Lucida Sans;font-size:13px">Bathrooms</p>
                <p style="font-family:Lucida Sans; font-size:13px"><img src="/images/bath.jpg" alt="" width="35px" height="35px" style="margin: 0px 16px 0px 16px">3</p>
                <p style="margin-bottom: 1px;font-family:Lucida Sans; font-size:13px">For Sale</p>
                <p style="font-family:Lucida Sans; font-size:25px; font: bold">&cent;89,000</p>
                <button type="submit" class="btn btn-sm btn-primary"><a class="nav-link text-white" href="{{route('showOneProperty')}}">View Property</a></button>
              </div>
            </div>
        </div>        

        <div class="col-sm-4">
          <div class="card" style="width: 100%; height: 100%">
              <img class="card-img-top" src="/images/r-architecture-0tKCSyLXqQM-unsplash.jpg" alt="" height="100%">
              <div class="card-body pt-3 pl-3" action="{{route('showOneProperty')}}" method="POST">
                <h5 class="card-title pt-3 pb-3">Modern 5 bedroom villa for sale at Oyarifa</h5>
                <h6 class="card-subtitle mb-2 text-muted pb-3">This property is an elegant townhouse residential development located in…</h6>
                <p style="margin-bottom: 1px; font-family:Lucida Sans;font-size:13px">Bedrooms</p>
                <p style="font-family:Lucida Sans; font-size:13px"><img src="/images/bed.jpg" alt="" width="35px" height="35px" style="margin: 0px 17px 0px 13px">3</p>
                <p style="margin-bottom: 1px; font-family:Lucida Sans;font-size:13px">Bathrooms</p>
                <p style="font-family:Lucida Sans; font-size:13px"><img src="/images/bath.jpg" alt="" width="35px" height="35px" style="margin: 0px 16px 0px 16px">3</p>
                <p style="margin-bottom: 1px;font-family:Lucida Sans; font-size:13px">For Sale</p>
                <p style="font-family:Lucida Sans; font-size:25px; font: bold">&cent;100,500</p>
                <button type="submit" class="btn btn-sm btn-primary"><a class="nav-link text-white" href="{{route('showOneProperty')}}">View Property</a></button>
              </div>
            </div>
        </div>

        <div class="col-sm-4">
          <div class="card" style="width: 100%; height: 100%">
              <img class="card-img-top" src="/images/r-architecture-Y8MJFQYYjh8-unsplash.jpg" alt="" height="100%">
              <div class="card-body pt-3 pl-3" action="{{route('showOneProperty')}}" method="POST">
                <h5 class="card-title pt-3 pb-3">Modern Semi Detached Townhouses For Sale at Tema</h5>
                <h6 class="card-subtitle mb-2 text-muted pb-3">This property is an elegant townhouse residential development located in…</h6>
                <p style="margin-bottom: 1px; font-family:Lucida Sans;font-size:13px">Bedrooms</p>
                <p style="font-family:Lucida Sans; font-size:13px"><img src="/images/bed.jpg" alt="" width="35px" height="35px" style="margin: 0px 17px 0px 13px">3</p>
                <p style="margin-bottom: 1px; font-family:Lucida Sans;font-size:13px">Bathrooms</p>
                <p style="font-family:Lucida Sans; font-size:13px"><img src="/images/bath.jpg" alt="" width="35px" height="35px" style="margin: 0px 16px 0px 16px">3</p>
                <p style="margin-bottom: 1px;font-family:Lucida Sans; font-size:13px">For Sale</p>
                <p style="font-family:Lucida Sans; font-size:25px; font: bold">&cent;150,000</p>
                <button type="submit" class="btn btn-sm btn-primary"><a class="nav-link text-white" href="{{route('showOneProperty')}}">View Property</a></button>
              </div>
            </div>
        </div>

      </div>
    </div>


    <br>


    <div class="container-fluid pt-5 pb-5" style="background-color: black;">
        <p style="text-decoration-color: #fffbfb">Buy Lands</p>
        <p style="text-decoration-color: #fffbfb">Contact Us</p>
        <p style="text-decoration-color: #fffbfb">Register to Sell</p>
        <br><br>
        <p>Copyright ©2022 G4 Real Apartments, All rights reserved</p>
    </div>  
  
  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

