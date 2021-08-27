<?php include 'connectDB.php'; ?>


<div class="navbar navbar-expand-sm  bg-dark ">
            <div class="container">
                <a href="index.php" class="nav-link font-weight-bolder" style="color: white;">LifeStyle Stores
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#data">
                    <div class="navbar-toggler-icon"></div>
                </button>
            </div>

            <!-- Navbar links  -->
            <div class="collapse navbar-collapse" id="data">
                <ul class="nav navbar-nav ">
                    
                    <?php if(isset($_SESSION["id"])){ ?>
                           <li style="border:2px solid white; margin:0px 10px 0px 110px;  border-radius: 5px; "; class="nav-item bg-info">
                        <a href="cart.php" class="nav-link" style="color: white;"> <img
                                 src="https://img.icons8.com/ios-glyphs/30/000000/login-rounded-right--v1.png" />
                            Cart</a>
                        </li>
                            <li class="nav-item bg-danger" style="border:2px solid white; margin:0px 10px 0px 10px;  border-radius: 5px; ";>
                        <a href="logout.php" class="nav-link" style="color: white; "> <img
                                 src="https://img.icons8.com/ios-glyphs/30/000000/login-rounded-right--v1.png" />
                            Logout</a>
                        </li>
	                     <?php }else{ ?>
                           <li style="border:2px solid white; margin:0px 10px 0px 110px;  border-radius: 5px; "; class="nav-item bg-info">
                        <a href="login.php" class="nav-link" style="color: white;"> <img
                                 src="https://img.icons8.com/ios-glyphs/30/000000/login-rounded-right--v1.png" />
                            Login</a>
                        </li>
                            <li class="nav-item bg-danger" style="border:2px solid white; margin:0px 10px 0px 10px;  border-radius: 5px; ";>
                        <a href="signup.php" class="nav-link" style="color: white; "> <img
                                 src="https://img.icons8.com/ios-glyphs/30/000000/login-rounded-right--v1.png" />
                            SignUp</a>
                        </li>
							<?php } ?>

                </ul>
            </div>
        </div>
