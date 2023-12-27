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
    <!--navigation bar end-->
    <form method="post" action="{{ route('make.purchase') }}">
    @csrf

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
            
            <div class="col-lg-8">
                 <table class="table">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">Product No</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>                        
                        </tr>
                    </thead>

                    <tbody class="text-center">
                        <?php
                            if(isset($_SESSION['cart'])){
                               
                            
                                foreach($_SESSION['cart'] as $key => $value)
                                {
                                     $pn=$key+1;
                                

                                     echo "
                                        <tr>
                                        <td class='productno'>$pn</td>
                                        <td class='productname'>$value[desc]</td>
                                        <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
                                        <td>
                                            <form action='/Product/ManageCart' method='GET'>
                                            <input class='taxt-center iquantity' name='Mod_Quantity' onchange='subTotal(); this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                                            <input type='hidden' name='desc' value='$value[desc]'>
                                            </form>
                                        </td>
                                        <td class='itotal'></td>
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
                    <h4>Grand Total:</h4>
                    <h5 class="text-right" id="gtotal"></h5>
                    <br>
                                        
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="fullname" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="number" name="phone_no" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">

                        Order placed

                            </label>
                        </div>
                        <br>
                
                <button type="submit">Make Purchase</button>

                   
                 </div>
            </div>

        </div>
      
    </div>

    
    </form>

     <script>

                var gt=0;
                var iprice=document.getElementsByClassName('iprice');
                var iquantity=document.getElementsByClassName('iquantity');
                var itotal=document.getElementsByClassName('itotal');
                var gtotal=document.getElementById('gtotal');

                function subTotal()
                {
                    gt=0;
                    for(i=0;i<iprice.length;i++)
                    {
                        itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
                        console.log(iprice[i].value);
                        gt=gt+(iprice[i].value)*(iquantity[i].value);
                        
                    }
                    gtotal.innerText=gt;
                }
                
                    subTotal();




    </script>

    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>