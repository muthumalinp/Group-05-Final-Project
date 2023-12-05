@extends('layouts.owner_forms')
@section('content')
 
<div class="card">
  <div class="card-header">Service Page</div>
  <div class="card-body">
      
      <form action="{{ url('service/' .$services->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$services->id}}" id="id" />
        <label>Service</label></br>
        <input type="text" name="service_name" id="service_name" value="{{$services->service_name}}" class="form-control"></br>
        <label>Price(Upto)</label></br>
        <input type="text" name="service_price" id="service_price" value="{{$services->service_price}}" class="form-control"></br>
        <!--<label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control"></br>-->
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop