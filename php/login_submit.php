<?php include 'connectDB.php'; ?>
<?php
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * from `store`. `users` where email = '$email' and password = '$password';";

$sql_status = mysqli_query($con,$sql);

if(mysqli_num_rows($sql_status) == 0){
        header("location: signup.php");
}else{
    $row  = mysqli_fetch_array($sql_status);
    $_SESSION["email-id"] = $email;
    $_SESSION["id"] = $row["id"];

    header("location: products.php");
}

?>