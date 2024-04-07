<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
		 <script src="js/bootstrap.bundle.js"></script>
     <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="style.css">
</head>
<?php
include 'connection.php';
  $username=$_SESSION['username'];
  $sql5=mysqli_query($conn,"SELECT * FROM admin where username='$username'")or die(mysqli_error());
  $row5=mysqli_fetch_array($sql5);
  ?>
<body>
    
<?php
    if (!isset($_SESSION['username'])) 
    {
        header("location:http://localhost/bus/admin/login.php");   // create my-account.php page for redirection 	
    }
    ?>

<div id="cont">
        <div class="header">
         <i class="fa fa-bus text-white fs-1 mt-2" style="transform: rotate(-20deg);"></i>
        <p>YATRA</p>
        </div>
        
        <div class="main-link">
            <a class="link" href="http://localhost/bus/admin/dashboard.php">
               <i class="fa fa-fw fa-tachometer"></i>&nbsp;<h6>Dashboard</h6>
            </a>
           
              <a class="link" href="http://localhost/bus/admin/managebus.php">
              <i class="fa fa fa-bus"></i>&nbsp;<h6>Manage Bus</h6>
              </a>
        
          
              <a class="link" href="http://localhost/bus/admin/list_booking.php">
              <i class="fa fa-bookmark"></i>&nbsp;<h6>List Bookings</h6>
              </a>
         
          
              <a class="link" href="http://localhost/bus/admin/ticket.php">
              <i class="fa fa-ticket"></i>&nbsp;<h6>Tickets</h6>
              </a>
          
          
              <a class="link" href="http://localhost/bus/admin/pending.php">
              <i class="fa fa-clock-o"></i>&nbsp;<h6>Pending Orders</h6>
              </a>
         
          
              <a class="link" href="http://localhost/bus/admin/customer.php">
             <i class="fa fa-user"></i>&nbsp;<h6>Customer List</h6>
             </a>

             <a class="link" href="http://localhost/bus/admin/payment_list.php">
             <i class="fa fa-dollar"></i>&nbsp;<h6>Payments List</h6>
             </a>
         
          </div>  
          <div class="text-center d-none d-md-inline">
        
        <button onclick="toggleWidth()" class="rounded-circle border-0" id="sidebarToggle"><i class="fa fa-angle-left"></i></button>
      </div>
        
    </div>
    <div class="first">
    <input type="text" placeholder="S e a r c h" style="margin:25px;background-color:rgb(248, 249, 252);border:1px solid rgb(227, 230, 240);margin-left:50px;padding:5px;width:74%;">
        <div class="dropdown">
        Hi,<?php echo $row5['username'];?>
                <img src="http://localhost/bus/admin/img/default.png" alt="" srcset="">
                    <div class="dropdown-content" id="d1">
                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">About</a>
                        <a href="" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a>
                      </div>
                    </div>
                  
<!-- Log on to codeastro.com for more projects -->
<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Admin Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-bs-label="Close">
        </button>
      </div>
      <div class="modal-body">
      <div class="row form-group">
			<label for="name" class="control-label" style="color:rgb(119, 119, 119);font-size:20px;letter-spacing:3px;">UserName: <?php echo $row5['username'];?></label>								
      </div>
      <div class="row form-group">
			<label for="email" class="control-label" style="color:rgb(119, 119, 119);font-size:20px;letter-spacing:3px;">Email: <?php echo $row5['email'];?></label>								
      </div>
     </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Close</button>    
      </div>
    </div>
  </div>					
</div>
    

    
<!-- logout modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-bs-label="Close">
        </button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
				<a class="btn btn-danger" href="http://localhost/bus/admin/logout.php">Logout</a>
			</div>
		</div>
	</div>
</div>
  
<script>
  let isExpanded = false;

  function toggleWidth() {
    const myDiv = document.getElementById('cont');

    if (isExpanded) {
      // If div is expanded, set it to normal width
      myDiv.style.width = '20%';
    } else {
      // If div is not expanded, increase its width
      myDiv.style.width = '100px';
    }

    // Toggle the state for the next click
    isExpanded = !isExpanded;
  }
</script>          
</body>
</html>