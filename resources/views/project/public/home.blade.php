@extends('layouts1.main')
@section('title', 'Home')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

@section('cont')
<body>
    <div class="container"></div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        
    </ul>

    <!-- Slides -->
    <!--<div class="carousel-inner container box"> -->
    <div class="carousel-inner box">
        <div class="carousel-item active">
            <img src="css/salon_image/4.jpg" >
            
        </div>
        <div class="carousel-item  box">
            <img src="css/salon_image/chair.jpg" >
            
        </div>
        <div class="carousel-item  box">
            <img src="css/salon_image/hair_styling_resize.jpg" >
            
        </div>
        <!--<div class="carousel-item  box">
            <img src="css/salon_image/tattoo.jpg" >
            
        </div>-->
        <div class="carousel-item  box">
            <img src="css/salon_image/bride.jpg" >
            
        </div>
        <!-- Add more slides as needed -->
    </div>

    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>

<div class="container">
    <div class="row justify-content-left">
        <div class="col-12">
            <div class="mt-5">
                <h1 class="h1">Where Beauty Blossoms</h1>
                <p class="text-justify lead">Welcome to our salon, where beauty blossoms. We are dedicated to making you look and feel your best. Our team of skilled stylists and beauty professionals is here to pamper you and bring out your natural beauty. Whether you're looking for a new hairstyle, makeup, or any other beauty treatment, we've got you covered.</p>

                <h1 class="h1">Booking Made Easy</h1> 
                    <p class="text-justify lead">At Salon Yaara, we believe in convenience and flexibility. That's why we offer you the ease of online booking. With just a few clicks, you can secure your next beauty or wellness appointment, all from the comfort of your home or on the go.</p>

                <h3 class="h2">Why Choose Online Booking?</h3>

                <p class="lead text-justify">
                <span class="font-weight-bolder">24/7 Availability:</span> Our booking system is always open, allowing you to schedule your appointments at any time that suits you, even outside of our business hours.
                </p>


                <p class="lead text-justify">
                <span class="font-weight-bolder">No More Waiting:</span> Say goodbye to waiting on hold or in line. You can view real-time availability and book instantly, ensuring you get the time slot you desire.
                </p>

                <p class="lead text-justify">
                <span class="font-weight-bolder">Easy Rescheduling:</span> Life can be unpredictable, and we understand that. If your plans change, rescheduling is hassle-free through our online portal.
                </p>

                <h3 class="h3">How to Get Started</h3>

                <p class="text-justify lead">Booking online is simple. Just click the "Book Now" button, select your preferred service, choose a date and time, and you're all set! Our skilled professionals are ready to provide you with top-notch services, whether it's a haircut, facial, massage, or any other treatment.</p>

                <p class="text-justify lead">Join the countless clients who have discovered the convenience of online booking at Salon Yaara. It's time to take control of your schedule and indulge in the beauty and wellness treatments you deserve.</p>

                <p class="text-justify lead">Ready to experience the future of salon booking? Start by clicking "Book Now" and treat yourself to a pampering experience like no other.</p>


            </div>
        </div>
    </div>
</div>



<script>
$(document).ready(function() {
    // Activate the carousel
    $("#myCarousel").carousel();
    
    // Auto cycle the carousel every 3 seconds (3000 milliseconds)
    setInterval(function() {
        $("#myCarousel").carousel("next");
    }, 3000);
});
</script>

    

</body>
</html>