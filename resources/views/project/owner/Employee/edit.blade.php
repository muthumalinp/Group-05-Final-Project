@extends('layouts1.owner_forms')

@section('content')

<div class="mt-5 me-5 ms-5">
        <div class="card" style="width:600px; margin-left:420px">
        <div class="card-header text-bg-dark p-3">
            <h3 align="center" class="mt-5">Employee Management</h3>
        </div>
        <div class="row">
            
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('employee.update', $employee->id) }}">
                {!! csrf_field() !!}
                  @method("PATCH")
                    <div class="row">
                        <div class="col-md-6">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="emp_fname" value="{{ $employee->emp_fname }}">
                        </div>
                        <div class="col-md-6">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="emp_lname" value="{{ $employee->emp_lname }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Job Title</label>
                            <input type="text" class="form-control" name="emp_jobtitle" value="{{ $employee->emp_jobtitle }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="emp_phone" value="{{ $employee->emp_phone }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Email Address</label>
                            <input type="text" class="form-control" name="emp_email" value="{{ $employee->emp_email }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Basic Salarye</label>
                            <input type="text" class="form-control" name="emp_bsalary" value="{{ $employee->emp_bsalary }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Rewards</label>
                            <input type="text" class="form-control" name="emp_rewards" value="{{ $employee->emp_rewards }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>

                    </div>
                </form>
            </div>

            </div>
        </div>
        

    </div>

        

        
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#b3e5fc;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush