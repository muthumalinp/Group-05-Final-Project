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
    <div class="container" style="margin-top:100px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Available Products
                            <a href="{{url('Create11')}}" class="btn btn-primary float-end">Add Products</a>
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>Product ID</td>
                                    <td>Product Category</td>
                                    <td>Product Name</td>
                                    <td>Product Price</td>
                                    <td>Product Quantity</td>
                                    <td>Product Image</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($product as $item)
                                <tr>
                                    <td>{{$item->product_ID}}</td>
                                    <td>{{$item->category}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->Quantity}}</td>
                                    <td><img src="{{asset('uploads/products/'.$item->product_image)}}" width="70px" height="70px" alt="Image"></td>
                                    <td><a href="{{url('Edit1/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a></td>
                                    <td>
                                     <a href="{{url('Delete1/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
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
</body>
</html>
