@extends('layouts.owner_forms')
@section('content')

<div class="container">
    <div class="mt-5">
        <div class="row">
            <div class="col-md-10">
                @if(session('success'))
                    <h6 class="alert alert-success">{{session('success')}}</h6>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h2>Employee Management</h2>
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