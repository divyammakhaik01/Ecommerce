<?php
$server = '127.0.0.1:3307';
$pass = "";
$user = "root";

$con = mysqli_connect($server,$user,$pass);
if(!$con) echo "Not Connected";
if(!isset($_SESSION)){
        session_start();
    }
?>
