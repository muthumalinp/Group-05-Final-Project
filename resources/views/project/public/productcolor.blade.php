<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/product/productform.css')}}">
    <title>Hair Straightening</title>
</head>
<body>
    <nav class="navbar">
        <div class="logo"><h1>Salon Yaara</h1></div>
        <ul class="menu">
            <li><a href="/Product/HairStraghtening">Hair Straightening</a></li>
            <li><a href="/Product/HairColoring&Highliting" class="active">Hair Coloring & Highlighting </a></li>
            <li><a href="/Product/HairTreatment" >Hair Treatment</a></li>
            <li><a href="/Product/Facial&CleanUp">Facial & Cleanup</a></li>
            <li>
            <div>
                <?php
                    $count=0;
                    if(isset($_SESSION['cart']))
                    {
                        $count=count($_SESSION['cart']);
                    }
                ?>
                <a href="/Product/Cart" ><i class="fas fa-shopping-cart"> <?php echo $count; ?></i></a>
                
            </div>
            </li>
        </ul>

<!--for responsive button-->

        <div class="menu-btn">
            <i class="fa-bars"></i>
        </div>
    </nav>

    <section calss="content">
        <h1>Grab your Beauty Products Now</h1>
        <p>Invest in your beauty,invest in yourself</p>
    </section>  
    
    <h1 class="pheading">Our Latest Beauty Products</h1>
    <section class="sec">
        <div class="products">

            <!--card starts-->
           
            <div class="card">
            <form action="/Product/ManageCart" method="GET">
                <div class="img"><img src="asset('css/color11.jpg') }}" alt="" ></div>
                <div class="desc"> Luxury</div>
                <div class="box">
                    <div class="price">Rs.2500</div>
                    <button type="submit" name="Add_To_Cart" class="btn">Add to Cart</button>
                    </div>
                    <input type="hidden" name="desc" value="Luxury">
                    <input type="hidden" name="price" value="Rs.2500">
                </form>
            </div>

            <!--card end-->

             <!--card starts-->
             <div class="card">
            <form action="/Product/ManageCart" method="GET">
                <div class="img"><img src="asset('css/color12.jpg') }}" alt="" ></div>
                <div class="desc"> Serioxyl</div>
                <div class="box">
                    <div class="price">Rs.6500</div>
                    <button type="submit" name="Add_To_Cart" class="btn">Add to Cart</button>
                    </div>
                    <input type="hidden" name="desc" value="Serioxyl">
                    <input type="hidden" name="price" value="Rs.6500">
                </form>
            </div>

            <!--card end-->

             <!--card starts-->

             <div class="card">
            <form action="/Product/ManageCart" method="GET">
                <div class="img"><img src="asset('css/color13.jpg') }}" alt="" ></div>
                <div class="desc"> Show</div>
                <div class="box">
                    <div class="price">Rs.7500</div>
                    <button type="submit" name="Add_To_Cart" class="btn">Add to Cart</button>
                    </div>
                    <input type="hidden" name="desc" value="Show">
                    <input type="hidden" name="price" value="Rs.7500">
                </form>
            </div>

            <!--card end-->

            
        </div>
    </section>
    
</body>
</html>




