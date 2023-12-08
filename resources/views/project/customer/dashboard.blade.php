@extends('project.customer.layouts.main')
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
        <!-- <li data-target="#myCarousel" data-slide-to="5"></li> -->
        <!-- <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li> -->
        <!-- Add more indicators as needed -->
    </ul>

   


    <!-- Slides -->
    <div class="carousel-inner container box">
        <div class="carousel-item active">
            <img src="css/Home/1.jpg" >
        </div>
        <div class="carousel-item container box">
            <img src="css/Home/2.jpg" >
        </div>
        <!-- <div class="carousel-item container box">
            <img src="css/Home/3.jpg" >
        </div> -->
        <!-- <div class="carousel-item container box">
            <img src="css/Home/4.jpg" >
        </div> -->
        <div class="carousel-item container box">
            <img src="css/Home/5.jpg" >
        </div>
        <div class="carousel-item container box">
            <img src="css/Home/6.jpg" >
        </div>
        <div class="carousel-item container box">
            <img src="css/Home/7.jpg" >
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

    <!-- <nav>
    <div id="sign">
            <button type="button" data-toggle="collapse" data-target="#navbarCollaps" id="sign_box">
            <span>
                <div id="sign_text">
                <a href="/Register">Register</a>
                </div>
            </span>   
        </button>
        </div>

        <div id="sign">
            <button type="button" data-toggle="collapse" data-target="#navbarCollaps" id="sign_box">
            <span>
                <div id="sign_text">
                <a href="/LogIn">Log In</a>
                </div>
            </span>   
        </button>
        </div>
    </nav> -->
    <!-- <img src="{{ asset('css/home1.jpeg') }}" alt="Salon" class="pic"> -->

    <!-- <div class="foalt-image">
        <img src="/css/Home/15.jpg" id="m">
    </div> -->

    @if(Session::has('user_data'))
    <h1>Welcome, {{ Session::get('user_data')['fname'] }}!</h1>
    <p>Email: {{ Session::get('user_data')['email'] }}</p>
    <p>Role: {{ Session::get('user_data')['role'] }}</p>
    <!-- Add any other fields you want to display -->
@else
    <h1>Guest User</h1>
@endif

</body>
</html>