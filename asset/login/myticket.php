<?php
include 'connection.php';
?>
<html>
<head>
</head>
<link rel="stylesheet" href="css/bootstrap.min.css">
		 <script src="js/bootstrap.bundle.js"></script>
          
		</head>
  <?php
//   error_reporting(0);
  session_start();
  $email=$_SESSION['email'];
  $sql=mysqli_query($conn,"SELECT * FROM customer where email='$email'")or die(mysqli_error());
  $row=mysqli_fetch_array($sql);
  $sql2=mysqli_query($conn,"SELECT * FROM payment where email='$email'")or die(mysqli_error());
  ?>
<body>
<?php

    if (isset($_SESSION['email'])) {
        include('header1.php');
    }
    ?>

<section class="service-area section-gap relative"  style="background-color: rgb(177 177 177);">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-lg-12">
						<!-- Default Card Example -->
						<div class="card mb-5" style="margin-top:150px;">
							<div class="card-header" align="center">
								<b style="color:rgb(72, 72, 72);font-size: 18px;font-weight: 500;"><i class="fa fa-ticket-alt"></i>Your Booking Details</b>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered">
										<thead>
											<tr style="line-height: 2em;">
                                                <th scope="col" style="color:#777;font-size:14px;font-weight:bolder;">Order-Id</th>
												<th scope="col" style="color:#777;font-size:14px;font-weight:bolder;">Ticket-Id</th>
												<th scope="col" style="color:#777;font-size:14px;font-weight:bolder;">Bus Schedule[Bus No,Address]</th>
												<th scope="col" style="color:#777;font-size:14px;font-weight:bolder;">Departure</th>
												<th scope="col" style="color:#777;font-size:14px;font-weight:bolder;">Seat No.</th>
                                                <th scope="col" style="color:#777;font-size:14px;font-weight:bolder;">Passenger Name.</th>
                                                <th scope="col" style="color:#777;font-size:14px;font-weight:bolder;">Passenger Age</th>
												<th scope="col" style="color:#777;font-size:14px;font-weight:bolder;">Price</th>
											</tr>
										</thead>
										<tbody>
                                            <?php
                                            
                                    while($row2=$sql2->fetch_assoc()){
                                        $bus_no=$row2['bus_no'];
                                        $sql1=mysqli_query($conn,"SELECT * FROM bus where no='$bus_no'")or die(mysqli_error());
                                        $row1=$sql1->fetch_assoc();            
                                         ?>
                                          <tr style="line-height: 1.678em;">
                                          <td style="color:#777;font-size:14px;font-weight:bolder;"><?php echo $row2['order_id'];?></td>
										  <td style="color:#777;font-size:14px;font-weight:bolder;"><?php echo $row2['ticket_id'];?></td>
                                          <td style="color: #777;font-size: 14px;font-weight: 300;"><?php echo $row1['no'];?> | <?php echo $row1['origin'];?>-<?php echo $row1['destination'];?></td>               
                                          <td style="color: #777;font-size: 14px;font-weight: 300;"><?php echo $row1['date'];?>, <?php echo $row1['time'];?></td>
                                           <td style="color: #777;font-size: 14px;font-weight: 300;"><?php echo $row2['seat'];?></td>
                                           <td style="color: #777;font-size: 14px;font-weight: 300;"><?php echo $row2['p_name'];?></td>
                                           <td style="color: #777;font-size: 14px;font-weight: 300;"><?php echo $row2['p_age'];?></td>
                                          <td style="color: #777;font-size: 14px;font-weight: 300;"><?php echo $row1['price'];?></td> 
                                          </tr>
										  <?php
                                        }
                                       ?>		
										</tbody>
									</table>
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
