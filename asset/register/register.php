<?php
include ('register_script.php');
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<title>Register</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		 <script src="js/bootstrap.bundle.js"></script>
		 <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

		 <style>
			 .container input,.container textarea{
				background-color: rgba(255,255,255,0.07);
				border:none;
				padding:15px;
			 }
			 .container a{
				 color: rgb(105, 172, 248);
				 text-decoration: none;
			 }
		 </style>
		</head>
	<body>
<!-- header part -->

<?php 
include('header.php')
?>

    
			<section style="background-image:linear-gradient(0deg,#000000 0%,#6fa6d3 100%);padding:120px 0px;">
			<div class=""></div>
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-lg-8">
						<!-- Default Card Example -->
						<div class="card mb-5" style="background-color:rgba(255,255,255,0.13);box-shadow:0 26px 42px rgba(0,0,0,0.1);color:white;">
							<div class="card-header" style="color:rgb(119, 119, 119);font-size:14px;color:white">
								<i class="fa fa-user"></i>  Customer Registration
							</div>
							<div class="card-body">
								<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
									<div class="form-group">
										<div class="form-group mb-4">
											<div class="form-label-group">
												<input type="text" name="name" class="form-control" required="" placeholder="Full Name" value="<?php echo $set_name;?>">
												<small class="text-danger pl-3">
                                                <?php if($nameErr!=1){ echo $nameErr; }?>
                                                </small>											</div>
										</div>
									</div>
									<div class="form-group row mb-4">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<div class="form-label-group">
													<input type="text" name="email" class="form-control" required="" placeholder="Email" value="<?php echo $set_email;?>">
													<small class="text-danger pl-3">
                                                        <?php if($emailErr!=1){ echo $emailErr; } ?>
                                                    </small>												</div>
											</div>
											<div class="col-md-6">
												<div class="form-label-group">
													<input type="text" maxlength="10"  id="mobile" name="mobile" class="form-control" required="" placeholder="Contact Number" value="<?php echo $set_mobile;?>">
													<small class="text-danger pl-3">
                                                    <?php if($mobileErr!=1){ echo $mobileErr; } ?>
                                                    </small>												</div>
											</div>
										
									</div>
									<div class="form-group">							
										<div class="form-label-group">
											<textarea class="form-control" name="address" placeholder="Address"></textarea>
											<p class="text-danger pl-3">
                                            <?php if($addressErr!=1){ echo $addressErr; } ?>
                                            </p>										</div>
									</div>
									<div class="form-group mb-4">
										<div class="form-label-group">
											<input type="text" id="username" name="username" class="form-control" required="" placeholder="Username" value="<?php echo $set_username;?>">
											<small class="text-danger pl-3">
                                            <?php if($usernameErr!=1){ echo $usernameErr; } ?>
                                            </small>										</div>
									</div>
									<div class="form-group row mb-4">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<input type="password" class="form-control form-control-user" name="password" placeholder="Password" value="<?php echo $set_password;?>">
                                            <small class="text-danger pl-3">
                                            <?php if($passwordErr!=1){ echo $passwordErr; } ?>
                                            </small>
										</div>
										<div class="col-sm-6">
											<input type="password" class="form-control form-control-user" name="cpassword" placeholder="Repeat Password">
                                            <small class="text-danger pl-3">
                                            <?php if($cpasswordErr!=1){ echo $cpasswordErr; } ?>
                                            </small>
										</div>
									</div>
									<small class="text-danger pl-3">
                                    <?php echo $valid; ?>
                                    </small>	
								<button type="submit" class="btn btn-info btn-block mx-auto w-100" name="register" value="register">Register</button>
								</form>
								<hr>
								<div class="text-center">
									<p>Already Registered? <a class="" href="http://localhost/bus/asset/login/login.php">Login Now</a></p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- End footer Area -->		<!-- js -->
		<?php
        include 'footer.php';
        ?>
			</body>
		</html>