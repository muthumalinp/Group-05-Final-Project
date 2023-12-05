@extends('layouts.owner_sidebar')
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Salon Yaraa Full Report</title>
      <link rel="stylesheet" href="{{ asset('css/owner/layouts.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Owner/owner.css') }}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <script src="https://kit.fontawesome.com/cff257cc3a.js" crossorigin="anonymous"></script>
   </head>


  
   <body>
   @section('cont')
      <h2>Report</h2>
      <div class="cards">
         <div class="card">
            <p>Total customers    : : {{ $totalCustomers }}</p>
            <div class="img1"><img class="rounded-circle mt-0" width="250px" src="css/Owner/customers.avif"></div>
            <div class="count1"></div>
         </div>
         <div class="card">
         <p>Total Employees    : : {{ $totalEmployees }}</p> 
            <div class="img1"><img class="rounded-circle mt-0" width="200px" height="165px" src="css/Owner/e1.png"></div>
         </div>
         <div class="card">
            <p>Total Products</p>
            <div class="img1"><img class="rounded-circle mt-0" width="220px" height="165px" src="css/Owner/p2.webp"></div>
         </div>
         <div class="card">
            <p>Total Rent Items</p>
            <div class="img1"><img class="rounded-circle mt-0" width="220px" height="165px" src="css/Owner/p3.avif"></div>
         </div>
         <div class="card">
            <p>Total Income</p>
            <div class="img1"><img class="rounded-circle mt-0" width="220px" height="165px" src="css/Owner/income.jpg"></div>
         </div>
      </div>
   @endsection   
   </body>
</html>