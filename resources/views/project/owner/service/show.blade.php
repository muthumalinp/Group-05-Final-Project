@extends('layouts.owner_forms')
@section('content')
 
 
<div class="card">
  <div class="card-header">Service Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $services->service_name }}</h5>
        <p class="card-text">Address : {{ $services->service_price }}</p>
       <!-- <p class="card-text">Mobile : {{ $services->mobile }}</p>-->
  </div>
       
    </hr>
  
  </div>
</div>