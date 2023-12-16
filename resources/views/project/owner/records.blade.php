@extends('layouts1.owner_sidebar')
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Salon Yaraa admin settings</title>
      <link rel="stylesheet" href="{{ asset('css/owner/layouts.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Owner/owner.css') }}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <script src="https://kit.fontawesome.com/cff257cc3a.js" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/cff257cc3a.js" crossorigin="anonymous"></script>
   </head>


   
   <body>
   @section('cont')
      <h2>View Salon Records</h2>
      <div class="cards" style="margin-top:50px">
         <div class="card">
            <p>Customer Details <a href="{{url('/customer_details')}}" class="btn btn-success btn-sm float-end"> Customer Details</a> </p>
         </div>
         <div class="card">
            <p>Appointment Details <a href="{{url('/uploadimage')}}" class="btn btn-success btn-sm float-end"> Appointment Details</a> </p> 
         </div>
         <div class="card">
            <p>Rented Details <a href="{{url('/gallery-page')}}" class="btn btn-success btn-sm float-end"> Rented Details</a> </p>
         </div>
         <div class="card">
            <p>Employee Details <a href="{{url('/service-page')}}" class="btn btn-success btn-sm float-end"> Employee Details</a> </p>
         </div>
         <div class="card">
            <p>Selling Product Details <a href="{{url('/gallery-page')}}" class="btn btn-success btn-sm float-end"> Selling Product Details</a> </p>
         </div>
         <div class="card">
            <p>Renting Item Details <a href="{{url('/service-page')}}" class="btn btn-success btn-sm float-end">Renting Item Details</a> </p>
         </div>
      </div>
      
   @endsection   
      
   </body>
</html>