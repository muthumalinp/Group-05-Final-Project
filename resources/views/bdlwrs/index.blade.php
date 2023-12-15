@extends('layouts1.main')
@section('title', 'Rent')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details Page</title>
    <link rel="stylesheet" href="{{asset('css/rentdisplay/rentdisplay.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
@foreach ($products as $product)
    <nav>
        <ul>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
           
        </ul>
    </nav>
    <form action="">
    <div class="flex-box">
        <div class="left">
            <div class="big-img">
            <img src="{{asset('uploads/bdlwrs1/'.$product->bdlwrsimg1)}}" alt="{{ $product->bdlwrstitle }}">
            </div>
            <div class="images">
                <div class="small-img">
                <img src="{{asset('uploads/bdlwrs2/'.$product->bdlwrsimg2)}}" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                <img src="{{asset('uploads/bdlwrs3/'.$product->bdlwrsimg3)}}" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                <img src="{{asset('uploads/bdlwrs4/'.$product->bdlwrsimg4)}}" onclick="showImg(this.src)">
                </div>
                <div class="small-img">
                <img src="{{asset('uploads/bdlwrs5/'.$product->bdlwrsimg5)}}" onclick="showImg(this.src)">
                </div>
            </div>
        </div>

        <div class="right">
            <div class="url"></div>
            <div class="pname"><h2>{{ $product->bdlwrstitle }}</h2></div>
            
            <div class="ratings">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="desc">{{ $product->bdlwrsdesc }}</div>
            <div class="price">Rate Per One Day: Rs.{{ $product->bdlwrsprice }}.00</div>

            <div class="date">
                <label for="borrowingdate">Borrowing date:</label>
                <input type="date" id="borrowingdate" name="borrowingdate"><br>

                <label for="returningdate">Returning date:</label>
                <input type="date" id="returningdate" name="returningdate">

                <input type="hidden" name = "item_name" value="{{ $product->bdlwrstitle }}">

                    

            </div>
            
            <div class="quantity">
                <p>Quantity :</p>
                <input type="number" min="1" max="5" value="1">
            </div>
            <div class="btn-box">
                <button class="cart-btn" type="submit">Add to Cart</button>
              
            </div>
        </div>
    </div>
    </form>
    @endforeach
    <script>
        let bigImg = document.querySelector('.big-img img');
        function showImg(pic){
            bigImg.src = pic;
        }
    </script>
   
</body>
</html>