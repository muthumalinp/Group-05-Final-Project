<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="css\Customer\Booking\caseCSS.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.0.0/parsley.min.js" integrity="sha512-83WT9hUVM+iU1MUFfipwr7JcCGriOEmzijo1EiHf30IXsMyMKRTy33uTl1prtJNGc2AlJJxEFVTTIQhai7az3A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
