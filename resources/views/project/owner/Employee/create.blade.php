@extends('layouts1.owner_forms')
@section('content')

<div class="mt-5 me-5 ms-5">
<div class="card" style="width:600px; margin-left:420px">
    <div class="card-header text-bg-dark p-3"><h3>Employee Registration<a href="{{url('/backtoempindex')}}" class="btn btn-secondary float-end">BACK</a></h3></div>
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

            <label>Gender</label><br/>
            <select class="form-select" aria-label="Default select example">
                <option selected>Select Gender</option>
                <option value="1">Female</option>
                <option value="2">Male</option>
                <option value="3">Transgender</option>
            </select><br/>
            
            <input type="submit" class="btn btn-primary float-end" value="Register">
        </form>
    </div>
</div>
</div>