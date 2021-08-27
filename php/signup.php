<?php
 include 'connectDB.php';
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
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
    <?php include 'header.php'; ?>
    <div class="container panel-margin">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="panel-title">SignUp</h2>
				</div>
				<div class="panel-body">
					<form action = "signup_submit.php" method = "post" >
						<div class="form-group">
							<input type="text" class="form-control" name="name" placeholder="Name" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="email" placeholder="Email" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="Password" required>
						</div>
						<div class="form-group">
							<input type="number" class="form-control" name="contact" placeholder="Contact" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="city" placeholder="City" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="address" placeholder="Address" required>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
				<div class="panel-footer">	
					Already have an account?Click <a href="login.php">here</a> to login.
				</div>
			</div>
		</div>
<?php include 'footer.php'; ?>

</body>
</html>