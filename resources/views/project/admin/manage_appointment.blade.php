

@extends('layouts1.admin_navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/admin/layout.css') }}">
</head>

<!--<header>
            <style>
                body {
                    background: #e0c2c0;
                    margin-top: 30px;
                    
                }
            </style>
</header> -->

<body style="background-color: #e0c2c0;  margin-top: 70px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Manage Appointment
                            <a href="{{url('Dashboard')}}" class="btn btn-primary float-end">Back</a>
                        
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td><b>Category</b></td>
                                    <td><b>Service</b></td>
                                    <td><b>Stylist</b></td>
                                    <td><b>Emp Id</b></td>
                                    <td><b>Booking Date</b></td>
                                    <td><b>Time Slot</b></td>
                                    <!--<td><b>End Time</b></td>-->
                                    <td><b>Userid</b></td>
                                    <td><b>User Email</b></td>
                                    <td><b>Submit</b></td>
                                   

                                    
                                    
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($book as $book)
                                <tr>
                                    <td>{{$book->selectedServiceCategory}}</td>
                                    <td>{{$book->selectedService}}</td>
                                    <td>{{$book->stylist}}</td>
                                    <td>{{$book->emp_id}}</td>
                                    <td>{{$book->bookingDate}}</td>
                                    <td>{{$book->adjustedTimeSlots}}</td>
                                    <!--<td>{{$book->endTimeResult}}</td>-->
                                    <td>{{$book->user_id}}</td>
                                    <td>{{$book->user_email}}</td>

                                    <td id="deliveryRow{{$book->emp_id}}">
                                        <a href="javascript:void(0);"  class="btn btn-secondary float-end" onclick="handleDelivery(this,{{$book->emp_id}})">Appointment</a>
                                    </td>


                                    <script>
                                        function handleDelivery(button, emp_id) {
                                            var isDelivered = localStorage.getItem('deliveryState' + emp_id);

                                            if (isDelivered) {
                                                var successMessage = document.createElement('span');
                                                successMessage.textContent = 'Booking successful!';
                                                
                                                var deliveryRow = document.getElementById('deliveryRow' + emp_id);
                                                deliveryRow.innerHTML = '';
                                                deliveryRow.appendChild(successMessage);

                                                // Don't proceed further if already delivered
                                                return;
                                            }

                                            var successMessage = document.createElement('span');
                                            successMessage.textContent = 'Booking successful!';

                                            var deliveryRow = document.getElementById('deliveryRow' + emp_id);
                                            deliveryRow.innerHTML = '';
                                            deliveryRow.appendChild(successMessage);

                                            localStorage.setItem('deliveryState' + emp_id, 'true');
                                        }
                                    </script>
                                    



                                    
                                </tr>
                               
                                @endforeach
                            </tbody>

                            

                           
                        
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
</body>
</html>

