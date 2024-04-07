<?php
include("login_script.php");
?>

<!DOCTYPE html>
<html lang="" class="">
	<head>


		 <link rel="stylesheet" href="css/bootstrap.min.css">
		 <script src="js/bootstrap.bundle.js"></script>

		 </head>
	<body class="">
		 <?php
         include('header.php');
         ?>

		<!-- navbar -->
	
		<section class="generic-banner" style="background-image:linear-gradient(0deg,#000000 0%,#6fa6d3 100%); padding:150px 0px">
			<div class="container">
				<div class="row height align-items-center justify-content-center">
					<div class="col-lg-5">
						<div class="card card-login mx-auto mt-10"  style="background-color:rgba(255,255,255,0.13);box-shadow:0 26px 42px rgba(0,0,0,0.1);color:rgb(212, 212, 206);">
							<div class="card-header">Customer Login Panel</div>
							<div class="card-body" align="left">
							<p class="text-danger text-center"><?php echo $alert; ?></p>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
									<div class="form-group">
										<div class="form-label-group mb-2">
											<input type="text" id="email" name="email" class="form-control" placeholder="Email" required="required" style="background-color: rgba(255,255,255,0.07);border:none;padding:15px;">
										</div>
									</div>
									<div class="form-group mb-2">
										<div class="form-label-group">
											<input type="password" name="password" class="form-control" placeholder="Password" required="required" style="background-color: rgba(255,255,255,0.07);border:none;padding:15px;">
										</div>
									</div>
									<div class="form-group">
										<div class="checkbox">
											<label>
												<a href="http://localhost/bus/asset/login/loginpas.php" class="d-block text-light">Forget Password</a>
											</label>
										</div>
									</div>
									<button type="submit" name="submit" value="submit" class="btn btn-success btn-block mb-2 mt-3 mx-auto w-100" >Login as Customer</button>
								</form>
								<div class="text-center">
									<p><a class="d-block mt-3 text-light text-decoration-none" href="http://localhost/bus/asset/register/register.php">Register Now</a>
									<hr>
									<b><a class="d-block mt-3 text-light text-decoration-none" style="font-size:15px;" href="http://localhost/bus/admin/login.php">Login as Admin</a></b>
									
								</p>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

			<?php
            include 'footer.php';
            ?>
		

	</body>
</html>