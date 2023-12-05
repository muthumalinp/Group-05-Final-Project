<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/product/productcart.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Cart</title>
</head>
<body>
    <nav class="navbar">
        <div class="logo"><h1>Salon Yaara</h1></div>
        <ul class="menu">
            <li><a href="/Product/HairStraghtening" class="active">Hair Straightening</a></li>
            <li><a href="/Product/HairColoring&Highliting">Hair Coloring & Highlighting </a></li>
            <li><a href="/Product/HairTreatment" >Hair Treatment</a></li>
            <li><a href="/Product/Facial&CleanUp" >Facial & Cleanup</a></li>
            <li><a href="/Product/Cart" ><i class="fas fa-shopping-cart"></i></a></li>
        </ul>

            <!--for responsive button-->

        <div class="menu-btn">
            <i class="fa-bars"></i>
        </div>
    </nav>
    <!--navigation bar end-->

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>

            <div class="col-lg-8">
                 <table class="table">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">Produc No</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        <?php
                            $total=0;
                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $key => $value)
                                {
                                    $total=$total+intval($value['price']);

                                     echo "
                                        <tr>
                                        <td>1</td>
                                        <td>$value[desc]</td>
                                        <td>$value[price]</td>
                                        <td><input class='taxt-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
                                        <td>
                                            <form action='/Product/ManageCart' method='GET'>
                                                 <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button>
                                                 <input type='hidden' name='desc' value='$value[desc]'>
                                            </form>
                                        </td>
                                        </tr>
                                    ";
                                } 
                            }
                        ?>

                       
                    </tbody>
                </table>
            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Total:</h4>
                    <h5 class="text-right"><?php echo $total ?></h5>
                    <br>
                    <form>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Cash On Delivery
                            </label>
                        </div>
                        <br>
                        <button class="btn btn-primary btn-block">Make Purchase</button>
                    </form>
                </div>
                        </div>
            </div>

        </div>
    </div>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>