<?php
include ('password_script.php');
?>
<!DOCTYPE html>
<html lang="" class="">
	<head>
		<title>My Profile</title>
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		 <script src="js/bootstrap.bundle.js"></script>

		  	</head>
  <?php
include 'connection.php';
session_start();
$email=$_SESSION['email'];
$sql=mysqli_query($conn,"SELECT * FROM customer where email='$email'")or die(mysqli_error());
$row=mysqli_fetch_array($sql);
?>
	<body>
	
    <?php
    if (isset($_SESSION['email'])) {
        include('header1.php');
    }
    ?>

    <section class="generic-banner relative pb-5" style="background-color: rgb(221, 221, 221); padding-top:110px;">
			<div class="container">
				<div class="section-top-border">
					<h3 class="mb-5" align="center">Change Password</h3>
					<div class="row d-flex justify-content-center">
						<div class="col-lg-6">
							<!-- Default Card Example -->
							<div class="card" align="left">
								<div class="card-header">
									<i class="fa fa-key"></i> Password
								</div>
								<div class="card-body">
									<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
									 									  <div class="form-group">
									  	<div class="form-label-group mb-4">
									    <input type="email" class="form-control" readonly name="email" placeholder="Email id" value="<?php echo $row["email"] ?>">
									     										</div>
									   
									  </div>
									  <div class="form-group">
									  	<div class="form-label md-5 mb-4">
									    <input type="password" class="form-control" required="" name="password" placeholder="New Password"><small class="text-danger pl-3"><?php if($passwordErr!=1){ echo $passwordErr; } ?></small>										</div>
									    
									  </div>
									  <div class="form-group">
									  	<div class="form-label md-5 mb-4">
									    <input type="password" class="form-control" required="" name="cpassword" placeholder="Repeat Password">
                                        <small class="text-danger pl-3"><?php if($cpasswordErr!=1){ echo $cpasswordErr; } ?></small>
										</div>
									  </div>
									  <div class="form-group d-flex justify-content-between">
									<a class="btn btn-danger" href="http://localhost/bus/asset/login/profile.php">Go Back</a>
									<button type="submit" name="submit" value="submit" class="btn btn-primary pull-right" >Change Password</button>
</div>
									</form>
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