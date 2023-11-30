<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add producthairstr</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if(session('status'))
                <h6 class="alert alert-success">{{session('status')}}</h6>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>
                            Add Hair Straightening Products
                            <a href="{{url('hairstrs')}}" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <form action="{{url('Create1')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                    <div class="form-group mb-3">
                        <label for="">Product ID</label>
                        <input type="text" name="product_ID" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Product Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Product Price</label>
                        <input type="text" name="price" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Product Quantity</label>
                        <input type="text" name="Quantity" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Product Image</label>
                        <input type="file" name="product_image" class="form-control">
                    </div>

                      <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">Save Product</button>
                      </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>