<?php
    require 'connectDB.php';
    // get the item_id and add to cart
    $item_id = $_GET["id"];
    $user_id = $_SESSION["id"];
    $query = "INSERT INTO `store`.`users_items`(`user_id`, `item_id`, `status`) VALUES('$user_id', '$item_id', 'Added to cart' ); ";
    // $query2 = " INSERT INTO  `store`.`users` (`name`, `email`, `password`, `contact`, `city`,`address`) VALUES ('$name', '$email', '$password ', '$contact','$city' ,'$address'); ";


    $query_result = mysqli_query($con, $query);
    // if($query_result == true){
    //     echo "Hello" ;
    // }
    // else{
    //     echo "hhh".mysqli_error($con);
    // }

    header("location: products.php");
?>