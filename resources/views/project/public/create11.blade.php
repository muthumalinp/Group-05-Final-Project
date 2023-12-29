<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hairstr Product Adding Form</title>

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
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Add Products
                            <a href="{{url('Index1')}}" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <form action="{{url('Create11')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- <div class="form-group mb-3">
                            <label for="category">Product Category</label>
                            <select id="category" name="category" class="form-select" size="1">
                                <option>Hair Straightening</option>
                                <option>Hair Coloring & Highlighting</option>
                                <option>Hair Treatments</option>
                                <option>Facial & Cleanup</option>
                            </select>
                        </div>
                             -->
                         <div class="form-group mb-3">
                            <label for="product_ID">Product ID</label>
                            <input type="text" id="product_ID" name="product_ID" class="form-control">
                        </div> 
                        <div class="form-group mb-3">
                            <label for="name">Product Name</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="price">Product Price</label>
                            <input type="text" id="price" name="price" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="Quantity">Product Quantity</label>
                            <input type="text" id="Quantity" name="Quantity" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="product_image">Product Image</label>
                            <input type="file" id="product_image" name="product_image" class="form-control">
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
