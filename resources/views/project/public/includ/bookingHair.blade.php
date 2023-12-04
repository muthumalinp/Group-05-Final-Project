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

                        <li><a href="{{url('bookingHair')}}">Hair Cutting & Setting</a></li>
                        <li><a href="{{url('bookingDres')}}">Color</a></li>

                    </ul>
                </div>
                <div class="HeadLink_Right">
                    <ul>

                        <li><a href="{{url('bookingFaci')}}">Finish && Treats</a></li>
                        <li><a href="{{url('bookingPedi')}}">Nail Treats</a></li>

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
                                <label>Boy Child(11-16) : </label>
                                    <select name="cut1" id="cut1">

                                        <option value="Any1">Any Stylist:$15.00</option>
                                        <option value="muthu">Muthu:$20.00</option>
                                        <option value="malki">Malki:$30.00</option>
                                        <option value="harini">Harini:$40.00</option>
                                        <option value="dil">Dilshani:$50.00</option>

                                    </select>
                                    <button type="submit" class="butX">Book Now</button>
                            </li>
        
                            <li>    

                            <label>Girl Child(11-16) : </label>
                                    <select name="cut2" id="cut2">
                                        <option value="Any1">Any Stylist:$25.00</option>
                                        <option value="muthu">Muthu:$30.00</option>
                                        <option value="malki">Malki:$40.00</option>
                                        <option value="harini">Harini:$50.00</option>
                                        <option value="dil">Dilshani:$60.00</option>
                                    </select>
                                    <button type="submit" class="butX">Book Now</button>

                            </li>

                            <li>    
                            <label>Boy Child(5-10) : </label>
                                    <select name="cut3" id="cut3">
                                        <option value="Any1">Any Stylist:$15.00</option>
                                        <option value="muthu">Muthu:$20.00</option>
                                        <option value="malki">Malki:$30.00</option>
                                        <option value="harini">Harini:$40.00</option>
                                        <option value="dil">Dilshani:$50.00</option>
                                    </select>
                                    <button type="submit" class="butX">Book Now</button>

                            </li>

                            <li>    
                            <label>Girl Child(5-10) : </label>
                                    <select name="cut4" id="cut4">
                                        <option value="Any1">Any Stylist:$15.00</option>
                                        <option value="muthu">Muthu:$20.00</option>
                                        <option value="malki">Malki:$30.00</option>
                                        <option value="harini">Harini:$40.00</option>
                                        <option value="dil">Dilshani:$50.00</option>
                                    </select>
                                    <button type="submit" class="butX">Book Now</button>

                            </li>

                        </ul>
                    </div><!--muddle-left2-->

                    <div class="middle_right1">
                        <ul>
                            <li>
                            <label>Boy Child Under 5 : </label>
                                    <select name="cut5" id="cut5">
                                        <option value="Any1">Any Stylist:$15.00</option>
                                        <option value="muthu">Muthu:$20.00</option>
                                        <option value="malki">Malki:$30.00</option>
                                        <option value="harini">Harini:$40.00</option>
                                        <option value="dil">Dilshani:$50.00</option>
                                    </select>
                                    <button type="submit" class="butX">Book Now</button>

                            </li>

                            <li>    
                            <label>Girl Child Under 5 : </label>
                                    <select name="cut6" id="cut6">
                                        <option value="Any1">Any Stylist:$15.00</option>
                                        <option value="muthu">Muthu:$20.00</option>
                                        <option value="malki">Malki:$30.00</option>
                                        <option value="harini">Harini:$40.00</option>
                                        <option value="dil">Dilshani:$50.00</option>
                                    </select>
                                    <button type="submit" class="butX">Book Now</button>

                            </li>

                            <li>    
                            <label>Cut & Blow Dry : </label>
                                    <select name="cut7" id="cut7">
                                        <option value="Any1">Any Stylist:$15.00</option>
                                        <option value="muthu">Muthu:$20.00</option>
                                        <option value="malki">Malki:$30.00</option>
                                        <option value="harini">Harini:$40.00</option>
                                        <option value="dil">Dilshani:$50.00</option>
                                    </select>
                                    <button type="submit" class="butX">Book Now</button>

                            </li>

                            <li>    
                            <label>Gents Cut And Finish : </label>
                                    <select name="cut8" id="cut8">
                                        <option value="Any1">Any Stylist:$15.00</option>
                                        <option value="muthu">Muthu:$20.00</option>
                                        <option value="malki">Malki:$30.00</option>
                                        <option value="harini">Harini:$40.00</option>
                                        <option value="dil">Dilshani:$50.00</option>
                                    </select>
                                    <button type="submit" class="butX">Book Now</button>

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