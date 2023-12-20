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
      <h2>Customer Home Settings</h2>
      <div class="cards" style="margin-top:50px">
         <div class="card">
            <p>Salon Details <a href="{{url('/salon-details')}}" class="btn btn-success btn-sm float-end"> Edit Salon Details</a> </p>
         </div>
         <div class="card">
            <p>Home images <a href="{{url('/uploadimage')}}" class="btn btn-success btn-sm float-end"> Edit Home Page</a> </p> 
         </div>
         <div class="card">
            <p>Gallery <a href="{{url('/guploadimage')}}" class="btn btn-success btn-sm float-end"> Edit Gallery Page</a> </p>
         </div>
         <div class="card">
            <p>Service <a href="{{url('/service-page')}}" class="btn btn-success btn-sm float-end"> Edit Service Page</a> </p>
         </div>
      </div>
      
   @endsection   
      
   </body>
</html>