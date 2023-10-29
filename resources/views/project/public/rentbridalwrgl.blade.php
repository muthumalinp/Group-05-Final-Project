<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css\Customer\Rent\rentbridalwrgl.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <h1>Kandyan Saree</h1>

    <div class = "flex-box">
        <div class = "left">
            <div class = "big-img">
                <img src="{{ asset('css/Customer/Rent/p7.jpg') }}"  >

            </div>
           <div class="images">
                <div class="small-img">
                    <img src="{{ asset('css/Customer/Rent/p7.jpg') }}" onclick="showImg(this.src)"   >
                </div>

                <div class="small-img">
                    <img src="{{ asset('css\Customer\Rent\3P5A0160-copy.jpg') }}" onclick="showImg(this.src)"   >
                </div>

                <div class="small-img">
                    <img src="{{ asset('css/Customer/Rent/p7.jpg') }}"  onclick="showImg(this.src)"  >
                </div>

                <div class="small-img">
                    <img src="{{ asset('css/Customer/Rent/p7.jpg') }}" onclick="showImg(this.src)" >
                </div>

           </div>

        </div>
        <div class="right">
            <div class="url">saloon>Rent>bridalWear</div>
            <div class="pname">Bridal Wears for women</div>
            <div class="ratings">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>

            </div>
            <div class="price">Rs 1000</div>
            <div class="size">
                <p>Size :</p>
                <div class="psize">M</div>
                <div class="psize">L</div>
                <div class="psize">Xl</div>
                <div class="psize">XXl</div>
            </div>
            <div class="quantity">
                <p>Quantity</p>
                <input type="number" min="0" max="5" value="1">
            </div>
            <div class="btn-box">
                <button class = "cart-btn">Add to Cart</button>
                <button class = "buy-btn">Buy Now</button>
            </div>
        </div>
    </div>

    <script>
        let bigImg = document.querySelector('.big-img img');
        function showImg(pic){
             bigImg.src = pic;
        }
    </script>
</body>
</html>