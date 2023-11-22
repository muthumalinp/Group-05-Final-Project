@extends('layouts.main')
@section('title', 'Booking')
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="css\Customer\Booking\caseCSS.css">
    <title>Appoinment</title>
</head>
<body>
    <div class="mainFrame">
        <div class="topMain">
            <div class="topMainHead">
                <h1>Appoinment for Service</h1>
            </div>

            <div class="topMainTail clearfix">
                <div class="HeadLink_Left">
                    <ul>

                        <li><a href="{{url('booking')}}">Hair Cutting & Setting</a></li>
                        <li><a href="{{url('bookingDres')}}">Color</a></li>

<<<<<<< Updated upstream
=======
                        
>>>>>>> Stashed changes

                    </ul>
                </div>
                <div class="HeadLink_Right">
                    <ul>

                        <li><a href="{{url('bookingFaci')}}">Finish && Treats</a></li>
                        <li><a href="{{url('bookingPedi')}}">Nail Treats</a></li>

<<<<<<< Updated upstream
=======
                        
>>>>>>> Stashed changes

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

<<<<<<< Updated upstream
=======
                
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream
                                        <option value="Any1"><a href="#">Any Stylist:$15.00</a></option>
                                        <option value="muthu"><a href="#">Muthu:$20.00</a></option>
                                        <option value="malki"><a href="#">Malki:$30.00</a></option>
                                        <option value="harini"><a href="#">Harini:$40.00</a></option>
                                        <option value="dil"><a href="#">Dilshani:$50.00</a></option>
=======
                                        <option value="Child"><a href="#">Small Hair : Rs.500.00</a></option>
                                        <option value="Ladies"><a href="#">Medium Hair : Rs.1000.00</a></option>
                                        <option value="Gents"><a href="#">Hair : Rs.1500.00</a></option>
>>>>>>> Stashed changes
                                    </select>
                            </li>
        
                            <li>    
<<<<<<< Updated upstream
                            <label for="col">Girl Child(11-16) : </label>
                                    <select name="cut" id="cut">
                                        <option value="Any1"><a href="#">Any Stylist:$25.00</a></option>
                                        <option value="muthu"><a href="#">Muthu:$30.00</a></option>
                                        <option value="malki"><a href="#">Malki:$40.00</a></option>
                                        <option value="harini"><a href="#">Harini:$50.00</a></option>
                                        <option value="dil"><a href="#">Dilshani:$60.00</a></option>
                                    </select>
=======
                                <label for="col">Coloring : </label>
                                <select name="col" id="col">
                                    <option value="Ladies"><a href="#">Small Hair : Rs.500.00</a></option>
                                    <option value="Gents"><a href="#">Medium Hair : Rs.1000.00</a></option>
                                </select>
>>>>>>> Stashed changes
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