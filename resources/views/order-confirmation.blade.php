<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Confirmation</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        section {
            padding: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <header>
        <h2>🌟 Confirmation: Your Rental is Confirmed! 🌟</h2>
    </header>

    <section>
        <p>Thank you for choosing [Your Company Name]! Your rental request has been successfully confirmed. We're excited to be a part of your special occasion.</p>

        <h3>Rental Details:</h3>
        <ul>
            @foreach($productNames as $productName)
            <li>{{ $productName }}</li>
            @endforeach
        </ul>

        <h3>Important Information:</h3>
        <p>
            <strong>Delivery Details:</strong> Your items will be delivered to you by [Delivery Date].<br>
            <strong>Return Instructions:</strong> Please return the items by [Return Date] using the pre-paid return label provided.<br>
            <strong>Security Deposit:</strong> A refundable security deposit of $[Security Deposit] has been processed and will be refunded upon the safe return of the items.
        </p>

        <p>If you have any questions or need assistance, feel free to contact us at [Your Contact Email/Phone].</p>
    </section>

    <footer>
        <p>Thank you for choosing [Your Company Name]. We look forward to making your event unforgettable!</p>
    </footer>

</body>

</html>
