<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Yaara/@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    

</head>
<body id="k">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark  fixed-top" id="navbarcolor">
            <div class="container">
                <a class="navbar-brand" href="/Home">Salon Yaara</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item nav">
                            <a class="nav-link" href="/Home">Home</a>
                        </li>
                        <li class="nav-item nav">
                            <a class="nav-link" href="/About">About</a>
                        </li>
                        <li class="nav-item nav">
                            <a class="nav-link" href="/Services">Services</a>
                        </li>
                        <li class="nav-item nav">
                            <a class="nav-link" href="/Gallery">Gallery</a>
                        </li>
                        <li class="nav-item nav">
                            <a class="nav-link" href="/Product">Product</a>
                        </li>
                        <li class="nav-item nav">
                            <a class="nav-link" href="/Rent">Rent</a>
                        </li>
                        <li class="nav-item nav">
                            <a class="nav-link" href="/BookNow">Book Now</a>
                        </li>
                        <!-- <li class="nav-item nav ">
                            <a class="nav-link" href="/LogIn">LogIn</a>
                        </li>
                        <li class="nav-item nav">
                            <a class="nav-link" href="/Register">Register</a>
                        </li>                         -->
                        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                    <li class="nav-item nav">
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                      </li>
                    @else
                      <li class="nav-item nav">
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                      </li>
                      <li class="nav-item nav">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                      </li>
                        @endif
                    @endauth
                </div>
            @endif

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container py-10">
        @yield('cont')
    </div>

    <!-- Remove the container if you want to extend the Footer to full width. -->
<div class=" my-5">
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color:  #161717"
          >
    <!-- Grid container -->
    <div class=" p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Saloon Yaara
            </h6>
            <p>
            <i>we believe that everyone deserves to look and feel their best. Our dedicated team of skilled stylists and beauty professionals is here to pamper you and bring out your natural beauty.</i>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
                <a class="text-white" href="/Services"> Services</a>
            </h6>
            <p>
                <h6 class="text-uppercase mb-4 font-weight-bold">
                    <a class="text-white"href="/Gallery">Gallery</a>
                </h6>
            </p>
            <p>
              <h6 class="text-uppercase mb-4 font-weight-bold">  
              <a class="text-white"href="/Product">Product</a>
              </h6>
            </p>
            <p>
              <h6 class="text-uppercase mb-4 font-weight-bold">
              <a class="text-white"href="/Rent">Rent</a>
              </h6>
            </p>
            <p>
              <h6 class="text-uppercase mb-4 font-weight-bold">
              <a class="text-white"href="/Booking">Booking</a>
              </h6>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <!-- <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p> -->
            <p><i class="fas fa-envelope mr-3"></i> yaara@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> 076 7677535</p>
            <p><i class="fas fa-print mr-3"></i> 034 2284089</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>
            
            <!-- Facebook -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #3b5998"
               href="#!"
               role="button"
               ><i class="fab fa-facebook-f"></i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #55acee"
               href="#!"
               role="button"
               ><i class="fab fa-twitter"></i
              ></a>

            <!-- Google -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #dd4b39"
               href="#!"
               role="button"
               ><i class="fab fa-google"></i
              ></a>

            <!-- Instagram -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #ac2bac"
               href="#!"
               role="button"
               ><i class="fab fa-instagram"></i
              ></a>

            <!-- Linkedin -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #0082ca"
               href="#!"
               role="button"
               ><i class="fab fa-linkedin-in"></i
              ></a>
            <!-- Github -->
            <!-- <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #333333"
               href="#!"
               role="button"
               ><i class="fab fa-github"></i
              ></a> -->
              <div class="container1">
                <h4 class="map">Map</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.4099440831033!2d80.57355947483369!3d5.938097429689535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae1391b4a29e707%3A0xd54277175e326bc2!2sUniversity%20of%20Ruhuna!5e0!3m2!1sen!2slk!4v1702056346298!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
          </div>
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2020 Copyright: yaara
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->
        

</body>
</html>
