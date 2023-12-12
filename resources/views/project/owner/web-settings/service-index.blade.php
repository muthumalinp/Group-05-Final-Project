@extends('layouts1.owner_forms')
@section('content')

<div class="mt-5 me-5 ms-5">
<div class="card" style="width:500px; margin-left:480px">
    <div class="card-header text-bg-dark p-3"><h3>Salon Details<a href="{{url('/Settings')}}" class="btn btn-secondary float-end">BACK</a></h3></div>
    <div class="card-body">

    <form action="">
    <div class=" row mb-3">
        <label for="formGroupExampleInput" class="form-label">Salon Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="formGroupExampleInput">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputEmail3" class="form-label">Salon Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3">
        </div>
    </div>
    <div class=" row mb-3">
        <label for="formGroupExampleInput" class="form-label">Phone Number</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Land Line"><br/>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Mobile">
        </div>
    </div>
    <div class=" row mb-3">
        <label for="formGroupExampleInput" class="form-label">About</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="formGroupExampleInput">
        </div>
    </div>

    <input type="submit" class="btn btn-primary" value="Submit">
</form>
</div>
</div>
</div>
