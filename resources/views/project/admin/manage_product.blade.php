<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Manage Products
                            <a href="{{url('Dashboard-Admin')}}" class="btn btn-primary float-end">Back</a>
                        
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>Id</td>
                                    <td>Product No</td>
                                    <td>Product Name</td>
                                    <td>Product Price</td>
                                    <td>quantity</td>
                                    <td>Submit</td>
                                    
                                    
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($sell as $sell)
                                <tr>
                                    <td>{{$sell->id}}</td>
                                    <td>{{$sell->product_no}}</td>
                                    <td>{{$sell->product_name}}</td>
                                    <td>{{$sell->product_price}}</td>
                                    <td>{{$sell->quantity}}</td>
                                    <td id="deliveryRow{{$sell->id}}">
                                        <a href="javascript:void(0);"  class="btn btn-secondary float-end" onclick="handleDelivery(this,{{$sell->id}})">Delivered</a>
                                    </td>

                                    
                                    <script>
                                        
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



    
    

                    


