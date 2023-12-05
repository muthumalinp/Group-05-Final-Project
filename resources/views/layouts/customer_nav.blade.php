<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anoma Bridal and Beauty Salon/@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <style>
        .profile-container {
    position: relative;
}

#profile-picture {
    border-radius: 50%;
            height: 50px;
            width: 50px;
}

#edit-profile-button {
    position: absolute;
    top: 0;
    right: 0;
    /* Your button styles */
}

    </style>
</head>
<body id="k">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/Home">Salon Yaara</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item nav">
                            <a class="nav-link" href="/Home-Customer">Home</a>
                        </li>
                        <li class="nav-item nav">
                            <a class="nav-link" href="customer.about">About</a>
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
                            <a class="nav-link" href="/Booking">Booking</a>
                        </li>
                        <!-- <form class="form-inline my-2 my-lg-0" style="margin-left:2px">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form> -->
                            <li>
                                <div class="profile-container">
                                    <a href="{{ route('profile.show'') }}">
                                        <img src="{{ asset('css/Customer/pp1.jpg') }}" alt="Profile Picture" id="profile-picture">
                                    </a>   
                                </div>
                            </li>                  
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        @yield('cont')
    </div>

    <footer>
        <!-- footer content -->
    </footer>
</body>
</html>
