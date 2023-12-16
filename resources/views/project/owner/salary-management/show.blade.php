<!--@extends('layouts.owner_forms')-->
@extends('layouts.owner_sidebar')

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <title>Salon Yaraa Salary Management</title>
      <link rel="stylesheet" href="{{ asset('css/Owner/salary-management.css') }}">
      <link rel="stylesheet" href="{{ asset('css/Owner/owner.css') }}">
      <link rel="stylesheet" href="{{ asset('css/owner/layouts.css') }}">
      <link rel="stylesheet" href="{{ asset('css/Owner/profile.css') }}">

      <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <script src="https://kit.fontawesome.com/cff257cc3a.js" crossorigin="anonymous"></script>
  </head>
  <body>

<!--@section('content')
 
<div class="mt-5 me-5 ms-5">
<div class="card">
  <div class="card-header">Example Employee</div>
  <div class="card-body">
      
    
   
  </div>
</div>
</div>  -->


  

    @section('content')
      <div class="mt-5 me-5 ms-5 card-container">
      <div class="card">
        <div class="card-header">
          <h3>Employee Profiles</h3>
          <a href="{{url('Manage-Salary')}}" class="btn btn-primary float-end">Back</a>

        </div>
        <div class="card-body">


  

          @foreach ($employees as $profile)
            <div class="employee-profile">
              <h2>{{ $profile->emp_fname }} {{ $profile->emp_lname }}</h2>
              <p><strong>Job Title:</strong> {{ $profile->emp_jobtitle }}</p>
              <p><strong>Phone:</strong> {{ $profile->emp_phone }}</p>
              <p><strong>Email:</strong> {{ $profile->emp_email }}</p>
              <p><strong>Base Salary:</strong> ${{ $profile->emp_bsalary }}</p>
              <p><strong>Rewards:</strong> {{ $profile->emp_rewards }}</p>
            
            </div>
        @endforeach 

        </div>
      </div>
      </div>  
    @endsection  


 
<!--@endsection  -->

</body>
</html>