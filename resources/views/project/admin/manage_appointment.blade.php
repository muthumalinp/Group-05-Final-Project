

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
                                    <td><b>Id</b></td>
                                    <td><b>Name</b></td>
                                    <td><b>Date</b></td>
                                    <td><b>Start Time</b></td>
                                    <td><b>End Time</b></td>
                                    
                                   

                                    
                                    
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($book as $book)
                                <tr>
                                    <td>{{$book->emp_id}}</td>
                                    <td>{{$book->emp_fname}}</td>
                                    <td>{{$book->booking_date}}</td>
                                    <td>{{$book->start_time}}</td>
                                    <td>{{$book->end_time}}</td>
                                    
                                    


                                    
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

