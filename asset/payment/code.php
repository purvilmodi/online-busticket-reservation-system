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
  error_reporting(0);
  session_start();
  $email=$_SESSION['email'];
  $no=$_SESSION['no'];
  $order=$_SESSION['id'];
  $sql=mysqli_query($conn,"SELECT * FROM customer where email='$email'")or die(mysqli_error());
  $row=mysqli_fetch_array($sql);
  $sql1=mysqli_query($conn,"SELECT * FROM bus where no='$no'")or die(mysqli_error());
  $row1=mysqli_fetch_array($sql1);
  $sql2=mysqli_query($conn,"SELECT * FROM booking where order_id='$order'")or die(mysqli_error());
  ?>
<body>
    <!-- header part -->

    <?php

if (isset($_SESSION['email'])) {
    include('header1.php');
}
?>
<section class="service-area section-gap relative"  style="background-color: rgb(177 177 177);">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-lg-10">
						<!-- Default Card Example -->
						<div class="card mb-5" style="margin-top:150px;">
							<div class="card-header" align="center">
								<b style="color:rgb(72, 72, 72);font-size: 16px;font-weight: 300;"><i class="fas fa-ticket-alt"></i> BOOKING CODE : &nbsp; <?php echo $order;?></b>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered">
										<thead>
											<tr style="line-height: 2em;">
												<th scope="col" style="color:#777;font-size:14px;font-weight:bolder;">Ticket</th>
												<th scope="col" style="color:#777;font-size:14px;font-weight:bolder;">Schedule No. [Bus Code]</th>
												<th scope="col" style="color:#777;font-size:14px;font-weight:bolder;">Departure</th>
												<th scope="col" style="color:#777;font-size:14px;font-weight:bolder;">Seat No.</th>
												<th scope="col" style="color:#777;font-size:14px;font-weight:bolder;">Price</th>
											</tr>
										</thead>
										<tbody>
                                            <?php
                                            $total="";
                                    while($row2=$sql2->fetch_assoc()){
                                        $total=$total + $row1['price'];
                                         ?>
                                          <tr style="line-height: 1.678em;">
										  <td style="color:#777;font-size:14px;font-weight:bolder;"><?php echo $row2['ticket_id'];?></td>
                                          <td style="color: #777;font-size: 14px;font-weight: 300;"><?php echo $row1['no'];?></td>               
                                          <td style="color: #777;font-size: 14px;font-weight: 300;"><?php echo $row1['date'];?>, <?php echo $row1['time'];?></td>
                                           <td style="color: #777;font-size: 14px;font-weight: 300;"><?php echo $row2['seat_no'];?></td>
                                          <td style="color: #777;font-size: 14px;font-weight: 300;"><?php echo $row1['price'];?></td> 
                                          </tr>
										  <?php
                                        }
                                       ?>		
                                       <td colspan="5" style="line-height:22.75px;" > <b class="pull-right" style="color:rgb(72, 72, 72);display:flex; justify-content: flex-end;font-size:14px;">Total : <?php echo $total;?></b></td>					
										</tbody>
									</table>
								</div>
                                <center> <a href="http://localhost/bus/asset/payment/payment.php?total=<?php echo $total?>" class="btn btn-primary mt-4">Submit for Payment</a></center>
							</div>
                            
						</div>
					</div>
</div>
</div>
</section>
<?php
include ('footer.php');
?>
</body>
</html>
