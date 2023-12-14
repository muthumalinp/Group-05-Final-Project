@extends('layouts1.main')
@section('title', 'About')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="{{ asset('css/about/About.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    <body>
        <div class="container mt-3">
            <div class="row">
                <!-- Header -->
                    <div class="col-12">
                        <h1 class="header">About</h1>
                    </div>

                    <!-- Introduction -->
                    <div class="col-12 col-lg-6">
                        <!-- Your introduction content here -->
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
                    </div>

                    <!-- Saloon Picture -->
                    <div class="col-12 col-lg-6">
                    <!-- Your saloon picture content here -->
                        <img src="{{ asset('css/about/About3.jpg') }}" alt="About" width="300px" height="600px" class="mx-auto d-block img-fluid">
                        
                    </div>

                    <!-- Certification Picture -->
                        <div class="col-12 col-lg-6">
                    <!-- Your certification picture content here -->
                        <img src="{{ asset('css/about/About.jpg') }}" alt="About" width="400px" height="600px"  class="mx-auto d-block img-fluid">
                    </div>

                    
            </div>
        </div>

    </body>
    <script src="stylesheet" href="{{ asset('css/bootstrap.js') }}"></script>
    <script src="stylesheet" href="{{ asset('css/bootstrap.min.js') }}"></script>

</html>