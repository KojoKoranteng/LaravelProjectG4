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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
            position: fixed;
            /* Set the navbar to fixed position */
            top: 0;
            /* Position the navbar at the top of the page */
            width: 100%;
            /* Full width */
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

        <a class="navbar-brand" style="padding: 30px" href="/Home"><img src="/images/Logo.jpg" alt="" width="70px"
                height="70px"></a>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown" style="padding-right: 100px">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="{{route('showApartmentsForSale')}}">Apartments</a>
                  </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color: darkgoldenrod">Lands</a>
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

    <form action="">
        <div class="container pb-5">

            <p style="font-size: 25px; font-family:Verdana; text-align: left; padding: 160px 0px 25px 0px;">Lands For Sale</p>
    
            <div class="row">
    
                <div class="col-sm-4">
                    <div class="card" style="width: 100%; height: 90%">
                        <img class="card-img-top" src="/images/land1.jpg" alt="" height="100%">
                        <div class="card-body pt-3 pl-3">
                            <h5 class="card-title pt-3 pb-3">2 acres of land at Ridge</h5>
                            <h6 class="card-subtitle mb-2 text-muted pt-3 pb-3">This property is at a residential development located in…</h6>
                            <p style="margin-bottom: 1px;font-family:Lucida Sans; font-size:13px">For Sale</p>
                            <p style="font-family: Lucida Sans; font-size:25px; font: bold">&cent;160,000</p>
                            <button type="submit" class="btn btn-sm btn-primary">Buy Property</button>
                        </div>
                    </div>
                </div>
    
                <div class="col-sm-4">
                    <div class="card" style="width: 100%; height: 90%">
                        <img class="card-img-top" src="/images/land2.jpg" alt="" height="100%">
                        <div class="card-body pt-3 pl-3">
                            <h5 class="card-title pt-3 pb-3">2 acres of land at East Legon</h5>
                            <h6 class="card-subtitle mb-2 text-muted pt-3 pb-3">This property is at a residential development located in…</h6>
                            <p style="margin-bottom: 1px;font-family:Lucida Sans; font-size:13px">For Sale</p>
                            <p style="font-family: Lucida Sans; font-size:25px; font: bold">&cent;152,000</p>
                            <button type="submit" class="btn btn-sm btn-primary">Buy Property</button>
                        </div>
                    </div>
                </div>
    
                <div class="col-sm-4">
                    <div class="card" style="width: 100%; height: 100%">
                        <img class="card-img-top" src="/images/land4.jpg" alt="" height="80%">
                        <div class="card-body pt-3 pl-3">
                            <h5 class="card-title pt-3 pb-3">2 acres of land at Cantonments</h5>
                            <h6 class="card-subtitle mb-2 text-muted pt-3 pb-3">TThis property is at a residential development located in…</h6>
                            <p style="margin-bottom: 1px;font-family:Lucida Sans; font-size:13px">For Sale</p>
                            <p style="font-family: Lucida Sans; font-size:25px; font: bold">&cent;132,000</p>
                            <button type="submit" class="btn btn-sm btn-primary">Buy Property</button>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>

    </form>
    
    <br>

    <div class="container-fluid pt-5 pb-5" style="background-color: black;">
        <p style="text-decoration-color: #fffbfb">For Sale</p>
        <p style="text-decoration-color: #fffbfb">For Rent</p>
        <p style="text-decoration-color: #fffbfb">Contact Us</p>
        <p style="text-decoration-color: #fffbfb">Register to Sell</p>
        <br><br>
        <p>Copyright ©2022 G4 Real Apartments, All rights reserved</p>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>
</body>

</html>