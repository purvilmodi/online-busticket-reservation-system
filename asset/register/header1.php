<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		 <script src="js/bootstrap.bundle.js"></script>

		  <style type="text/css">
            body{
    font-family: 'Rubik', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    top: 0;
}

header{
    justify-content: space-between;
    display: inline-block;
    display: flex;
    padding: 20px 80px;
    background-color: white;
    top: 0;
    left: 0;
    right: 0;
	padding: 14px 20px;
	position: fixed;
	transition: all 0.5s;
	z-index: 997;
    box-shadow: 0px 15px 10px -15px #111;    
}
header div{
    padding: 0px 50px;
    width: 50%;
}
header div img{
    width: 150px;
}
nav{
    width: 50%;
    display: flex;
    justify-content: space-between;
    padding-right: 120px;
}
nav a{
    padding-top: 5px;
    text-decoration: none;
    font-size: 13px;
    font-weight:bolder;
    color: black;
    transition: 0.4s; 
}
nav a:hover{
    color: rgb(10, 100, 218);
    transition: 0.4s; 
    margin-top:-10px;
}

.dropdown{
    width:auto;
    padding: 0;
}
.dropdown-content{
  display: none;
  position: absolute;
  width:175px;
  height:auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  background-color: white;
  padding:10px 40px;
}
.dropdown-content a{
    display: inline-block;
    padding: 12px 0px;
    justify-content:space-between;
}
.dropdown-content a:hover{
  color: rgb(#8490ff);
  margin:0;
}
#toggle{
    display: none;
    cursor: pointer;
}
@media screen and (max-width:668px) {
    
    header div img{
        width: 100px;
    }
    nav{
        padding: 0;
        padding-top: 50px;
        display:none;
        position: absolute;
        background-color: rgba(0, 0, 0,0.8);
        width:0;
        height:100%;
        overflow-x: hidden;
        position: fixed;
        display: inline-block;
        top: 0;
        left: 0;
        padding-bottom: 100%;
        transition: 0.3s;
        text-align: center;
     }
     nav a{
        padding: 10px 0;
        display: block;
        color: white;
     }
     nav a:hover{
        margin: 0;
     }
     #toggle{
        width: auto;
        display: block;
        padding: 0;
     }
     .dropdown:hover.dropdown-content{
  display: none;
}
.dropdown:active .dropdown-content{
  display: block;
}

.dropdown-content{
    display: none;
  left: 0;
  width:auto;
  height:auto;
  background-color: rgba(77, 77, 77, 0.8);
}
.dropdown-content a{
    display: inline-block;
    margin-left: 5px;
    padding: 12px 0px;
}
}
@media screen and (min-width:669px) and (max-width:950px) {
    header div img{
        width: 100px;
    }
    header div{
        width: auto;
    }
    nav{
        margin: 0;
        padding: 0;
        width: 60%;
        padding-right: 20px;
    }
    nav a{
        font-size: 11px;
    }
    .dropdown-content{
  display: none;
  position: absolute;
  width:120px;
  height:auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  background-color: white;
  padding:10px 10px;
  right: 0;
}
.dropdown-content a{
    display: inline-block;
    padding: 12px 0px;
    justify-content:space-between;
    font-size: 11px;
}
}
 </style>
</head>
<?php
include 'connection.php';
$email=$_SESSION['email'];
$sql5=mysqli_query($conn,"SELECT * FROM customer where email='$email'")or die(mysqli_error());
$row5=mysqli_fetch_array($sql5);
?>
<body>
    <!-- header part -->

<header>
    <div>
        <img src="http://localhost/bus/img/icon.png" alt="">
    </div>
    <nav>
        <a href="http://localhost/bus/index.php">HOME</a>
        <a href="http://localhost/bus/asset/searchbus/inside.php">MAKE BOOKINGS</a>
        <a href="http://localhost/bus/asset/payment/ticket.php">CHECK TICKETS</a>
        
        <div class="dropdown" onclick="myFunction()">
        <a href="#">Hi,<?php echo $row5['name'];?>
        <i class='fa fa-angle-down' id="arrow"></i>
                <div class="dropdown-content" id="d1">
                    <a href="http://localhost/bus/asset/login/profile.php"><i class="fa fa-id-card"></i>&nbsp;&nbsp;&nbsp;My Profile</a>
                    <a href="http://localhost/bus/asset/login/myticket.php"><i class="fa fa-ticket"></i>&nbsp;&nbsp;&nbsp;My Ticket</a>
                    <a href="" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;&nbsp;Logout</a>
                  </div>
    </nav>
    <div id="toggle">
        <i class="fa fa-bars" id="lines" onclick="openNav()"></i>
        <i class="fa fa-close" id="cross" style="display: none;" onclick="closeNav()"></i>
    </div>
</header>
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
				<a class="btn btn-danger" href="http://localhost/bus/asset/login/logout.php">Logout</a>
			</div>
		</div>
	</div>
</div>
  
       
</body>
</html>
<script>

function openNav() {
  document.getElementsByTagName("nav")[0].style.width = "230px";
  document.getElementById("lines").style.display = "none";
  document.getElementById("cross").style.display = "block";
}
function closeNav() {
    document.getElementsByTagName("nav")[0].style.width = "0";
  document.getElementById("lines").style.display = "block";
  document.getElementById("cross").style.display = "none";
}

function myFunction() 
 {
  var x = document.getElementById("d1");
  var arrow = document.getElementById("arrow");
  if (x.style.display === "none") 
  {
    x.style.display = "block";
    arrow.style.transform= 'rotate(180deg)';
    arrow.style.transition= '0.3s';
  } else
   {
    x.style.display = "none";
    arrow.style.transform= 'rotate(0deg)';
  }
}

</script>