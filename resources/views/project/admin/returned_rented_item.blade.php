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
                                
                                <a href="{{url('manage_rented_item')}}" class="btn btn-primary float-end">Back</a>
                            </div> 
                        
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <!--<td><b>ID</b></td>-->
                                    <td><b>Item Id</b></td>
                                    <td><b>Item Name</b></td>
                                    
                                    <td><b>Quantity</b></td>
                                    <td><b>customer name</b></td>
                                    <td><b>Customer Email</b></td>
                                    <td><b>Mobile No</b></td>
                                    <td><b>Item Price</b></td>
                                    <td><b>Returned Date</b></td>
                                    <td><b>Returned</b></td>
                                    
                                    
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($point as $point)
                                <tr>
                                    <!--<td>{{$point->id}}</td>-->
                                    <td>{{$point->ItemId}}</td>
                                    <td>{{$point->ItemName}}</td>
                                    
                                    <td>{{$point->ItemQuantity}}</td>
                                    <td>{{$point->CustomerName}}</td>
                                    <td>{{$point->CustomerEmail}}</td>
                                    <td>{{$point->CustomerMobileNo}}</td>
                                    <td>{{$point->price}}</td>
                                    <td>{{$point->ReturnedDate}}</td>
                                    
                                    <td id="deliveryRow{{$point->id}}">
                                        <a href="javascript:void(0);"  class="btn btn-secondary float-end" onclick="handleDelivery(this,{{$point->id}})">Returned</a>
                                    </td>

                                        <script>
                                            function handleDelivery(button, id) {
                                                var isDelivered = localStorage.getItem('deliveryState' + id);

                                                if (isDelivered) {
                                                    var successMessage = document.createElement('span');
                                                    successMessage.textContent = 'Returned successful!';
                                                    
                                                    var deliveryRow = document.getElementById('deliveryRow' + id);
                                                    deliveryRow.innerHTML = '';
                                                    deliveryRow.appendChild(successMessage);

                                                    // Don't proceed further if already delivered
                                                    return;
                                                }

                                                var successMessage = document.createElement('span');
                                                successMessage.textContent = 'Returned successful!';

                                                var deliveryRow = document.getElementById('deliveryRow' + id);
                                                deliveryRow.innerHTML = '';
                                                deliveryRow.appendChild(successMessage);

                                                localStorage.setItem('deliveryState' + id, 'true');
                                            }
                                        </script>

                                    
                                    
                                    




                                    
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

