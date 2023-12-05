@extends('layouts.main')
@section('title', 'Booking')
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Online Booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf

        <div class="container mt-5">
            <!-- Step 1: Service Selection -->
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center mb-4">Schedule Your Salon Appointment</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="form-group">
                        <label for="service">Select A Service:</label>
                        <select class="form-control" name="service" id="serviceSelect" required>
                            <!-- Options for services here -->
                            <option value="haircut">Hair Services</option>
                            <option value="bridal">Bridal Services</option>
                            <option value="nail">Nail Services</option>
                            <option value="other">Other Services</option>
                        </select>
                    </div>

<<<<<<< Updated upstream
                    <!-- Step 2: Hairstylist Selection -->
                    <!-- ... (other HTML code) -->

<div class="form-group">
    <label for="stylist">Select a Stylist:</label>
    <select class="form-control" name="stylist" id="stylistSelect" required>
        @foreach($employees as $employee)
            <option value="{{ $employee }}">{{ $employee }}</option>
        @endforeach
    </select>
</div>

<!-- ... (other HTML code) -->


                                // Generate the initial options
                                foreach ($hairstylists['haircut'] as $hairstylist) {
                                    echo '<option value="' . $hairstylist . '">' . $hairstylist . '</option>';
                                }
                            ?>
                        </select>
                    </div>

                    <!-- ... Other service-related HTML elements ... -->
=======
                        <li><a href="{{url('booking')}}">Hair Cutting & Setting</a></li>
                        <li><a href="{{url('bookingDres')}}">Color</a></li>


                    </ul>
>>>>>>> Stashed changes
                </div>
            </div>

            <!-- Step 3: Personal Information -->
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <!-- ... Other form fields ... -->

