<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/product/productform.css')}}">
    <title>managecart</title>
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
    </nav><!--navigation bar end-->
    
      
    
    <?php 
     session_start();
   

        if($_SERVER["REQUEST_METHOD"]=="GET"){
            if(isset($_GET['Add_To_Cart']))
            {
                if(isset($_SESSION['cart']))
                {
                    $myitems=array_column($_SESSION['cart'],'desc');
                    if(in_array($_GET['desc'],$myitems))
                        {
                        echo"<script>
                   
                        window.location.href='/Product/HairStraghtening';
                        </script>";
                        }
                    else{
                        $count=count($_SESSION['cart']);
                         $_SESSION['cart'][$count]=array('desc'=>$_GET['desc'],'price'=>$_GET['price'],'Quantity'=>1);
                         echo"<script>
                         
                         window.location.href='/Product/HairStraghtening';
                         </script>"; 
                        }
                }   
                else
                {
                    $_SESSION['cart'][0]=array('desc'=>$_GET['desc'],'price'=>$_GET['price'],'Quantity'=>1);
                    echo"<script>
                        
                        window.location.href='/Product/HairStraghtening';
                        </script>";
                } 

                if(isset($_GET['Remove_Item'])){
                    foreach($_SESSION['cart'] as $key =>$value){
                            print_r($key);
                    }
                }
            }
            if(isset($_GET['Remove_Item']))
            {
                foreach($_SESSION['cart'] as $key => $value)
                {
                    if($value['desc']=$_GET['desc'])
                    {                        
                        unset($_SESSION['cart'][$key]);
                        $_SESSION['cart']=array_values($_SESSION['cart']);
                        echo"<script>
                            
                        window.location.href='/Product/Cart';
                             </script>";
                    }
                }
            }
        }
    ?>

    </body>
    </html>


    
    