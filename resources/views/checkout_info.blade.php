@extends('layoute')
    
@section('contente')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Information</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background-color: #e0c2c0;
          
        }

        h1 {
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        p {
            text-align: right;
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }

        form {
            margin: 20px auto;
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input, checkbox {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            display: inline-block;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            display: inline-block;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Cart Information</h1>
    <form action="{{ route('submit.order') }}" method="post">
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Borrowing Date</th>
                <th>Returning Date</th>
                <th>Price</th>
                <!-- Add more columns if needed -->
            </tr>
        </thead>
        <tbody>
            @php $total = 0 @endphp
            @foreach((array) session('carte') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
            @endforeach

            @foreach($cartItems as $id => $details)
                <tr>
                    <td>{{ $details['product_name'] }}</td>
                    <td>{{ $details['quantity'] }}</td>
                    <td>{{ $details['bdate'] }}</td>
                    <td>{{ $details['rdate'] }}</td>
                    <td>{{ $details['price'] }}</td>

                    <!-- Add more columns if needed -->
                </tr>
            @endforeach
        </tbody>
    </table>

    <p>Total: ${{ $total }}</p>

    
        @csrf

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="accept_terms">
            <input type="checkbox" id="accept_terms" name="accept_terms" required>
            I accept the terms and conditions
        </label>

        <button type="submit">Submit Order</button>
    </form>
@endsection
</body>
</html>