<<<<<<< Updated upstream
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit Appointment</button>
                    </div>
                </div>
            </div>

        </div>
    </form>

    <!-- Bootstrap JS and Popper.js (for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- JavaScript for dynamically updating hairstylist options -->
    <script>
        $(document).ready(function () {
            // Update hairstylist options when the service selection changes
            $('#serviceSelect').change(function () {
                var selectedService = $(this).val();
                var hairstylistOptions = <?php echo json_encode($hairstylists[$selectedService]); ?> || [];

                // Clear and update the hairstylist dropdown
                $('#stylistSelect').empty();
                $.each(hairstylistOptions, function (index, hairstylist) {
                    $('#stylistSelect').append($('<option>', {
                        value: hairstylist,
                        text: hairstylist
                    }));
                });
            });

            // Trigger the change event on page load to populate initial hairstylist options
            $('#serviceSelect').trigger('change');
        });
    </script>
</body>
</html>

=======

                    </ul>
                </div>
            </div>

            <div class="Horizontal_line1"></div>
        </div><!--topMain-->

        <!--div class="topTail"-->


        <!--Step1-->

        <div class="topTail2 clearfix">

            <div class="topTail_Head">

                <h1>Hair Cutting consultation Form</h1>


            </div>

            <form action="/booking" method="POST">
                @csrf
                <div class="select">
                    <p>Select a service</p>
                </div>

                <div class="mainSevies">
                    <div class="middle_left1">
                        <ul>
                            <li>
                                <label for="col">Boy Child(11-16) : </label>
                                    <select name="cut" id="cut">
                                        <option value="Any1"><a href="#">Any Stylist:$15.00</a></option>
                                        <option value="muthu"><a href="#">Muthu:$20.00</a></option>
                                        <option value="malki"><a href="#">Malki:$30.00</a></option>
                                        <option value="harini"><a href="#">Harini:$40.00</a></option>
                                        <option value="dil"><a href="#">Dilshani:$50.00</a></option>
                                    </select>
                            </li>
        
                            <li>    
                            <label for="col">Girl Child(11-16) : </label>
                                    <select name="cut" id="cut">
                                        <option value="Any1"><a href="#">Any Stylist:$25.00</a></option>
                                        <option value="muthu"><a href="#">Muthu:$30.00</a></option>
                                        <option value="malki"><a href="#">Malki:$40.00</a></option>
                                        <option value="harini"><a href="#">Harini:$50.00</a></option>
                                        <option value="dil"><a href="#">Dilshani:$60.00</a></option>
                                    </select>
                            </li>

                            <li>    
                            <label for="col">Boy Child(5-10) : </label>
                                    <select name="cut" id="cut">
                                        <option value="Any1"><a href="#">Any Stylist:$15.00</a></option>
                                        <option value="muthu"><a href="#">Muthu:$20.00</a></option>
                                        <option value="malki"><a href="#">Malki:$30.00</a></option>
                                        <option value="harini"><a href="#">Harini:$40.00</a></option>
                                        <option value="dil"><a href="#">Dilshani:$50.00</a></option>
                                    </select>
                            </li>

                            <li>    
                            <label for="col">Girl Child(5-10) : </label>
                                    <select name="cut" id="cut">
                                        <option value="Any1"><a href="#">Any Stylist:$15.00</a></option>
                                        <option value="muthu"><a href="#">Muthu:$20.00</a></option>
                                        <option value="malki"><a href="#">Malki:$30.00</a></option>
                                        <option value="harini"><a href="#">Harini:$40.00</a></option>
                                        <option value="dil"><a href="#">Dilshani:$50.00</a></option>
                                    </select>
                            </li>

                        </ul>
                    </div><!--muddle-left2-->

                    <div class="middle_right1">
                        <ul>
                            <li>
                            <label for="col">Boy Child Under 5 : </label>
                                    <select name="cut" id="cut">
                                        <option value="Any1"><a href="#">Any Stylist:$15.00</a></option>
                                        <option value="muthu"><a href="#">Muthu:$20.00</a></option>
                                        <option value="malki"><a href="#">Malki:$30.00</a></option>
                                        <option value="harini"><a href="#">Harini:$40.00</a></option>
                                        <option value="dil"><a href="#">Dilshani:$50.00</a></option>
                                    </select>
                            </li>

                            <li>    
                            <label for="col">Girl Child Under 5 : </label>
                                    <select name="cut" id="cut">
                                        <option value="Any1"><a href="#">Any Stylist:$15.00</a></option>
                                        <option value="muthu"><a href="#">Muthu:$20.00</a></option>
                                        <option value="malki"><a href="#">Malki:$30.00</a></option>
                                        <option value="harini"><a href="#">Harini:$40.00</a></option>
                                        <option value="dil"><a href="#">Dilshani:$50.00</a></option>
                                    </select>
                            </li>

                            <li>    
                            <label for="col">Cut & Blow Dry : </label>
                                    <select name="cut" id="cut">
                                        <option value="Any1"><a href="#">Any Stylist:$15.00</a></option>
                                        <option value="muthu"><a href="#">Muthu:$20.00</a></option>
                                        <option value="malki"><a href="#">Malki:$30.00</a></option>
                                        <option value="harini"><a href="#">Harini:$40.00</a></option>
                                        <option value="dil"><a href="#">Dilshani:$50.00</a></option>
                                    </select>
                            </li>

                            <li>    
                            <label for="col">Gents Cut And Finish : </label>
                                    <select name="cut" id="cut">
                                        <option value="Any1"><a href="#">Any Stylist:$15.00</a></option>
                                        <option value="muthu"><a href="#">Muthu:$20.00</a></option>
                                        <option value="malki"><a href="#">Malki:$30.00</a></option>
                                        <option value="harini"><a href="#">Harini:$40.00</a></option>
                                        <option value="dil"><a href="#">Dilshani:$50.00</a></option>
                                    </select>
                            </li>

                        </ul>
                        
                    </div><!--middle_right1-->

                </div>
                

                <!-- 
                    <div class="tailButn">
                    <button type="submit" class="btn1">Next</button>
                </div> 
                -->

 
            <!--second forms-->            


                <!--<div class="Horizontal_line2"></div>-->

                
                    <!--<div class="Horizontal_line2"></div>-->
                
                
                <div class="select">
                    <p>Please select an appointment bellow</p>
                </div>
        
                <div class="middelTail clearfix">
                    <span class="middelLeft">
                        <img src="css\Customer\Booking\img\rectangle_12.png">
                    </span>
        
                    <span class="middelRight">
                        <h3>Select Time</h3>
        
                        <div class="Main-boxes">
                            <div class="box"><a href="#">4.30 AM</a></div>
                            <div class="box"><a href="#">6.30 AM</a></div>
                            <div class="box"><a href="#">8.30 AM</a></div>
                            <div class="box"><a href="#">10.30 AM</a></div>
                            <div class="box"><a href="#">12.30 PM</a></div>
                            <div class="box"><a href="#">3.30 PM</a></div>
                            <div class="box"><a href="#">5.30 PM</a></div>
                            <div class="box"><a href="#">7.30 PM</a></div>
                        </div>
                    </span>
                </div>
        
                <!--
                    <div class="tailButn">
                    <button type="button">Back</button>
                    <button type="button">Next</button>
                    </div>
                -->
         

            <!--thred form-->

                <div class="Horizontal_line1"></div>
             
                <div class="select">
                    <p>Personal Information</p>
                </div>

                <div class="formContent">
                @csrf
                    <label>Full Name :</label>
                    <input type="text" placeholder="Full Name" id="fuName" name="fuName"><br>
                @csrf
                    <label>E-Mail :</label>
                    <input type="email" placeholder="E-Mail" id="eMail" name="eMail"><br>
                    @csrf
                    <label>Phone No :</label>
                    <select name="nbrCode" id="nbrCode">
                        <option>+94</option>
                        <option>+91</option>
                        <option>+34</option>
                        <option>+45</option>
                        <option>+65</option>
                        <option>+93</option>
                        <option>+91</option>
                        <option>+92</option>
                    </select>
                    @csrf
                    <input type="phone" placeholder="Phone Number" id="phone" name="phone"><br>
                    @csrf
                    <label>Preferred method of contact ?</label>
                    <input type="radio" name="contact" value="mail" id="mai"> E-Mail
                    <input type="radio" name="contact" value="phone" id="pho"> Phone
                    <br>
                    @csrf
                    <label>Other details you may wish to highlight :</label>
                    <textarea id="massage" name="massage" placeholder="Your Massage" rows="5" cols="60" ></textarea><br>
                </div>

                <div class="tailButn">
                    <button type="submit">Submit</button>
                </div>
                

            </form>

        </div>
    </div>
</body>
</html>
</body>
</html>
>>>>>>> Stashed changes
