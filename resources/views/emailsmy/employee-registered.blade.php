<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Email</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
            line-height: 1.6;
        }

        footer {
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #ddd;
            text-align: center;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello {{ $employeeData['emp_fname'] }},</h1>
        <p>Welcome to our Team!</p>
        <p>
            We are thrilled to have you on board at Salon Yaraa. Your talent and dedication will undoubtedly contribute to our success. If you have any questions or need assistance, feel free to reach out to us.
            
        </p>
        <p>Your basic salary:{{ $employeeData['emp_bsalary'] }}</br>
        Login Details,</br>
    User email: {{ $employeeData['emp_email'] }}</br>
    User Password: 12345678 (You can change your password by remember password method) </p>
        <footer>
            <p>Salon Yaraa &copy; 2023. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>

