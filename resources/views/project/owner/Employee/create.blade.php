@extends('layouts.owner_forms')
@section('content')

<div class="mt-5 me-5 ms-5">
<div class="card">
    <div class="card-header">Employee Registration</div>
    <div class="card-body">
        <form method="POST" action="{{ route('employee.store') }}">
            @csrf
            <label>First Name</label><br/>
            <input type="text" class="form-control" name="emp_fname"><br/>
            
            <label>Last Name</label><br/>
            <input type="text" class="form-control" name="emp_lname"><br/>
            
            <label>Job Title</label><br/>
            <input type="text" class="form-control" name="emp_jobtitle"><br/>
            
            <label>Phone Number</label><br/>
            <input type="text" class="form-control" name="emp_phone"><br/>
            
            <label>Email Address</label><br/>
            <input type="text" class="form-control" name="emp_email"><br/>
            
            <label>Basic Salary</label><br/>
            <input type="text" class="form-control" name="emp_bsalary"><br/>
            
            <label>Rewards</label><br/>
            <input type="text" class="form-control" name="emp_rewards"><br/>
            
            <input type="submit" class="btn btn-primary" value="Register">
        </form>
    </div>
</div>
</div>