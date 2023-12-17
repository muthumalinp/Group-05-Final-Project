<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif; /* Set the default font for the entire document */
            text-align: center; /* Center-align text in the body */
        }

        h1 {
            color: #333; /* Set the text color */
            font-size: 24px; /* Set the font size */
            margin-top: 20px; /* Add some top margin */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            font-size: 14px; /* Set the font size for table cells */
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100px; /* Set the maximum width for the images */
            height: auto;   /* Maintain aspect ratio */
            display: block; /* Remove extra space below the image */
            margin: 0 auto;  /* Center the image within its container */
        }


        .edit-button, .delete-button {
            padding: 6px 12px; /* Add padding to the button */
            border: none; /* Remove border */
            cursor: pointer; /* Change cursor to pointer on hover */
            transition: background-color 0.3s ease; /* Add a smooth transition effect */
        }

        .edit-button {
            background-color: #3498db; /* Set the default background color for the "Edit" button */
            color: #fff; /* Set the text color for the "Edit" button */
        }

        .edit-button:hover {
            background-color: #2980b9; /* Change background color on hover for the "Edit" button */
        }

        .delete-button {
            background-color: #e74c3c; /* Set the default background color for the "Delete" button */
            color: #fff; /* Set the text color for the "Delete" button */
        }

        .delete-button:hover {
            background-color: #c0392b; /* Change background color on hover for the "Delete" button */
        }

    </style>
</head>
<body style ="background:#e0c2c0">
    <h1>View, Edit, and Delete Products</h1>
    <table>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Image1</th>
            <th>Image2</th>
            <th>Image3</th>
            <th>Image4</th>
            <th>Image5</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->pwrstitle }}</td>
            <td>{{ $product->pwrsdesc }}</td>
            <td><img src="{{asset('uploads/pwrs1/'.$product->pwrsimg1)}}" alt="{{ $product->bdlwrstitle }}"></td>
            <td><img src="{{asset('uploads/pwrs2/'.$product->pwrsimg2)}}" alt="{{ $product->bdlwrstitle }}"> </td>
            <td><img src="{{asset('uploads/pwrs3/'.$product->pwrsimg3)}}" alt="{{ $product->bdlwrstitle }}"> </td>
            <td><img src="{{asset('uploads/pwrs4/'.$product->pwrsimg4)}}" alt="{{ $product->bdlwrstitle }}"></td>
            <td><img src="{{asset('uploads/pwrs5/'.$product->pwrsimg5)}}" alt="{{ $product->bdlwrstitle }}"></td>
            <td>{{$product->pwrsprice }}</td>
            <td>{{$product->pwrsquantity}}</td>
            <td> 
                <a href="{{url('edit-pwrs/' .$product->id) }}">
                <button class="edit-button">Edit</button>
                </a>
            </td>
            <td> 
                <button class="delete-button">Delete</button>
            </td>

        </tr>
        @endforeach
    </table>
</body>
</html>
