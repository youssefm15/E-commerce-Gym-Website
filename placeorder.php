
<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "register");


$genrate = rand(0,10000);
$boolean = true;
foreach($_SESSION["shopping_cart"] as $keys => $values)						
{
$id = $values["item_id"];
$price = $values["item_price"];
$user_id = $_SESSION['id'];    
    $sql = "insert into user_order values ($user_id,$id,  $price, $genrate )";
  $query = mysqli_query($connect,$sql);
    if(mysqli_errno($connect)){
        
        
        
        $boolean = false;
        break;
    }
    
    
}
?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  
  <body>
  
       <div class="placeorder content-wrapper">
   <h1><?php if( $boolean){ 
           echo ("Your Order Has Been Placed , your order ID is " .$genrate);
}
       else {
           echo ("error");
       }
           ?>
            </h1>

    <p>Thank you for ordering with us, we'll contact you by email with your order details.</p>
</div>

  </body>
  <script type="text/javascript">
      setTimeout(function () {
   window.location.href= 'index.php'; 

},5000); 
    </script>
</html>

   

