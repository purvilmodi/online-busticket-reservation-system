<?php
// error_reporting(0);
include ('connection.php');
session_start();
$total = $_GET['total'];
$email=$_SESSION['email'];
$no=$_SESSION['no'];
$order=$_SESSION['id'];
$sql=mysqli_query($conn,"SELECT * FROM customer where email='$email'")or die(mysqli_error());
$row=mysqli_fetch_array($sql);
$sql1=mysqli_query($conn,"SELECT * FROM bus where no='$no'")or die(mysqli_error());
$row1=mysqli_fetch_array($sql1);
$sql2=mysqli_query($conn,"SELECT * FROM booking where order_id='$order'")or die(mysqli_error());

// by default, error messages are empty
$valid=$nameErr=$cardErr=$yearErr=$cvvErr='';
  
 extract($_POST);

if(isset($_POST['submit']))
{
   
   //input fields are Validated with regular expression
   $validName="/^[a-zA-Z ]*$/";
   $validEmail="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
   $uppercasePassword = "/(?=.*?[A-Z])/";
   $lowercasePassword = "/(?=.*?[a-z])/";
   $digitPassword = "/(?=.*?[0-9])/";
   $spacesPassword = "/^$|\s+/";
   $symbolPassword = "/(?=.*?[#?!@$%^&*-])/";
   $minEightPassword = "/.{8,}/";

 //  First Name Validation
if(empty($name)){
   $nameErr="Name is Required"; 
}
else if (!preg_match($validName,$name)) {
   $nameErr="Digits are not allowed";
}else{
   $nameErr=true;
}

 
//card No validation

if(empty($card)){
    $cardErr="Card Number is required";
}
else if(!is_numeric($card) || strlen($card)!=16){
    $cardErr="Invalid card number";
    }
    else{
        $cardErr=true;
        }

//year validation

// if(empty($year)){
//     $yearErr="Invalid Year";
// }
// else if(!is_numeric($year) || strlen($year)!=4){
//     $yearErr="Invalid Year";
//     }
//     else{
//         $yearErr=true;
//         }
  
        //cvv validation

if(empty($cvv)){
    $cvvErr="Invalid CVV number";
}
else if(!is_numeric($cvv) || strlen($cvv)!=3){
    $cvvErr="Invalid CVV number";
    }
    else{
        $cvvErr=true;
        }
// check all fields are valid or not
if($nameErr==1 && $cardErr==1 && $cvvErr==1)
{
    while($row2=$sql2->fetch_assoc()){
   //legal input values

   $order_id= $row2['order_id'];
   $ticket_id= $row2['ticket_id'];
   $bus_no=$row1['no'];
   $month= $_REQUEST["month"];
   $year=$_REQUEST["year"];
   $seat_no= $row2['seat_no'];
   $p_name= $row2['pname'];
   $p_age= $row2['age'];


   $bn=$row2['bank'];
   $n=$_REQUEST["name"];
   $c= $_REQUEST["card"];
   $vv=$_REQUEST["cvv"];
$method = "AES-256-CBC";
$key = "encryptionKey123";
$options = 0;
$iv = '1234567891011121';

$bank_name = openssl_encrypt($bn, $method, $key, $options,$iv);
$name = openssl_encrypt($n, $method, $key, $options,$iv);
$card = openssl_encrypt($c, $method, $key, $options,$iv);
$cvv = openssl_encrypt($vv, $method, $key, $options,$iv);

   // here you can write Sql Query to insert user data into database table
   $sql="insert into payment values('$order_id','$ticket_id','$bus_no','$bank_name',
   '$name','$card','$month','$year','$cvv','$seat_no','$email','$p_name','$p_age')";

   $sql1="delete from pending where order_id='$order_id'";

   $result=mysqli_query($conn,$sql);
   $result1=mysqli_query($conn,$sql1);
if($result && $result1)
{
//   echo "<script> alert('Your Ticket is Booked..') </script>";
echo "<script>if(confirm('Your Ticket is Booked and Download Invoice ..')){document.location.href='http://localhost/bus/asset/payment/pdf.php'};</script>";
//   header("location:http://localhost/bus/asset/searchbus/inside.php");   // create my-account.php page for redirection 	
  
}
else
{
  echo "<script> alert('Sorry,Your Ticket Not Booking..') </script>";
}
    }
}
}

?>