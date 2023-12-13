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
      <div class="main_container">
         <div class="container">
            <div class="Header">Customer Feedbacks</div>
            <div class="info">
                <div>
                <h3>Products Reviews</h3>

                </div>

                

                <!-- <a @if(Session::get('page')=="ratings") @endif href="{{url('admin/ratings')}}">Ratings</a> -->
               <a href="{{ url('/ratings')}}">Ratings</a>
               
            </div>
         </div> 
      </div>
      
    @endsection  
   </body>
</html>