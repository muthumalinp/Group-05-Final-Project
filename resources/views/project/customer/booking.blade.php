@extends('project.customer.layouts.main')
@section('title', 'Book Now')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr@4.6.9/dist/flatpickr.min.js"></script>

    <style>
        .btn-custom:active, .btn-custom:focus {
            background-color: #fff;
            border-color: #ffff;
            color: black;
            width: 200px;
            text-align: left;
        }
        .hidden-content-service {
            display: none;
        }
        .hidden-content-stylist {
            display: none;
        }
        .hidden-content-date {
            display: none;
        }
    </style>
</head>

<body>
<!-- <div style="padding-top: 100px"> -->

<div class="container mt-5 bg-white">
    <form action="" method="post">

    <h2 class="text-center mb-4">Book Now</h2>

        <label for="serviceCategory">Select a Service Category:</label>
        <!-- <select id="serviceCategory" name="serviceCategory" class = "btn btn-custom"> -->
        <button type="button" id="hairservicesCategory" class="btn btn-custom">   
    @foreach($HairServices as $HairService)
        <div data-value="{{ $HairService }}">{{ $HairService }}</div>
    @endforeach
</button>

            <button type="button" class="btn btn-custom">
            @foreach($BridalServices as $BridalService)
                <option value="{{ $BridalService }}">{{ $BridalService }}</option>
            @endforeach
            </button>
            <button type="button" class="btn btn-custom">
            @foreach($NailServices as $NailService)
                <option value="{{ $NailService }}">{{ $NailService }}</option>
            @endforeach
            </button>
            <button type="button" class="btn btn-custom">
            @foreach($OtherServices as $OtherService)
                <option value="{{ $OtherService }}">{{ $OtherService }}</option>
            @endforeach
        </button>
        <br><br>

        
        <div id="hairServices" class="hidden-content-service">
        <label for="service">Select a Service:</label>
            <button type="button" id="haircutLadies" class="btn btn-custom">
                @foreach($HairCutsL as $HairCutL)
                    <option value="{{ $HairCutL }}">{{ $HairCutL }}</option>
                @endforeach
            </button>
            <button type="button" class="btn btn-custom">
                @foreach($HairCutsG as $HairCutG)
                    <option value="{{ $HairCutG }}">{{ $HairCutG }}</option>
                @endforeach
            </button>
        </div>
        <br><br>

        <div id="stylists" class="hidden-content-stylist">
        <label for="stylist">Select a Stylist:</label>
        <select id="stylist" name="stylist">
            @foreach($Hairstylists as $Hairstylist)
                <option value="{{ $Hairstylist }}">{{ $Hairstylist }}</option>
            @endforeach
        </select>
        <br><br>
        </div>

        <div id="Date&Time" class="hidden-content-date">
        <label for="datePicker">Select Date and Time:</label>
        <input type="text" id="datePicker" name="bookingDate" readonly>
        <br><br>

        <label for="timeSlot">Select a Time Slot:</label>
        <select id="timeSlot" name="timeSlot">
            @foreach($timeSlots as $timeSlot)
                <option value="{{ $timeSlot }}">{{ $timeSlot }}</option>
            @endforeach
        </select>
        <br><br>
        </div>

        <input type="submit" value="Submit">
    </form>
</div>

    <script>
       document.addEventListener('DOMContentLoaded', function () {
        var hairServicesButton = document.getElementById('hairservicesCategory');
        var hairServicesDiv = document.getElementById('hairServices');
        var Stylist = document.getElementById('stylists');
        var DateTime = document.getElementById('Date&Time');

        hairServicesButton.addEventListener('click', function () {
            // Toggle the visibility of the hairServices div
            hairServicesDiv.classList.toggle('hidden-content-service');
        });

        hairServicesDiv.addEventListener('click', function () {
            // Toggle the visibility of the hairServices div
            Stylist.classList.toggle('hidden-content-stylist');
        });

        Stylist.addEventListener('click', function () {
            // Toggle the visibility of the hairServices div
            DateTime.classList.toggle('hidden-content-date');
        });

    });








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

</div>
</body>
</html>
