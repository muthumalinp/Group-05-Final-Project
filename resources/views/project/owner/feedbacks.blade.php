@extends('layouts1.owner_sidebar')
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Salon Yaraa Customer Feedbacks</title>
      <link rel="stylesheet" href="{{ asset('css/owner/layouts.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Owner/owner.css') }}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <script src="https://kit.fontawesome.com/cff257cc3a.js" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/cff257cc3a.js" crossorigin="anonymous"></script>
   </head>


  
   <body>
   @section('cont')
      <h2>Customer Feedbacks</h2>
      <div class="cards" style="margin-top:50px">
         <div class="card">
            <p>Products Reviews <a href="{{url('/ratings')}}" class="btn btn-success btn-sm float-end"> Products Ratings</a> </p>
         </div>
      </div>
      
   @endsection
   </body>
</html>