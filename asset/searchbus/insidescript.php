<?php 
session_start();
include 'connection.php';

if(isset($_POST['submit']))
{
$date = $_POST['date'];
$origin = $_POST['origin'];
$destination=$_POST['destination'];

$sql = mysqli_query($conn,"select * from bus where date='$date' and origin='$origin' and destination='$destination'");
$numRows = mysqli_num_rows($sql);
$row=mysqli_fetch_array($sql);

if($numRows  == 0){
	echo "<script> alert('This date bus not found') </script>";
}
else{
	$_SESSION["date"]=$row['date'];
    $_SESSION["origin"]=$row['origin'];
    $_SESSION["destination"]=$row['destination'];
	if (!isset($_SESSION['email'])) 
    {
        header("location:http://localhost/bus/asset/login/login.php");   // create my-account.php page for redirection 	
    }
    else
    {
        header("location:http://localhost/bus/asset/searchbus/show.php");   // create my-account.php page for redirection 	
    }
	}
}
?>