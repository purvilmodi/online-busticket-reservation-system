<?php
include ('profile_script.php');
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
             session_start();
include 'connection.php';
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
					<h3 class="mb-4 fw-bolder" align="center">My Profile</h3>
					<div class="row d-flex justify-content-center">
						<div class="col-lg-6">
							<!-- Default Card Example -->
							<div class="card" align="left">
								<div class="card-header" style="color:rgb(119, 119, 119);font-size:14px;">
									<i class="fa fa-user"></i> Account Data
								</div>
								<div class="card-body" align="left">
									<div class="row">
										<div class="col-sm-6">

											<h5 class="card-title">Name</h5>
											<p class="card-text" style="color:rgb(119, 119, 119);font-size:14px;"><?php echo $row['name'];?></p>
											<h5 class="card-title">Email</h5>
											<p class="card-text" style="color:rgb(119, 119, 119);font-size:14px;"><?php echo $row['email'];?></p>
											<h5 class="card-title">Mobile number</h5>
											<p class="card-text" style="color:rgb(119, 119, 119);font-size:14px;"><?php echo $row['mobile'];?></p>
										</div>
										<div class="col-sm-6">
											<h5 class="card-title">Address</h5>
											<p class="card-text" style="color:rgb(119, 119, 119);font-size:14px;"><?php echo $row['address'];?></p>
											<h5 class="card-title">Photo Profile</h5>
											<!-- <p><img src="http://localhost/bus/img/default.png" height="50" width="50" ></p> -->
											<p><img src="images/<?php echo $row['image']; ?>" height="50" width="50" style="border-radius:50px;"></p>
											<p><a href="http://localhost/bus/asset/login/password.php" class="btn btn-primary">Change Password</a></p>
											<p><button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Edit Account</button></p>
										</div>
									</div>
                                    <p class="text-success text-center"><?php echo $valid; ?></p>

								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- Log on to codeastro.com for more projects -->
				<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-bs-label="Close">
								
								</button>
							</div>
							<div class="modal-body">
								<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
									<div class="card-body">
										<div class="row">
											<div class="col-sm-14">	
												<div class="row form-group">
													<label for="name" class="control-label" style="color:rgb(119, 119, 119);font-size:15px;">Name:</label>
													<input type="text" class="form-control mb-2 mt-2" name="name" value="<?php echo $row['name'];?>" >
                                                    <small class="text-danger pl-3">
                                                <?php if($nameErr!=1){ echo $nameErr; }?>
                                                </small>
												</div>
												<div class="row form-group">
													<label for="email" class="control-label" style="color:rgb(119, 119, 119);font-size:15px;">Email:</label>
													<input readonly type="email" class="form-control mb-2 mt-2" name="email" value="<?php echo $row['email'];?>" >
												</div>
												<div class="row form-group">
													<label for="mobile" class="control-label" style="color:rgb(119, 119, 119);font-size:15px;">Mobile number:</label>
													<input type="text" class="form-control mb-2 mt-2" name="mobile" value="<?php echo $row['mobile'];?>" >
                                                    <small class="text-danger pl-3">
                                                    <?php if($mobileErr!=1){ echo $mobileErr; } ?>
                                                    </small>
												</div>
												<div class="row form-group">
													<label for="address" class="control-label" style="color:rgb(119, 119, 119);font-size:15px;">Address:</label>
													<input type="text" class="form-control mb-2 mt-2" name="address" value="<?php echo $row['address'];?>" >
                                                    <p class="text-danger pl-3">
                                            <?php if($addressErr!=1){ echo $addressErr; } ?>
                                            </p>
												</div>
                                                
												<div class="row form-group">
													<label for="" class="control-label" style="color:rgb(119, 119, 119);font-size:15px;">Photo Profile</label>
													<img src="images/<?php echo $row['image']; ?>" alt="" style="width:150px;height:150px;"><input type="file" class="form-control" value="" name="image" accept=".jpg,.jpeg,.png" >
												</div>
											</div>
										</div>
									</div>
								</div>
									<button class="btn btn-danger m-2" data-dismiss="modal">Close</button>
									<button type="submit" name="submit" value="submit" class="btn btn-primary m-2" >Save Changes</button>
							</form>
						</div>
					</div>
				</div>
				
                <!-- End footer Area -->		<!-- js -->
		
			<?php
			include 'footer.php';
			?>


			</body>
		</html>