@extends('layouts1.main')
@section('title', 'Services')
<!DOCTYPE html>
<html lan="en">
    <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/service.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    </head>
    <body class="body">
    
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <nav class="nav1">
        <div id="div1 w3-bar-block">
        
        </div>
    </nav>

    <!-- <nav class="nav1">
        <div id="div1 w3-bar-block">
        <form style="padding-left:5%; padding-right:5%">
            <button class="btn btn-dark w3-bar-item w3-button w3-mobile" type="button" style="width:16%; height: auto; color:	white; padding: 15px 32px; font-size: 15px; margin: 2px 5px;"><a href="#">Home</a></button>
            <button class="btn btn-dark w3-bar-item w3-button w3-mobile" type="button" style="width:16%; color:	white; padding: 15px 32px; font-size: 15px; margin: 2px 4px;"><a href="/About">About</a></button>
            <button class="btn btn-dark w3-bar-item w3-button w3-mobile" type="button" style="width:16%; color:	white; padding: 15px 32px; font-size: 15px; margin: 2px 4px;"><a href="/Services">Services</a></button>
            <button class="btn btn-dark w3-bar-item w3-button w3-mobile" type="button" style="width:16%; color:	white; padding: 15px 32px; font-size: 15px; margin: 2px 4px;"><a href="/Gallery">Gellery</a></button>
            <button class="btn btn-dark w3-bar-item w3-button w3-mobile" type="button" style="width:16%; color:	white; padding: 15px 32px; font-size: 15px; margin: 2px 4px;"><a href="/Product">Product</a></button>
            <button class="btn btn-dark w3-bar-item w3-button w3-mobile" type="button" style="width:16%; color:	white; padding: 15px 32px; font-size: 15px; margin: 2px 4px"><a href="/Rent">Rent</a></button>
        </form>
        </div>
    </nav> -->

    <div class="services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h1>Our Services</h1>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div id="ho_shad" class="services_box text_align_left">
                     <h3>Hair</h3>
                     <figure><img src="css/hair2.jpg" alt="..."></figure>
                     <ul class="card-text">
                          <li>Haircuts and styling</li>
                          <li>Hair Coloring and Highlight</li>
                          <li>Hair Extensions</li>
                          <li>Hair Treatment</li>
                          <li>Perms and Relaxers</li>
                          <li>Updos and Special Occasion Hairstyles</li>
                      </ul>
                      <!--<a class="read_more" href="service.html">Read More</a>-->
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="ho_shad" class="services_box text_align_left">
                     <h3>Skin Care</h3>
                     <figure><img src="css/skincare.jpg" style="height:50%" alt="..."></figure>
                     <ul class="card-text">
                                <li>Facials</li>
                                <li>Skin Treatments</li>
                                <li>Waxing and Threading</li>
                                <li>Eyebrows and Eyelash Tinting</li>
                     </ul>
                     <!--<a class="read_more" href="service.html">Read More</a>-->
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="ho_shad" class="services_box text_align_left">
                     <h3>Product</h3>
                     <figure><img src="css/product1.jpg" style="height:50%" alt="..."></figure>
                     <ul class="card-text">
                                <li>Haircare Products</li>
                                <li>Skincare Products</li>
                                <li>Nail care Products</li>
                                <li>Beauty Products</li>
                                <li>Health and Wellness Products</li>
                      </ul>
                      <!--<a class="read_more" href="service.html">Read More</a>-->
                  </div>
               </div>
            </div>
      </div>

      <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div id="ho_shad" class="services_box text_align_left">
                     <h3>Dressing</h3>
                     <figure><img src="css/dress1.jpg" alt="..." style="height:50%"></figure>
                     <ul class="card-text">
                          <li>Bridal Dressing</li>
                          <li>Normal Dressing</li>
                          </ul>
                      <!--<a class="read_more" href="service.html">Read More</a>-->
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="ho_shad" class="services_box text_align_left">
                     <h3>Makeup</h3>
                     <figure><img src="css/makeup2.jpg" style="height:50%" alt="..."></figure>
                     <ul class="card-text">
                                <li>Makeup Application(Bridal & Normal)</li>
                                <li>Makeup Lessons & Consultation</li>
                     </ul>
                     <!--<a class="read_more" href="service.html">Read More</a>-->
                  </div>
               </div>
               <div class="col-md-4">
                  <div id="ho_shad" class="services_box text_align_left">
                     <h3>Nails</h3>
                     <figure><img src="css/nail2.jpg" style="height:50%" alt="..."></figure>
                     <ul class="card-text">
                                <li>Manicure</li>
                                <li>Pedicure</li>
                                <li>Nail Designs</li>
                                <li>Overlays & Extensions</li>
                                </ul>
                      <!--<a class="read_more" href="service.html">Read More</a>-->
                  </div>
               </div>
            </div>
      </div>
    </div>      
  </body>
</html>