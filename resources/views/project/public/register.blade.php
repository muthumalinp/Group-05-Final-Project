@extends('layouts.main')
@extends('layouts.layouts_login')
@section('title', 'Registration')
@section('content')

<body id="s">

    <div class="container center-container">
        <div class="mt-5">
            @if($errors->any())
            <div class="col-12">
                @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
        </div>
        <div id="t">
            <h1 class="text-center mb-4">Register</h1>
            <form method="POST" action="{{ route('registration.post') }}">
                @csrf
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name:</label>
                    <input type="text" id="i" name="fname" placeholder="Enter your first name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name:</label>
                    <input type="text" name="lname" class="form-control" placeholder="Enter your last name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail:</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="pnumber" class="form-label">Phone Number:</label>
                    <input type="tel" name="pnumber" class="form-control" placeholder="Enter your phone number">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" name="password" class="form-control" placeholder="Create a password">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password:</label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="Re-enter your password">
                </div>
                <button type="submit" class="btn btn_color">Register</button>
            </form>

            <!-- Display registration success or error message -->
            @if (Session::has('message'))
            <div class="alert alert-{{ Session::get('status') }} mt-3">
                {{ Session::get('message') }}
            </div>
            @endif
        </div>
    </div>

    <!-- Add Bootstrap JS and jQuery script references if needed -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+VEFtLWak2I51zZnS53n5MBi5nEgVqz4p2w3tb6bC5F5Up5J" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>