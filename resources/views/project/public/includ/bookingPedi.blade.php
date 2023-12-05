<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--<link rel="stylesheet" type="text/css" href="css\Customer\Booking\caseCSS.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>

    <style>
        .form-section{
            display: none;
        }

        .form-section.current{
            display: inline;
        }

        .parsley-error-list{
            color: red;
        }
    </style>

</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-9">
                <div class="card px-5 py-3 mt-5 shadow">
                    <h1 class="text-denger text-center mt-3 mb-4">Multi-step Form in BookingPedi</h1>

<<<<<<< Updated upstream
                    <div class="nav nav-fill my-3">
                        <label class="nav-link shadow-sm step0 border ml-2 ">Step One</label>
                        <label class="nav-link shadow-sm step1 border ml-2 ">Step Two</label>
                        <label class="nav-link shadow-sm step2 border ml-2 ">Step Three</label>
=======
            <div class="topMainTail clearfix">
                <div class="HeadLink_Left">
                    <ul>
                        <li><a href="{{url('booking')}}">Hair Cutting & Setting</a></li>
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
                <h1>NAIL SERVICES consultation Form</h1>
            </div>

            <form>

                <div class="select">
                    <p>Select a service</p>
                </div>

                <div class="mainSevies">
                    <div class="middle_left1">
                        <ul>
                            <li>
                            <label for="col">Complex Design : </label>
                                    <select name="cut" id="cut">
                                        <option value="Any1"><a href="#">Any Stylist:$18.00</a></option>
                                        <option value="muthu"><a href="#">Muthu:$20.00</a></option>
                                        <option value="malki"><a href="#">Malki:$30.00</a></option>
                                        <option value="harini"><a href="#">Harini:$40.00</a></option>
                                        <option value="dil"><a href="#">Dilshani:$50.00</a></option>
                                    </select>
                            </li>
        
                            <li>    
                            <label for="col">Hand Painted : </label>
                                    <select name="cut" id="cut">
                                        <option value="Any1"><a href="#">Any Stylist:$38.00</a></option>
                                        <option value="muthu"><a href="#">Muthu:$20.00</a></option>
                                        <option value="malki"><a href="#">Malki:$40.00</a></option>
                                        <option value="harini"><a href="#">Harini:$45.00</a></option>
                                        <option value="dil"><a href="#">Dilshani:$50.00</a></option>
                                    </select>
                            </li>
                        </ul>
                    </div><!--muddle-left2-->

                    <div class="middle_right1">
                        <ul>
                            <li>
                            <label for="col">Get Removal : </label>
                                    <select name="cut" id="cut">
                                        <option value="Any1"><a href="#">Any Stylist:$18.00</a></option>
                                        <option value="muthu"><a href="#">Muthu:$20.00</a></option>
                                        <option value="malki"><a href="#">Malki:$30.00</a></option>
                                        <option value="harini"><a href="#">Harini:$40.00</a></option>
                                        <option value="dil"><a href="#">Dilshani:$50.00</a></option>
                                    </select>
                            </li>

                            <li>    
                            <label for="col">Pedicure : </label>
                                    <select name="cut" id="cut">
                                        <option value="Any1"><a href="#">Any Stylist:$18.00</a></option>
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
>>>>>>> Stashed changes
                    </div>
                    <form action="/post" method="post" class="employee-form">
                        @csrf
                        <div class="form-section">
                            <label for="">Name</label>
                            <input type="text" class="form-control mb-3" name="name" required>
                            <label for="">Last Name</label>
                            <input type="text" class="form-control mb-3" name="last_name" required>
                        </div>

                        <div class="form-section">
                            <label for="">E-mail</label>
                            <input type="email" class="form-control mb-3" name="email" required>
                            <label for="">Phone</label>
                            <input type="tel" class="form-control mb-3" name="phone" required>
                        </div>

                        <div class="form-section">
                            <label for="">Address</label>
                            <textarea name="adress" class="form-control mb-3" cols="30" rows="5" required></textarea>
                        </div>

                        <div class="form-navigation mt-3">
                            <button type="button" class="previous btn btn-primary float-left"> &lt; Previous</button>
                            <button type="button" class="next btn btn-primary float-right">Next &gt; </button>
                            <button type="submit" class="btn btn-success float-right">Submit</button>
                        </div>
                    </form>
                </div>
<<<<<<< Updated upstream
            </div>
=======

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

>>>>>>> Stashed changes
        </div>
    </div>
    <script>

$(function(){
    var $sections=$('.form-section');

    function navigateTo(index){
        $sections.removeClass('current').eq(index).addClass('current');
        $('.form-navigation .previous').toggle(index>0);
        var atTheEnd = index >= $sections.length - 1;
        $('.form-navigation .next').toggle(!atTheEnd);
        $('.form-navigation [Type=submit]').toggle(atTheEnd);

        const step=document.querSelector('.step'+index);
        step.style.backgroundColor="#17a2b8";
        step.style.color="white";
    }

    function curIndex(){
        return $sections.index($sections.filter('.current'));
    }

    $('.form-navigation .previous').click(function(){
        navigateTo(curIndex() - 1);
    });

    $('.form-navigation .next').click(function(){
        $('.employee-from').parsley().whenValidate({
            group:'block-'+curIndex()
        }).done(function(){
            navigateTo(curIndex()+1);
        });
    });

    $sections.each(function(index,section){
        $(section).find(':input').attr('data-parsley-group','block-' + index);
    });

    navigateTo(0);

});
</script>


</body>
</html>