<!DOCTYPE html>
<html lang="en">
<head>

    <!--<link rel="stylesheet" type="text/css" href="css/style1.css">-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/product/review.css')}}">

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
        }
        .rate:not(:checked) > input {
            position:absolute;
            top:-9999px;
        }
        .rate:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
        }
        .rate:not(:checked) > label:before {
            content: '★ ';
        }
        .rate > input:checked ~ label {
            color: #ffc700;    
        }
        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
            color: #deb217;  
        }
        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
}
/* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
    </style>

    <!--link rel="stylesheet" type="text/css" href="css/style2.css"-->

    <title>Review</title>
</head>
<body>
    <div class="mainFrame">


        <!--Next_Step3-->

        <div class="topTail2 clearfix">
            <div class="topTail_Head">
                <h1>REVIEW</h1>
            </div>

            <div class="select">
                <p>Your Review is matter.<br>Have you used this product before?</p>
            </div>
            <form action="{{ url('add-rating')}}" method="POST" name="formRating" id="formRating">
            @csrf

            <div class="rate">
                <input type="radio" id="star5" name="rating" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rating" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rating" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rating" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rating" value="1" />
                <label for="star1" title="text">1 star</label>
            </div>

                <div class="formContent">
                    <!-- <label>Comment :</label> -->
                    <!-- <textarea id="massage" name="massage" placeholder="Review" rows="5" cols="60" ></textarea><br> -->
                    <textarea name="review" class="text-area u-s-m-b-8" id="review-text-area" placeholder="Your Review" required></textarea>
                </div>

                <div class="tailButn">
                    <button class="button button-outline-secondary">Submit Review</button>
                </div>


            </form>

        </div>

    </div>
