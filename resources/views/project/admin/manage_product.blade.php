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
                            Manage Products
                            <a href="{{url('Dashboard')}}" class="btn btn-primary float-end">Back</a>
                        
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    
                                    <td><b>Product No</b></td>
                                    <td><b>Product Name</b></td>
                                    <td><b>Product Price</b></td>
                                    <td><b>Quantity</b></td>
                                    <td><b>Total</b></td>
                                    <td><b>Name</b></td>
                                    <td><b>Phone no</b></td>
                                    <td><b>Email</b></td>
                                    <td><b>Submit</b></td>
                                    
                                    
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($sell as $sell)
                                <tr>
                                    <td>{{$sell->product_no}}</td>
                                    
                                    <td>{{$sell->product_name}}</td>
                                    <td>{{$sell->product_price}}</td>
                                    <td>{{$sell->product_quantity}}</td>
                                    <td>{{$sell->total}}</td>
                                    <td>{{$sell->full_name}}</td>
                                    <td>{{$sell->phoneno}}</td>
                                    <td>{{$sell->email}}</td>
                                    <td id="deliveryRow{{$sell->id}}">
                                        <a href="javascript:void(0);"  class="btn btn-secondary float-end" onclick="handleDelivery(this,{{$sell->id}})">Ordered</a>
                                    </td>
                                    

                                    
<!--<script>
                                        
                                        var isDelivered = localStorage.getItem('deliveryState{{$sell->id}}');
                                        if (isDelivered) {
                                            
                                            var successMessage = document.createElement('span');
                                            successMessage.textContent = 'Delivery successful!';
                                            var deliveryRow = document.getElementById('deliveryRow{{$sell->id}}');
                                            deliveryRow.innerHTML = '';
                                            deliveryRow.appendChild(successMessage);
                                        }

                                        function handleDelivery(button, id) {
                            
                                            var successMessage = document.createElement('span');
                                            successMessage.textContent = 'Delivery successful!';

                                        
                                            var deliveryRow = document.getElementById('deliveryRow' + id);

                                            
                                            deliveryRow.innerHTML = ''; 
                                            deliveryRow.appendChild(successMessage);

                                            
                                            localStorage.setItem('deliveryState' + id, 'true');
                                        }
                                    </script>  -->


                            

                                    <script>
                                        function handleDelivery(button, id) {
                                            var isDelivered = localStorage.getItem('deliveryState' + id);

                                            if (isDelivered) {
                                                var successMessage = document.createElement('span');
                                                successMessage.textContent = 'Ordered successful!';
                                                
                                                var deliveryRow = document.getElementById('deliveryRow' + id);
                                                deliveryRow.innerHTML = '';
                                                deliveryRow.appendChild(successMessage);

                                                // Don't proceed further if already delivered
                                                return;
                                            }

                                            var successMessage = document.createElement('span');
                                            successMessage.textContent = 'Ordered successful!';

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



    
    

                    


