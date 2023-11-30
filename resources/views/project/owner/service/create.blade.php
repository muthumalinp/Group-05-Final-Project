@extends('layouts.owner_forms')

@section('content')
 
<div class="mt-5 me-5 ms-5">
<div class="card">
  <div class="card-header">Service Page</div>
  <div class="card-body">
      
      <form action="{{ route('project.owner.service.store') }}" method="post">
        @csrf
        
        <label>Service</label></br>
        <input type="text" name="service_name" id="service_name" class="form-control"></br>
        
            <label for="exampleFormControlFile1">Images</label><br/>
            <input type="file" class="form-control-file" id="exampleFormControlFile1"><br/><br/>
        
        <label>Price(Upto)</label></br>
        <input type="text" name="service_price" id="service_price" class="form-control"></br>
        <!--<label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>-->
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
</div>

 
@endsection