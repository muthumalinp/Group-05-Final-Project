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
                            Manage Rent Item
                            <div style="display: flex; justify-content: flex-end;">
                                <a href="{{url('returned_rented_item')}}" class="btn btn-primary float-end" style="margin-right: 20px;">Returned</a>
                                <a href="{{url('Dashboard-Admin')}}" class="btn btn-primary float-end">Back</a>
                            </div> 
                        
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td><b>Id</b></td>
                                    <td><b>Item No</b></td>
                                    <td><b>Item Name</b></td>
                                    <td><b>Item Price</b></td>
                                    <td><b>Ishue Date</b></td>
                                    <td><b>Ishue</b></td>
                                    
                                    
                                </tr>
                            </thead>
                        
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
</body>
</html>

