<?php 
session_start();
$alert='';
include 'connection.php';

if(isset($_POST['submit']))
{
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = mysqli_query($conn,"select * from customer where email='$email' and password='$password'");
$numRows = mysqli_num_rows($sql);
$row=mysqli_fetch_array($sql);

if($numRows  == 1){
	$_SESSION["email"]=$row['email'];
	if (!isset($_SESSION['origin']) && !isset($_SESSION['destination'])) 
    {
        header("location:http://localhost/bus/asset/searchbus/inside.php");   // create my-account.php page for redirection 	
    }
    else
    {
        header("location:http://localhost/bus/asset/searchbus/show.php");   // create my-account.php page for redirection 	
    }

}
else{
	$alert="Please Check Details";
	}
}
?>