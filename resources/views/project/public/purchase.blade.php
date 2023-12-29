<!DOCTYPE html>
<html>
<?php 
     session_start();
    $con=mysqli_connect("localhost","root","","final_project");

    if(mysqli_connect_error()){
        echo "<script>       
        alert('can not connect to database');                     
        window.location.href='/Product/Cart';
             </script>";
             exit();
        }

        if($_SERVER["REQUEST_METHOD"]=="GET")
        {
            if(isset($_GET['purchase']))
            {
             $query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Email`, `Pay_Mode`) VALUES ('$_GET[full_name]','$_GET[phone_no]','$_GET[email]','$_GET[pay_mode]')";             
             if(mysqli_query($con,$query1)){
                    $Order_id=mysqli_insert_id($con);
                   $query2="INSERT INTO `user_orders`(`Order_id`, `Product_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
                    $stmt=mysqli_prepare($con,$query2);
                    if($stmt){
                            mysqli_stmt_bind_param($stmt,"isii",$Order_id,$Product_Name,$Price,$Quantity);
                            foreach($_SESSION['cart'] as $key => $values)
                            {
                                $Product_Name=$values['desc'];
                                $Price=$values['price'];
                                $Quantity=$values['Quantity'];
                                mysqli_stmt_execute($stmt);

                            }
                            unset($_SESSION['cart']);
                          

                                    echo "<script>       
                                       
                                    window.location.href='/Product/MakePurchase';
                                    </script>";
                
                    }

                    else{
                        echo "<script>       
                        alert('SQL Query prepare error');                     
                        window.location.href='/Product/Cart';
                </script>";
                    }
             } 

             else{
                        echo "<script>       
                            alert('SQL error');                     
                            window.location.href='/Product/Cart';
                    </script>";
             }
        }

        }
        ?>
      
    </html>