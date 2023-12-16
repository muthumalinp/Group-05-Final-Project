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
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Make Purchase</title>
</head>

<body>
   
    <div class="container">
        <form method="POST" action="{{route('cartstore')}}">
            @csrf
             <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>PURCHASE SUMMARY</h1>
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
                      

                        if (isset($_SESSION['cart'])) {

                            foreach ($_SESSION['cart'] as $key => $value) {

                               
                                 $pn=$key+1;
                                echo "
                                <tr>
                                <td class='productno'>$pn</td>
                                <td class='productname'>$value[desc]</td>
                                <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
                                <td><input class='taxt-center iquantity' onchange='subTotal()' type='number' value='$value[Quantity]' min='1' max='10'></td>
                                <td class='itotal'></td>                                                         
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
                    
                    <button id="paymentDoneBtn">Payment Done</button>
                </div>
            </div>
        </div>
                    </form>
    </div>
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
