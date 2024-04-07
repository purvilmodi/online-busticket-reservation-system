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
  $order=$_SESSION['id'];
  $sql2=mysqli_query($conn,"SELECT * FROM payment where order_id='$order'")or die(mysqli_error());
  ?>
<body>
    <!-- header part -->

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
                                                <th scope="col" style="color:#777;font-size:14px;font-weight:bolder;">Cancel Ticket</th>
											</tr>
										</thead>
										<tbody>
                                            <?php
                                            $total="";
                                    while($row2=$sql2->fetch_assoc()){
                                        $bus_no=$row2['bus_no'];
                                        $sql=mysqli_query($conn,"SELECT * FROM bus where no='$bus_no'")or die(mysqli_error());
                                        $row=$sql->fetch_assoc();
                                        $total=$total + $row['price'];
                                         ?>
                                          <tr style="line-height: 1.678em;">
										  <td style="color:#777;font-size:14px;font-weight:bolder;"><?php echo $row2['ticket_id'];?></td>
                                          <td style="color: #777;font-size: 14px;font-weight: 300;"><?php echo $row2['bus_no'];?></td>               
                                          <td style="color: #777;font-size: 14px;font-weight: 300;"><?php echo $row['date'];?>, <?php echo $row['time'];?></td>
                                           <td style="color: #777;font-size: 14px;font-weight: 300;"><?php echo $row2['seat'];?></td>
                                          <td style="color: #777;font-size: 14px;font-weight: 300;"><?php echo $row['price'];?></td> 
                                          <td><a href='http://localhost/bus/asset/payment/cancelticket.php?id=<?php echo $row2['ticket_id']?>' onclick="return confirm('Are you sure you want to delete this Ticket?')" class='btn btn-outline-danger'>Cancel</a></td>
                                          </tr>
										  <?php
                                        }
                                       ?>		
                                       <td colspan="5" style="line-height:22.75px;" > <b class="pull-right" style="color:rgb(72, 72, 72);display:flex; justify-content: flex-end;font-size:14px;">Total : <?php echo $total;?></b></td>					
										</tbody>                                        
									</table>
                                    <a href='http://localhost/bus/asset/payment/pdf.php' Dowload class='btn btn-primary'>Dowload Invoice</a>
								</div>
                                
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
