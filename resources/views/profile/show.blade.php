<!-- resources/views/profile/show.blade.php -->

@extends('layouts.app')  <!-- You can adjust this based on your layout structure -->

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Profile</div>

                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('css/Customer/pp1.jpg') }}" alt="Profile Picture" class="img-thumbnail" id="profile-picture">
                        </div>
                        <hr>

                        <div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">First Name:</label>
    <div class="col-md-6">
        <p class="form-control-plaintext">{{ optional($user)->fname }}</p>
    </div>
</div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $user->email }}</p>
                            </div>
                        </div>

                        <!-- Add more fields as needed -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
