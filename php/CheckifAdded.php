<?php 
    function check ($item_id){
        require 'connectDB.php';
        $user_id = $_SESSION['id'];
        $query1  = "SELECT * FROM `store`.`users_items` WHERE item_id = '$item_id' AND user_id = '$user_id' AND STATUS = 'Added to cart'";  
        $res = mysqli_query($con , $query1);
        
        if(mysqli_num_rows($res) >= 1){
            return TRUE;
        }else{
            return FALSE;
        }
    }
?>
