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
                                    
                                    
                                    
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($buy as $buy)
                                <tr>
                                    <td>{{$buy->id}}</td>
                                    <td>{{$buy->product_no}}</td>
                                    <td>{{$buy->product_name}}</td>
                                    <td>{{$buy->product_price}}</td>
                                    <td>{{$buy->quantity}}</td>
                                    
                                    


                                    
                                </tr>
                               
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--<script>
        function markDelivered(id) {
            // Assuming you have an AJAX call to update the delivery status
            // Here, we're using a simple text update for demonstration purposes
            $("#status" + id).text("Success").addClass("text-success");
        }
    </script>-->
    
</body>
</html>



    
    

                    


