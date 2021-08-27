<?php include 'connectDB.php'; ?>

<?php
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$contact = $_POST["contact"];
$city = $_POST["city"];
$address = $_POST["address"];

$query1 = "SELECT * from `store`.`users` where email = '$email' and password  = '$password' ;";
$query2 = " INSERT INTO  `store`.`users` (`name`, `email`, `password`, `contact`, `city`,`address`) VALUES ('$name', '$email', '$password ', '$contact','$city' ,'$address'); ";

    mysqli_query($con,$query2);

        header("location: products.php");
?>
