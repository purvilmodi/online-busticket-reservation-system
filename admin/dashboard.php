<?php

session_start();
include 'connection.php';
$sql = "SELECT * from pending";

// for a booking

if ($result = mysqli_query($conn, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
}

// for a complete payment

$sql1 ="select * from payment";
if ($result1 = mysqli_query($conn, $sql1)) {

    // Return the number of rows in result set
    $rowcount1 = mysqli_num_rows( $result1 );
}

//for a buses
$sql2 ="select * from bus";
if ($result2 = mysqli_query($conn, $sql2)) {

    // Return the number of rows in result set
    $rowcount2 = mysqli_num_rows( $result2 );
} 

$sql3 ="select * from customer";
if ($result3 = mysqli_query($conn, $sql3)) {

    // Return the number of rows in result set
    $rowcount3 = mysqli_num_rows( $result3 );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
		 <script src="js/bootstrap.bundle.js"></script>
     <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>

<body>
  <?php
  $username=$_SESSION['username'];
  $headersql=mysqli_query($conn,"SELECT * FROM admin where username='$username'")or die(mysqli_error());
  $headerrow=mysqli_fetch_array($headersql);
  if($headerrow['level'] == 'owner')
  {
    include 'header.php';
  }
  else{
    include 'header1.php';
  }
  ?>
    <h4>Dashboard</h4>
                    <!-- start container -->
                    <div class="container-fluid" style="margin-top:100px;">


<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2" style="border-left:5px solid #36b9cc;">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="font-weight-bold text-info text-uppercase mb-1"><a href="http://localhost/bus/admin/pending.php" style="text-decoration:none;font-size:13px;letter-spacing:1px;">Pending Bookings</a></div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowcount;?></div>
          </div>
          <div class="col-auto">
            <i class="fa fa-spinner fa-2x text-secondary"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2" style="border-left:5px solid #1cc88a;">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="http://localhost/bus/admin/ticket.php" style="text-decoration:none;font-size:13px;letter-spacing:1px;">Total Tickets Sold</a></div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowcount1;?></div>
          </div>
          <div class="col-auto">
            <i class="fa fa-ticket fa-2x text-secondary"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2" style="border-left:5px solid #e74a3b;">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1"><a href="http://localhost/bus/admin/payment_list.php" style="text-decoration:none;font-size:13px;letter-spacing:1px;">Payments List</a></div>
            <div class="row no-gutters align-items-center">
              <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $rowcount1;?></div>
              </div>
              <div class="col">
                
              </div>
            </div>
          </div>
          <div class="col-auto">
            <i class="fa fa-dollar fa-2x text-secondary"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>


<div class="row mt-5">

  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2" style="border-left:5px solid #36b9cc;">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="http://localhost/bus/admin/list_booking.php" style="text-decoration:none;font-size:13px;letter-spacing:1px;">List of Bookings</a></div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowcount1;?></div>
          </div>
          <div class="col-auto">
            <i class="fa fa-qrcode fa-2x text-secondary"></i>
          </div>
        </div>
      </div>
    </div>
  </div><!-- Log on to codeastro.com for more projects -->

  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2" style="border-left:5px solid #1cc88a;">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="http://localhost/bus/admin/customer.php" style="text-decoration:none;font-size:13px;letter-spacing:1px;">Customer List</a></div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowcount3;?></div>
          </div>
          <div class="col-auto">
            <i class="fa fa-user fa-2x text-secondary"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pending Requests Card Example -->
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2" style="border-left:5px solid #e74a3b;">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="http://localhost/bus/admin/managebus.php" style="text-decoration:none;font-size:13px;letter-spacing:1px;">Available Bus</a></div>
            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $rowcount2;?></div>
          </div>
          <div class="col-auto">
            <i class="fa fa-bus fa-2x text-secondary"></i>
          </div>
        </div>
      </div>
    </div>
  </div>



</div>

</div>
<!-- /.container-fluid -->

</body>
</html>