<?php include 'connectDB.php'; ?>
<?php include 'header.php'; ?>

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


          
        <div class="container panel-margin my-5">
            <table class="table table-hover">
            <?php
            $user_id = $_SESSION['id'];
            $query = "SELECT p.id ,p.name,p.price from `store`.`items` p INNER JOIN `store`.`users_items` up ON up.user_id = '$user_id' where up.item_id = p.id and up.status = 'Added to cart' ;";
            $result = mysqli_query($con , $query) ;
            if(mysqli_num_rows($result) == 0){
                echo '<h1 class="container border-dark border-5">Add products to cart first. Goto <a href="products.php">Products</a> page.</h1>';
                $total = -10;
            }else{
                $total  = 0;
                $count = 1;
            }
            ?>
            <?php if($total != -10){ ?>
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                <?php while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td> <?php echo $count ?></td>
                    <td> <?php echo $row['name'] ?></td>
                    <td> <?php echo $row['price'] ?></td>
                    <td><?php $total+=$row['price'] ?></td>
                    <td> <a href = "delete-item.php?id=<?php echo $row['id']; ?>" class="button btn btn-danger ">Delete</a>  </td>
                    <?php $count++; ?>
                </tr>
                <?php }?>

<!-- Confirm order -->

                <tr>
                    <td></td>
                    <td></td>
  
                    <td>Total: <i class="fa fa-rupee"></i><?php  echo $total; ?></td>
                    <td><a href="confirmOrder.php" class="btn btn-primary ">Confirm Order</a></td>
                </tr>
                <?php }?>
            </table>
        </div>
    <footer class = "pannel-footer"  style="margin:528px 0px 0px 0px; position: relative; padding :10px;   display:flex; justify-content:center; background-color:#343a40; color: rgb(255, 254, 254);">
        <span> Copyright @ LifeStyle Stores. All Rights Reserved | Contact Us: +91
            90000
            00000 </span>
    </footer>
        
    </body>
</html>