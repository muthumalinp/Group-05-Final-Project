<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Adding Form</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if(session('status'))
                <h6 class="alert alert-success">{{session('status')}}</h6>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>
                            Add Hair Straightening Products
                            <a href="{{url('Index1')}}" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <form action="{{url('Create1')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="">Product Category</label>
                            <select name="category" class="form-select" size="1">
                                <option>Hair Straightening</option>
                                <option>Hair Coloring & Highlighting</option>
                                <option>Hair Treatments</option>
                                <option>Facial & Cleanup</option>
                            </select>
                        </div>

                            

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
