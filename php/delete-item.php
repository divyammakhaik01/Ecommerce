<?php 

function doit($item_id){
include "connectDB.php";

// $item_id = $_GET['id'];
$user_id = $_SESSION['id'];

$query = "DELETE from `store`.`users_items` where user_id = '$user_id' and item_id = '$item_id' ";
if(mysqli_query($con , $query) == true)
    echo "Hello";
else
    echo "Hi";

// header("location: cart.php");
header("location: cart.php");

}
$item_id = $_GET['id'];

doit($item_id);
?>