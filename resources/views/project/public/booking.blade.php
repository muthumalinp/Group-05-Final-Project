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
                        <li><a href="{{url('bookingDres')}}">Dressings</a></li>

                        <li><a href="#">Hair Cutting & Setting</a></li>
                        <li><a href="#">CleanUp</a></li>

                    </ul>
                </div>
                <div class="HeadLink_Right">
                    <ul>

                        <li><a href="{{url('bookingFaci')}}">Facial & Treatments</a></li>
                        <li><a href="{{url('bookingPedi')}}">Pedicure</a></li>

                        <li><a href="#">Facial & Treatments</a></li>
                        <li><a href="#">Pedicure</a></li>

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

                <h1>Hairdressing consultation Form</h1>
            </div>

            <form>

                <div class="select">
                    <p>Select a service</p>
                </div>

                <div class="mainSevies">
                    <div class="middle_left1">
                        <ul>
                            <li>
                                <label for="col">Cutting : </label>
                                    <select name="cut" id="cut">
                                        <option value="small"><a href="#">Small Hair : Rs.500.00</a></option>
                                        <option value="medium"><a href="#">Medium Hair : Rs.1000.00</a></option>
                                        <option value="large"><a href="#">Hair : Rs.1500.00</a></option>
                                    </select>
                            </li>
        
                            <li>    
                                <label for="col">Coloring : </label>
                                <select name="col" id="col">
                                    <option value="small"><a href="#">Small Hair : Rs.500.00</a></option>
                                    <option value="medium"><a href="#">Medium Hair : Rs.1000.00</a></option>
                                    <option value="large"><a href="#">Hair : Rs.1500.00</a></option>
                                </select>
                            </li>

                            <li>    
                                <label for="col">Hair Extensions : </label>
                                <select name="col" id="col">
                                    <option value="small"><a href="#">Small Hair : Rs.500.00</a></option>
                                    <option value="medium"><a href="#">Medium Hair : Rs.1000.00</a></option>
                                    <option value="large"><a href="#">Hair : Rs.1500.00</a></option>
                                </select>
                            </li>

                            <li>    
                                <label for="col">Threading : </label>
                                <select name="col" id="col">
                                    <option value="small"><a href="#">Small Hair : Rs.500.00</a></option>
                                    <option value="medium"><a href="#">Medium Hair : Rs.1000.00</a></option>
                                    <option value="large"><a href="#">Hair : Rs.1500.00</a></option>
                                </select>
                            </li>

                        </ul>
                    </div><!--muddle-left2-->

                    <div class="middle_right1">
                        <ul>
                            <li>
                                <label for="col">Cutting : </label>
                                    <select name="cut" id="cut">
                                        <option value="small"><a href="#">Small Hair : Rs.500.00</a></option>
                                        <option value="medium"><a href="#">Medium Hair : Rs.1000.00</a></option>
                                        <option value="large"><a href="#">Hair : Rs.1500.00</a></option>
                                    </select>
                            </li>

                            <li>    
                                    <label for="col">Coloring : </label>
                                    <select name="col" id="col">
                                        <option value="small"><a href="#">Small Hair : Rs.500.00</a></option>
                                        <option value="medium"><a href="#">Medium Hair : Rs.1000.00</a></option>
                                        <option value="large"><a href="#">Hair : Rs.1500.00</a></option>
                                    </select>
                            </li>

                            <li>    
                                <label for="col">Hair Extensions : </label>
                                <select name="col" id="col">
                                    <option value="small"><a href="#">Small Hair : Rs.500.00</a></option>
                                    <option value="medium"><a href="#">Medium Hair : Rs.1000.00</a></option>
                                    <option value="large"><a href="#">Hair : Rs.1500.00</a></option>
                                </select>
                            </li>

                            <li>    
                                <label for="col">Threading : </label>
                                <select name="col" id="col">
                                    <option value="small"><a href="#">Small Hair : Rs.500.00</a></option>
                                    <option value="medium"><a href="#">Medium Hair : Rs.1000.00</a></option>
                                    <option value="large"><a href="#">Hair : Rs.1500.00</a></option>
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

            </form>
 
            <!--second forms-->            


                <!--<div class="Horizontal_line2"></div>-->

            <form>
                
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
         
            </form>

            <!--thred form-->

            <form>
                <div class="Horizontal_line1"></div>
             
                <div class="select">
                    <p>Personal Information</p>
                </div>

                <div class="formContent">
                    <label>Full Name :</label>
                    <input type="text" placeholder="Full Name" id="fuName" name="fuName"><br>

                    <label>E-Mail :</label>
                    <input type="email" placeholder="E-Mail" id="eMail" name="eMail"><br>

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
                    <input type="phone" placeholder="Phone Number" id="phone" name="phone"><br>

                    <label>Preferred method of contact ?</label>
                    <input type="radio" name="contact" value="mail" id="mai"> E-Mail
                    <input type="radio" name="contact" value="phone" id="pho"> Phone
                    <br>

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