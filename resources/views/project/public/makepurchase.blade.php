<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Purchase to the Cart</title>
</head>
<body>
    <div class="container">
        <div>    
            <h4>Customer Details</h1>
        </div>
                cart Details
        <div>

        </div>
            <!-- To make purchase  -->
    <form method="post" action="{{ route('cartstore') }}">
        @csrf
        <label for="product_no">Product No:</label>
        <input type="text" name="product_no" required>
        
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" required>

        <label for="product_price">Product Price:</label>
        <input type="number" name="product_price" step="0.01" required>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" required>

        <button type="submit">Submit</button>
    </form>
    <!-- To make purchase-->
        </div>
</body>
</html>