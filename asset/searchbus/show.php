<!DOCTYPE html>
<html lang="" class="">
	<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
		 <script src="js/bootstrap.bundle.js"></script>
          
		</head>
  <?php
include 'connection.php';
session_start();
$date=$_SESSION['date'];
$origin=$_SESSION['origin'];
$destination=$_SESSION['destination'];
$email=$_SESSION['email'];
$sql1=mysqli_query($conn,"SELECT * FROM customer where email='$email'")or die(mysqli_error());
$row1=mysqli_fetch_array($sql1);
$sql=mysqli_query($conn,"SELECT * FROM bus where date='$date' and origin='$origin' and destination='$destination'")or die(mysqli_error());
?>
	<body>
		<!-- header part -->

        <?php

if (isset($_SESSION['email'])) {
    include('header1.php');
}
?>

		<section class="service-area section-gap relative" style="background-color: rgb(177 177 177);">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="row d-flex justify-content-center">
						<div class="col-lg-12">
						<!-- Default Card Example -->
                        <form action="ticket.php" method="post">
						<div class="card" style="margin-top:125px;margin-bottom:150px;">
							<div class="card-header" style="font-weight: 300;color: #777;font-size: 20px;">
								 Departure List
							</div>
							<div class="card-body">
								<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped">
									<thead class="table-dark">
										<tr>
										<th scope="col">Bus No</th>
                                        <th>Bus Type</th>
											<th scope="col">Origin</th>
											<th>Destination Terminal</th>
											<th scope="col">Date & Time</th>											
											<th>Price</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody style="font-size: 14px;font-weight: 300;">
                                        <?php
                                    while($row=$sql->fetch_assoc()){
                                         ?>
                                          <tr>
										  <td><?php echo $row['no'];?></td>
                                          <td><?php echo $row['type'];?></td>
                                          <td><?php echo $row['origin'];?></td>
                                          <td><?php echo $row['destination'];?></td>
                                          <td><?php echo $row['date']?>, <?php echo $row['time'];?></td>
                                          <td><?php echo $row['price'];?></td> 
                                          <td><a href='http://localhost/bus/asset/searchbus/ticket.php?no=<?php echo $row['no']?>' class='btn btn-outline-success'>Select</a></td>
                                          </tr>
										  <?php
                                        }
                                       ?>
									</tbody>
								</table>
								</div>
								<a href="http://localhost/bus/asset/searchbus/inside.php" class="btn btn-danger pull-left">Go Back </a>
									</div>
								</div>
                                </form>
							</div>
						</div>
					</div>
				</section>
                <?php
			include 'footer.php';
			?>
	</body>
</html>