@extends('layouts.owner_nav')
<!DOCTYPE html>
<html lang="en">
   <head>
        <meta charset="utf-8">
        <title>Salon Yaraa owner-profile</title>
        <link rel="stylesheet" href="{{ asset('css/Owner/owner.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Owner/profile.css') }}">

        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <script src="https://kit.fontawesome.com/cff257cc3a.js" crossorigin="anonymous"></script>
   </head>


   @section('cont')
   <body>

        <script src="{{asset('js/bootstrap.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
      

        <!-- @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif-->

        <div class="main_container">
            <div class="container">
                <div class="Header"><h2>Manage Employee Leaves</h2></div>
                <div class="info">
                    <div class="container rounded bg-white mt-5 mb-5">
                        <form method="POST" action="{{ route('project.owner.profile.store') }}" enctype="multipart/form-data">
                        @csrf
              
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
</html>