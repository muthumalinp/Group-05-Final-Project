@extends('layouts1.admin_navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/admin/layout.css') }}">
</head>

<!--<header>
            <style>
                body {
                    background: #e0c2c0;
                    margin-top: 30px;
                    
                }
            </style>
</header> -->

<body style="background-color: #e0c2c0;  margin-top: 70px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Manage Appointment
                            <a href="{{url('Dashboard')}}" class="btn btn-primary float-end">Back</a>
                        
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                        <thead>
                                <tr>
                                    <td><b>Frist Name</b></td>
                                    <td><b>Last Name</b></td>
                                    <td><b>Job</b></td>
                                    <td><b>Mobile No</b></td>
                                    <td><b>Email</b></td>
                        
                                    
                                   

                                    
                                    
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($sad as $sadData)
    <tr>
        <td>{{ is_string($sadData->emp_fname) ? htmlspecialchars($sadData->emp_fname) : '' }}</td>
        <td>{{ is_string($sadData->emp_lname) ? htmlspecialchars($sadData->emp_lname) : '' }}</td>
        <td>{{ is_string($sadData->emp_jobtitles) ? htmlspecialchars($sadData->emp_jobtitles) : '' }}</td>
        <td>{{ is_string($sadData->emp_phone) ? htmlspecialchars($sadData->emp_phone) : '' }}</td>
        <td>{{ is_string($sadData->emp_email) ? htmlspecialchars($sadData->emp_email) : '' }}</td>
    </tr>
@endforeach
                            </tbody>
                        
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
</body>
</html>

