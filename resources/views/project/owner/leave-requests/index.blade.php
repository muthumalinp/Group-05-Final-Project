@extends('layouts1.owner_forms')
@section('content')

<div class="container">
    <div style="margin-top:100px">
        <div class="row">
            <div class="col-md-10">
                @if(session('success'))
                    <h6 class="alert alert-success">{{session('success')}}</h6>
                @endif
                <div class="card" style="width:1200px; margin-left:60px">
                    <div class="card-header text-bg-dark p-3">
                        <h2>Employee Leave Requests
                        <a href="{{url('/backtodashboard')}}" class="btn btn-secondary float-end">Back</a></h2>
                    </div>
                    <div class="card-body">
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Request Leave Start from</th>
                                        <th scope="col">Request Leave End</th>
                                        <th scope="col">Reason</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($leaveRequests as $leaveRequest)
                                    <tr>
                                        <td>{{ $leaveRequest->id }}</td>
                                        <td>{{ $leaveRequest->leave_emp_name }}</td>
                                        <td>{{ $leaveRequest->leave_emp_position }}</td>
                                        <td>{{ $leaveRequest->leave_emp_email }}</td>
                                        <td>{{ $leaveRequest->leave_start_date }}</td>
                                        <td>{{ $leaveRequest->leave_end_date }}</td>
                                        <td>{{ $leaveRequest->leave_reason }}</td>
                                        <td>{{ $leaveRequest->leave_status }}</td>
                                        <td>
                                                @if ($leaveRequest->leave_status == 'pending')
                                                    <form method="post" action="{{ route('acceptLeave', $leaveRequest->id) }}">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Accept
                                                        </button>
                                                    </form>

                                                    <form action="{{ route('rejectLeave', $leaveRequest->id) }}" method="POST" style="display:inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                                                    </form>
                                                @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><br/>

                

                <!--<div class="card">
                    <div class="card-header">
                        <div id="acceptedLeavesTable" style="display: none;">
                            <h2>Accepted Leaves</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Request Leave Start from</th>
                                        <th scope="col">Request Leave End</th>
                                        <th scope="col">Reason</th>
                                    </tr>
                                </thead>
                            
                            </table>
                        </div>

                        <div id="rejectedLeavesTable" style="display: none;">
                            <h2>Rejected Leaves</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Position</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Request Leave Start from</th>
                                        <th scope="col">Request Leave End</th>
                                        <th scope="col">Reason</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>-->
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