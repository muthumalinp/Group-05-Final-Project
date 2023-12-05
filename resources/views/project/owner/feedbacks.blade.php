@extends('layouts.owner_sidebar')
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
                    <h3>This is the feedback Page</h3>
                </div>
               
            </div>
         </div> 
      </div>
      
    @endsection  
   </body>
</html>