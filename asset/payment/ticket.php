<?php 
error_reporting(0);
session_start();
$alert='';
include 'connection.php';

if(isset($_POST['submit']))
{
$id = $_POST['id'];

$sql = mysqli_query($conn,"select * from payment where order_id='$id'");
$numRows = mysqli_num_rows($sql);
$row=mysqli_fetch_array($sql);

$bus_no=$row['bus_no'];
$currentDate = date('Y-m-d');
$sql1=mysqli_query($conn,"select * from bus where no='$bus_no' and date >='$currentDate'");
$numRows1 = mysqli_num_rows($sql1);
$row1=mysqli_fetch_array($sql1);

if($numRows >= 1 and $numRows1 >=1){
	$_SESSION["id"]=$row['order_id'];
header("location:http://localhost/bus/asset/payment/ticket_details.php");   // create my-account.php page for redirection 	
}
else{
	$alert="Please Check Order-Id";
	}
}
?>
<!DOCTYPE html>
<html lang="" class="">
	<head>


		 <link rel="stylesheet" href="css/bootstrap.min.css">
		 <script src="js/bootstrap.bundle.js"></script>

		 	</head>
	<body>
    <?php
    if (!isset($_SESSION['email'])) 
    {
        include 'header.php';
    }
    else
    {
        include 'header1.php';
    }
    ?>
<section class="service-area section-gap relative"  style="background-color: rgb(177 177 177);">
			<div class="overlay overlay-bg "></div>
			<div class="container">
				<div class="row d-flex justify-content-center ">
					<div class="col-lg-6" style="margin:120px 0px;">
						<!-- Default Card Example -->
						<div class="card wobble">
					  <div class="card-header p-3" style="color:rgb(119, 119, 119);font-size:14px;">
					   <i class="fa fa-ticket"></i> Check My Tickets
					  </div>
					  <div class="card-body">
					    <form action="" method="post">
									<div class="form-group">
										<label for="exampleInputEmail1" style="color:rgb(119, 119, 119);font-size:14px;">Enter your booking code</label>
										<input type="text" class="form-control my-3" name="id" placeholder="Order Id" required="">
									</div>
                                    <p class="text-danger text-center"><?php echo $alert; ?></p>
									<button type="submit" name="submit" class="btn btn-success float-end">Search</button>
								</form>
					  </div>
					</div>
					</div>
			</section>
			<!-- End footer Area -->		<!-- js -->
		
            <?php
include ('footer.php');
?>

	</body>
</html>


