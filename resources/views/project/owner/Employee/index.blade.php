@extends('layouts.owner_forms')


@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Employee Management</h3>

        <div class="row">
<<<<<<< Updated upstream
            <div class="col-md-10">
                @if(session('success'))
                    <h6 class="alert alert-success">{{session('success')}}</h6>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h2>Employee Management</h2>
                        <a href="{{url('/backtodashboard')}}" class="btn btn-secondary float-end">Back</a>
                    </div>
                    <div class="card-body">
                        <a href="{{url('/addemployee')}}" class="btn btn-success btn-sm" title="Add New Employee">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Lastst Name</th>
                                        <th scope="col">Job Title</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Email Address</th>
                                        <th scope="col">Basic Salary</th>
                                        <th scope="col">Rewards</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $employees as $key => $employee )
                                    <tr>
                                        <td scope="col">{{ ++$key }}</td>
                                        <td scope="col">{{ $employee->emp_fname }}</td>
                                        <td scope="col">{{ $employee->emp_lname }}</td>
                                        <td scope="col">{{ $employee->emp_jobtitle }}</td>
                                        <td scope="col">{{ $employee->emp_phone }}</td>
                                        <td scope="col">{{ $employee->emp_email }}</td>
                                        <td scope="col">{{ $employee->emp_bsalary }}</td>
                                        <td scope="col">{{ $employee->emp_rewards }}</td>
                                        <td scope="col">
=======
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
>>>>>>> Stashed changes

            <div class="form-area">
                <form method="POST" action="{{ route('employee.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="emp_fname">
                        </div>
                        <div class="col-md-6">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="emp_lname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Job Title</label>
                            <input type="text" class="form-control" name="emp_jobtitle">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="emp_phone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Email Address</label>
                            <input type="text" class="form-control" name="emp_email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Basic Salary</label>
                            <input type="text" class="form-control" name="emp_bsalary">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Rewards</label>
                            <input type="text" class="form-control" name="emp_rewards">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Register">
                        </div>

                    </div>
                </form>
            </div>

                <table class="table mt-5">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Lastst Name</th>
                        <th scope="col">Job Title</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Basic Salary</th>
                        <th scope="col">Rewards</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ( $employees as $key => $employee )

                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $employee->emp_fname }}</td>
                            <td scope="col">{{ $employee->emp_lname }}</td>
                            <td scope="col">{{ $employee->emp_jobtitle }}</td>
                            <td scope="col">{{ $employee->emp_phone }}</td>
                            <td scope="col">{{ $employee->emp_email }}</td>
                            <td scope="col">{{ $employee->emp_bsalary }}</td>
                            <td scope="col">{{ $employee->emp_rewards }}</td>
                            <td scope="col">

                            <a href="{{  route('employee.edit', $employee->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>

                          </tr>

                        @endforeach




                    </tbody>
                  </table>
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