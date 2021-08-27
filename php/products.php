<?php include 'header.php'; ?>  
<?php include 'CheckifAdded.php';?>  
<?php include 'connectDB.php'; ?>

<!DOCTYPE html>
<html>
	<head>
	    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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
   
		<div class="container panel-margin">
			<div class="jumbotron ">
				<h1>Welcome to our LifeStyle Store!</h1>
				<p>We have the best cameras, watches and shirts for you. No need to hunt
					around, we have all in one place.</p>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img class ="img-thumbnail" src="images/camera.jpg" alt="camera">
						<div class="caption">
							<h3>Canon EOS</h3>
							<p>Price : <i class="fa fa-rupee"></i> 80,000</p>
							<?php if(!isset($_SESSION["id"])){ ?>
								<a href="login.php" class = "button btn btn-info">Add To Cart</a>
							<?php } else {?>
								<?php if(check(1)){ ?>
								<a href="#" class = "button btn btn-success my-3">Add To Cart</a>
							<?php } else {?>
								<a href="add-to-cart.php?id=1" class = "button btn btn-info my-3">Add To Cart</a>
								<?php }
							}?>
						</div>
					</div>
				</div>



				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img  class ="img-thumbnail " src="images/camera.jpg" alt="camera">
						<div class="caption">
							<h3>Nikon DSLR</h3>
							<p>Price: <i class="fa fa-rupee"></i> 80,000</p>
	<?php if(!isset($_SESSION["id"])){ ?>
								<a href="login.php" class = "button btn btn-info my-3">Add To Cart</a>
							<?php } else {?>
								<?php if(check(2)){ ?>
								<a href="#" class = "button btn btn-success my-3">Add To Cart</a>
							<?php } else {?>
								<a href="add-to-cart.php ?id=2" class = "button btn btn-info my-3">Add To Cart</a>
								<?php }}?>
							<!-- <button type="button" class="btn btn-primary">Add to cart</button> -->
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img  class ="img-thumbnail " src="images/camera.jpg" alt="camera">
						<div class="caption">
							<h3>Sony DSLR</h3>
							<p>Price: <i class="fa fa-rupee"></i> 80,000</p>
	<?php if(!isset($_SESSION["id"])){ ?>
								<a href="login.php" class = "button btn btn-info my-3">Add To Cart</a>
							<?php } else {?>
								<?php if(check(3)){ ?>
								<a href="#" class = "button btn btn-success my-3">Add To Cart</a>
							<?php } else {?>
								<a href="add-to-cart.php ?id=3" class = "button btn btn-info my-3">Add To Cart</a>
								<?php }}?>
							<!-- <button type="button" class="btn btn-primary">Add to cart</button> -->
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img  class ="img-thumbnail " src="images/camera.jpg" alt="camera">
						<div class="caption">
							<h3>Olympus DSLR</h3>
							<p>Price: <i class="fa fa-rupee"></i> 80,000</p>
	<?php if(!isset($_SESSION["id"])){ ?>
								<a href="login.php" class = "button btn btn-info my-3">Add To Cart</a>
							<?php } else {?>
								<?php if(check(4)){ ?>
								<a href="#" class = "button btn btn-success my-3">Add To Cart</a>
							<?php } else {?>
								<a href="add-to-cart.php?id=4" class = "button btn btn-info my-3">Add To Cart</a>
								<?php }}?>
							<!-- <button type="button" class="btn btn-primary">Add to cart</button> -->
						</div>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img  class ="img-thumbnail " src="images/shirt.jpg" alt="shirt">
						<div class="caption">
							<h3>Titan Model #301</h3>
							<p>Price: <i class="fa fa-rupee"></i> 700</p>
	<?php if(!isset($_SESSION["id"])){ ?>
								<a href="login.php" class = "button btn btn-info my-3">Add To Cart</a>
							<?php } else {?>
								<?php if(check(5)){ ?>
								<a href="#" class = "button btn btn-success my-3">Add To Cart</a>
							<?php } else {?>
								<a href="add-to-cart.php?id=5" class = "button btn btn-info my-3">Add To Cart</a>
								<?php }}?>
							<!-- <button type="button" class="btn btn-primary">Add to cart</button> -->
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img  class ="img-thumbnail " src="images/shirt.jpg" alt="shirt">
						<div class="caption">
							<h3>Titan Model #201</h3>
							<p>Price: <i class="fa fa-rupee"></i> 700</p>
	<?php if(!isset($_SESSION["id"])){ ?>
								<a href="login.php" class = "button btn btn-info my-3">Add To Cart</a>
							<?php } else {?>
								<?php if(check(6)){ ?>
								<a href="#" class = "button btn btn-success my-3">Add To Cart</a>
							<?php } else {?>
								<a href="add-to-cart.php?id=6" class = "button btn btn-info my-3">Add To Cart</a>
								<?php }}?>
							<!-- <button type="button" class="btn btn-primary">Add to cart</button> -->
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img  class ="img-thumbnail " src="images/shirt.jpg" alt="shirt">
						<div class="caption">
							<h3>HMT Milan</h3>
							<p>Price: <i class="fa fa-rupee"></i> 700</p>
	<?php if(!isset($_SESSION["id"])){ ?>
								<a href="login.php" class = "button btn btn-info my-3">Add To Cart</a>
							<?php } else {?>
								<?php if(check(7)){ ?>
								<a href="#" class = "button btn btn-success my-3">Add To Cart</a>
							<?php } else {?>
								<a href="add-to-cart.php?id=7" class = "button btn btn-info my-3">Add To Cart</a>
								<?php }}?>
							<!-- <button type="button" class="btn btn-primary">Add to cart</button> -->
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img  class ="img-thumbnail " src="images/shirt.jpg" alt="shirt">
						<div class="caption">
							<h3>Faber Luba #111</h3>
							<p>Price: <i class="fa fa-rupee"></i> 700</p>
	<?php if(!isset($_SESSION["id"])){ ?>
								<a href="login.php" class = "button btn btn-info my-3">Add To Cart</a>
							<?php } else {?>
								<?php if(check(8)){ ?>
								<a href="#" class = "button btn btn-success my-3">Add To Cart</a>
							<?php } else {?>
								<a href="add-to-cart.php?id=8" class = "button btn btn-info my-3">Add To Cart</a>
								<?php }}?>
							<!-- <button type="button" class="btn btn-primary">Add to cart</button> -->
						</div>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img  class ="img-thumbnail " src="images/watch.jpg" alt="watch">
						<div class="caption">
							<h3>H&W</h3>
							<p>Price: <i class="fa fa-rupee"></i> 1000</p>
	<?php if(!isset($_SESSION["id"])){ ?>
								<a href="login.php" class = "button btn btn-info my-3">Add To Cart</a>
							<?php } else {?>
								<?php if(check(9)){ ?>
								<a href="#" class = "button btn btn-success my-3">Add To Cart</a>
							<?php } else {?>
								<a href="add-to-cart.php?id=9" class = "button btn btn-info my-3">Add To Cart</a>
								<?php }}?>
							<!-- <button type="button" class="btn btn-primary">Add to cart</button> -->
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img  class ="img-thumbnail " src="images/watch.jpg" alt="watch">
						<div class="caption">
							<h3>Luis Phil</h3>
							<p>Price: <i class="fa fa-rupee"></i> 1000</p>
	<?php if(!isset($_SESSION["id"])){ ?>
								<a href="login.php" class = "button btn btn-info my-3">Add To Cart</a>
							<?php } else {?>
								<?php if(check(10)){ ?>
								<a href="#" class = "button btn btn-success my-3">Add To Cart</a>
							<?php } else {?>
								<a href="add-to-cart.php?id=10" class = "button btn btn-info my-3">Add To Cart</a>
								<?php }}?>
							<!-- <button type="button" class="btn btn-primary">Add to cart</button> -->
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img  class ="img-thumbnail " src="images/watch.jpg" alt="watch">
						<div class="caption">
							<h3>John Zok</h3>
							<p>Price: <i class="fa fa-rupee"></i> 1000</p>
	<?php if(!isset($_SESSION["id"])){ ?>
								<a href="login.php" class = "button btn btn-info my-3">Add To Cart</a>
							<?php } else {?>
								<?php if(check(11)){ ?>
								<a href="#" class = "button btn btn-success my-3">Add To Cart</a>
							<?php } else {?>
								<a href="add-to-cart.php?id=11" class = "button btn btn-info my-3">Add To Cart</a>
								<?php }}?>
							<!-- <button type="button" class="btn btn-primary">Add to cart</button> -->
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img  class ="img-thumbnail " src="images/watch.jpg" alt="watch">
						<div class="caption">
							<h3>Watch 4</h3>
							<p>Price: <i class="fa fa-rupee"></i> 1000</p>
	<?php if(!isset($_SESSION["id"])){ ?>
								<a href="login.php" class = "button btn btn-info my-3">Add To Cart</a>
							<?php } else {?>
								<?php if(check(12)){ ?>
								<a href="#" class = "button btn btn-success my-3">Add To Cart</a>
							<?php } else {?>
								<a href="add-to-cart.php  ?id=12" class = "button btn btn-info my-3">Add To Cart</a>
								<?php }}?>
							<!-- <button type="button" class="btn btn-primary">Add to cart</button> -->
						</div>
					</div>
				</div>
			</div>
		</div>
        <!--Footer  -->
    <footer class = "pannel-footer"  style="margin:90px 0px 0px 0px; position: static; padding :10px;   display:flex; justify-content:center; background-color:#343a40; color: rgb(255, 254, 254);">
        <span> Copyright @ LifeStyle Stores. All Rights Reserved | Contact Us: +91
            90000
            00000 </span>
    </footer>

	</body>
</html>