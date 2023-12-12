@extends('layouts1.main')
@section('title', 'About')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="{{ asset('css/about/About.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    <body class="class">

        <nav >
            <div class="container-fluid mt-3">
                <a class="navbar-brand" href="#">
                    <!--<img src="{{ asset('css/about/logo.jpg') }}" alt="Logo" width="100" height="60" class="d-inline-block align-text-top">-->
                </a>
            </div>
        </nav> 
         <!-- nev bar -->

            <div class="container">
                <div class="row">
                    <div class="col-12 ">
                        <h1 class="header">About</h1>

                        
                    </div>
                </div>
            </div>  <!-- // row header -->

            <div class="container mt-3">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 square">
                        <h5 class="header1 mt-4">
                            Welcome to saloon AB
                            <p class="para" class="text-center">we believe that everyone deserves to look and feel their best. Our dedicated team of skilled stylists and beauty professionals is here to pamper you and bring out your natural beauty.</p>
                        </h5>

                        <h5 class="header1 mt-4">
                            Aim
                            <p class="para">to be the premier destination for buety and wellness,offering personalized services that empower our clients to look and feel their best</p>
                        </h5>

                        <h5 class="header1 mt-4">
                            Vision
                            <p class="para">Empowering beauty, Elivating confidence</p>
                        </h5>

                        <h5 class="header1 mt-4" >
                            Certification
                            <p class="para">certified skincare spesialized</p>
                            <p class="para">Proffetional makeup certification</p>
                        </h5>
                    </div>  <!--// introductin -->

                    
                    

                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3 mt-5 ">
                        <img src="{{ asset('css/about/About3.jpg') }}" alt="About" width="300px" height="600px" class="mx-auto d-block img-fluid">
                    </div>   <!-- saloon picture -->

                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-3 mt-3">
                    
                        <img src="{{ asset('css/about/About.jpg') }}" alt="About" width="400px" height="600px"  class="mx-auto d-block img-fluid">
                    </div> <!-- certification picture -->

                </div>
            </div>



            <div class="container mt-4">
                <div class="row">

                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-2 mt-2">
                        <img src="{{ asset('css/about/Facebook.png') }}" alt="About" width="130px" height="130px"  class="mx-auto d-block img-fluid">
                    </div>

                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-2 mt-2">
                        <img src="{{ asset('css/about/Instagram.jpg') }}" alt="About" width="75px" height="75px"  class="mx-auto d-block img-fluid">
                    </div>

                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-2 mt-2 ">
                        <img src="{{ asset('css/about/Whatsapp.jpg') }}" alt="About" width="75px" height="75px"  class="mx-auto d-block img-fluid">
                    </div>

                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-6 mt-2">
                        <h4 class="header2">
                            Contact Infomation :-
                            <p class="para1">0712746200</p>
                            <p class="para1">anomabalage630@gmail.com</p>
                        <h4>
                    </div>
                </div>
            </div>


            

        
    </body>
    <script src="stylesheet" href="{{ asset('css/bootstrap.js') }}"></script>
    <script src="stylesheet" href="{{ asset('css/bootstrap.min.js') }}"></script>

</html>