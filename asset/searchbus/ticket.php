
<!DOCTYPE html>
<html lang="" class="">
	<head>
	
	<link rel="stylesheet" href="aos-master/aos-master/dist/aos.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	 <script src="js/bootstrap.bundle.js"></script>
          
	<style>
/* this page css */

ul li{
	color:#777;
	line-height:25px;
	font-weight:500;
	font-size:15px;
}
ul b{
	color:rgb(72, 72, 72);
	font-size:13px;
	letter-spacing:1px;
	font-weight:400;
}
  </style>	</head>
  <?php
include 'connection.php';
session_start();
$no = $_GET['no'];
$email=$_SESSION['email'];
$sql1=mysqli_query($conn,"SELECT * FROM customer where email='$email'")or die(mysqli_error());
$row1=mysqli_fetch_array($sql1);
$sql=mysqli_query($conn,"SELECT * FROM bus where no='$no'")or die(mysqli_error());
$row=mysqli_fetch_array($sql);

// seat 
$sql3 = "SELECT seat FROM payment WHERE bus_no='$no'";
$result = $conn->query($sql3);
// Check for errors
if (!$result) {
    die("Database query failed.");
}

// Initialize seats array (0 for available, 1 for reserved)
$seats = array_fill_keys(range(1, 24), 0);

// Mark reserved seats based on database values
while ($row3 = $result->fetch_assoc()) {
    $seatNumber = $row3['seat'];
    $seats[$seatNumber] = 1;
}

?>
	<body style="overflow-x:hidden;">
		<!-- header part -->
<?php
        if (isset($_SESSION['email'])) {
        include('header1.php');
    }
    ?>

		<section class="service-area section-gap relative" style="background-color: rgb(177 177 177);">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<!-- Default Card Example -->
						<div class="card mb-5" style="margin-top:120px;" data-aos="fade-right">
							<div class="card-header" style="color:#777;">
								<i class="fa fa-info-circle"></i> Ticket Description
							</div>
							<div class="card-body">
								<ul style="list-style-type:none;">
									<li>► Destination: <b><?php echo $row['origin']?>-<?php echo $row['destination'] ?></b></li>
									<li>► Type of Bus:  <b><?php echo $row['type'] ?></b></li>
									<li>► Bus Number:  <b><?php echo $_SESSION['no']=$row['no'] ?></b></li>
									<li>► Departure: <b><?php echo $row['origin'] ?></b></li>
									<li>► Arrival: <b><?php echo $row['destination'] ?></b></li>
									<li>► Prices: <b><?php echo $row['price'] ?></b></li>
									<li>► Depart Date: <b><?php echo $row['date'] ?></b></li>
									<li>► Arrival Time: <b><?php echo $row['arrival_time'] ?></b></li>
									<li>► Please select a seat</li>
									
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4" data-aos="fade-up">
						<form action="passenger.php" method="post">
							
							<!-- Default Card Example -->
							<div class="card mb-5" style="margin-top:120px;">
								<div class="card-header" style="color:#777;">
									<i class="fa fa-bus"></i> Seat Selection
								</div>
								<center class="">
									
								<table class="">
									<tr height='50'>
										
									<td class='btn-group' width='139'>
	                                 </td>
										<td class='btn-group' width='139'>
											<!--=================================================START 3C=========================================================-->
											<label class='btn btn-primary'>
												<a value='' autocomplete='off' disabled='disabled'>Driver's Seat</a>
											</label>
										</td>
									</tr>
									</table>
									<div style="margin-left:30px;">
									<?php
    // Display seats
    $counter=0;
    $counter1=0;
    foreach ($seats as $seatNumber => $status) {
        $disabled = $status ? "disabled" : "";
		$checked = $status ? "checked" : "";
        echo "<input type='checkbox' name='kursi[]' onclick='EnableDisableTextBox(this)' value='$seatNumber' $disabled $checked> $seatNumber &nbsp; &nbsp;";
        $counter++;
        $counter1++;
        if($counter % 2==0){
            echo "&nbsp; &nbsp; &nbsp;";
        }
        if ($counter % 4 == 0) {
            echo "<br><br>";
        }
    }
    ?>				
	</div>
													</center>
												</div>
											</div>
											<!-- Log on to codeastro.com for more projects -->
											<div class="col-lg-4" data-aos="fade-left">
												<!-- Default Card Example -->
												<div class="card mb-5" style="margin-top:120px;">
													<div class="card-header" style="color:#777;">
														<i class="fa fa-bookmark"></i> Booking Confirmation
													</div>
													<div class="alert alert-success" role="alert">
														<p>After selecting a seat, please click the 'Next' button to proceed.</p>
														<div class='btn-group'>
															<a href="http://localhost/bus/asset/searchbus/show.php" class='btn btn-default' style="color:rgb(0, 86, 179);">Go Back</a>
															<button class="btn btn-info pull-right" disabled="disabled" id="txtPassportNumber" type="submit">Next</button>
															
														</div>
													</div>
													<form>
													</div>
												</div>
											</section>
                                            <?php
			include 'footer.php';
			?>

<!-- bus ticket script -->

	<script type="text/javascript">
    function EnableDisableTextBox(chkPassport) {
        var txtPassportNumber = document.getElementById("txtPassportNumber");
        txtPassportNumber.disabled = chkPassport.checked ? false : true;
        if (!txtPassportNumber.disabled) {
            txtPassportNumber.focus();
        }
    }

</script>
	

<script src="aos-master/aos-master/dist/aos.js"></script>
  <script>
    AOS.init({
    offset:200
    });
  </script>
	</body>
</html>
