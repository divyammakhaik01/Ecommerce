

<!DOCTYPE html>
<html>
    <head>
       <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="index1.css">
    </head>
    <body>
<?php
include 'connectDB.php';
include 'header.php';
    $user_id = $_SESSION['id'];
    $q1 = "SELECT item_id from `store`.`users_items` where user_id = '$user_id ' and status = 'Added to cart' ";
    $res_q1 = mysqli_query($con, $q1);
    while($a = mysqli_fetch_array($res_q1)){
        $item_id = $a['item_id'];
        $q2  = "UPDATE `store`.`users_items` set status = 'Confirmed' where user_id = '$user_id' ";
        $ans  =mysqli_query($con, $q2);
    }
?>
         <div class="container panel-margin">
            <div class="alert alert-success">
                Your order is confirmed. Thank you for shopping with us.
                <a href="products.php">Click here</a> to purchase any other item.
            </div>        
      
    <footer class = "pannel-footer"  style="margin:528px 0px 0px 0px; position: relative; padding :10px;   display:flex; justify-content:center; background-color:#343a40; color: rgb(255, 254, 254);">
        <span> Copyright @ LifeStyle Stores. All Rights Reserved | Contact Us: +91
            90000
            00000 </span>
    </footer>
    </body>
</html>