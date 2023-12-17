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
        .btn {
            background-color: #BB9CC0;
            border-color: #FED9ED;
            color: #67729D;
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
        .hidden-content-time{
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
                <div id="HD1">
                @foreach($Hairstylists1 as $Hairstylist1)
                <option value="{{ $Hairstylist1 }}">{{ $Hairstylist1 }}</option>
                @endforeach
                </div>
                <div id="HD2">
                @foreach($Hairstylists2 as $Hairstylist2)
                <option value="{{ $Hairstylist2 }}">{{ $Hairstylist2 }}</option>
                @endforeach
                </div>
                <div id="HD3">
                @foreach($Hairstylists3 as $Hairstylist3)
                <option value="{{ $Hairstylist3 }}">{{ $Hairstylist3 }}</option>
                @endforeach
                </div>
                <div id="HD4">
                @foreach($Hairstylists4 as $Hairstylist4)
                <option value="{{ $Hairstylist4 }}">{{ $Hairstylist4 }}</option>
                @endforeach
                </div>
            </select>
        <br><br>
        </div>



        <div id="Date_Picker" class="hidden-content-date">
   <label for="datePicker">Select Date:</label>
   <input type="text" id="datePicker" name="bookingDate" readonly>
   <br><br>
        </div>

        <div id="str_time" class="hidden-content-time">
                <label for="adjustedTimeSlots">Select a Time Slot:</label>
                <select id="adjustedTimeSlots" name="adjustedTimeSlots">
                    <!-- Adjusted time slots will be dynamically updated here -->
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
        var HairDresser1 = document.getElementById('HD1');
        var date_picker = document.getElementById('Date_Picker');
        var str_time = document.getElementById('str_time');
        var adjustedTimeSlotsSelect = document.getElementById('adjustedTimeSlots');

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
            date_picker.classList.toggle('hidden-content-date');    
        });
        
        date_picker.addEventListener('click', function () {
            // Toggle the visibility of the hairServices div
            str_time.classList.toggle('hidden-content-time');    


        });





    });


    var submitButton = document.querySelector('input[type="submit"]');
        var datePickerInput = document.getElementById('datePicker');

        submitButton.addEventListener('click', function (event) {
            // Prevent the default form submission
            event.preventDefault();

            // Get the selected date value
            var selectedDate = datePickerInput.value;

            // Log or use the selected date as needed
            console.log(selectedDate);

            /// Continue with your logic or submit the form programmatically if needed
                // For example, uncomment the line below to submit the form
                // event.target.form.submit();

                // Use JavaScript to get the available time slots and update the dropdown
                var availableTimeSlots = calculateAvailableTimeSlots(selectedDate);
                updateAdjustedTimeSlots(adjustedTimeSlotsSelect, availableTimeSlots);
            });

            function calculateAvailableTimeSlots(selectedDate) {
                // Implement your logic to calculate available time slots based on the selected date
                // This can involve making an Ajax request to the server or any other logic you have
                // For demonstration purposes, return a hardcoded array
                return [];
            }

            function updateAdjustedTimeSlots(selectElement, timeSlots) {
                selectElement.innerHTML = '';
                timeSlots.forEach(function (timeSlot) {
                    var option = document.createElement('option');
                    option.value = timeSlot;
                    option.text = timeSlot;
                    selectElement.add(option);
                });
            }







    var today = new Date(); // Get today's date
    var twoWeeksLater = new Date();
    twoWeeksLater.setDate(today.getDate() + 14); // Calculate date 2 weeks later

    flatpickr(datePicker, {
    enable: [
        '2000-01-01',
        '2030-12-31',
        { from: today, to: twoWeeksLater }
    ],
    dateFormat: 'Y-m-d',
    // Additional options go here
    onReady: function (selectedDates, dateStr, instance) {
            // Customize the styles here
            instance.calendarContainer.style.border = '2px solid #FF69B4'; // Pink border
            instance.calendarContainer.style.borderRadius = '5px';
            instance.calendarContainer.style.boxShadow = '0 0 10px rgba(255, 105, 180, 0.5)'; // Pink shadow
            instance.calendarContainer.style.background = '#BB9CC0'; // black background
            instance.calendarContainer.style.color = 'pink';
        }
});
    </script>

</div>
</body>
</html>
