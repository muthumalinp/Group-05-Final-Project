@extends('project.customer.layouts.main')

@section('title', 'Book Now')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.css">
</head>

<body>
<div style="padding-top: 100px">
<form action="" method="post">


<label for="serviceCtaegory">Select a Service Category:</label>
  <select id="serviceCtaegory" name="serviceCtaegory">
  @foreach($HairServices as $HairService)
            <option value="{{ $HairService }}">{{ $HairService }}</option>
        @endforeach
</select>
  <br><br>

  <label for="service">Select a Service:</label>
  <select id="service" name="service">
        @foreach($HairCuts as $HairCut)
            <option value="{{ $HairCut }}">{{ $HairCut }}</option>
        @endforeach
    </select>
  <br><br>

  <label for="stylist">Select a Stylist:</label>
    <select id="stylist" name="stylist">
        @foreach($Hairstylists as $Hairstylist)
            <option value="{{ $Hairstylist }}">{{ $Hairstylist }}</option>
        @endforeach
    </select>
    <br><br>

    <label for="datePicker">SELECT DATE AND TIME:</label>
            <input type="text" id="datePicker" name="bookingDate" readonly>
            <br><br>
    
    


  <input type="submit" value="Submit">
</form>

<script>
            // Initialize Flatpickr on the date input field
            document.addEventListener('DOMContentLoaded', function () {
                var datePicker = document.getElementById('datePicker');

                flatpickr(datePicker, {
                    enable: [
                        // Specify available dates or a range of dates
                        '2023-01-01',
                        '2023-01-10',
                        { from: '2000-01-01', to: '2030-12-31' }
                    ],
                    dateFormat: 'Y-m-d', // Adjust the date format as needed
                    // Additional options go here
                });
            });
        </script>

</body>
</html>