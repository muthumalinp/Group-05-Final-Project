<!-- resources/views/booking-success.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Success</title>
</head>
<body>
    <h1>Booking Successful!</h1>

    <p>Your appointment details:</p>
    <ul>
        <li>Service Category: {{ $bookedAppointment->selectedServiceCategory }}</li>
        <li>Selected Service: {{ $bookedAppointment->selectedService }}</li>
        <li>Stylist: {{ $bookedAppointment->stylist }}</li>
        <li>Booking Date: {{ $bookedAppointment->bookingDate }}</li>
        <li>Adjusted Time Slots: {{ $bookedAppointment->adjustedTimeSlots }}</li>
    </ul>

    <p>User details:</p>
    <ul>
        <li>User ID: {{ $user->id }}</li>
        <li>Name: {{ $user->fname }}</li>
        <li>Email: {{ $user->email }}</li>
        <!-- ... other user details you want to display -->
    </ul>
</body>
</html>
