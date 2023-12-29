<!DOCTYPE html>
<html>
<head>
    <title>Purchase Confirmation</title>
</head>
<body>
    <p>Thank you for your purchase!</p>

    <p>Order details:</p>
    <ul>
        @foreach($orderDetails as $item)
            <li>{{ $item['desc'] }} - {{ $item['Quantity'] }} units</li>
        @endforeach
    </ul>
</body>
</html>
