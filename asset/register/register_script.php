<?php
include ('connection.php');
// by default, error messages are empty
$valid=$nameErr=$mobileErr=$emailErr=$usernameErr=$passwordErr=$cpasswordErr=$addressErr='';

// by default,set input values are empty
$set_name=$set_mobile=$set_email=$set_username=$set_password='';    
 extract($_POST);

if(isset($_POST['register']))
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

//  Address Validation
if(empty($address)){
    $addressErr="Address is Required"; 
 }
 
 else{
    $addressErr=true;
 }


 //  Username Validation
if(empty($username)){
    $usernameErr="Username is Required"; 
 }
 
 else{
    $usernameErr=true;
 }
 $select = mysqli_query($conn, "SELECT username FROM customer WHERE username = '".$_POST['username']."'") or exit(mysqli_error($conn));
if(mysqli_num_rows($select)) {
    $usernameErr="This username already being used";
}
 
//Mobile No validation

if(empty($mobile)){
    $mobileErr="Mobile Number is required";
}
else if(!is_numeric($mobile) || strlen($mobile)!=10){
    $mobileErr="Invalid Mobile number";
    }
    else{
        $mobileErr=true;
        }

  

//Email Address Validation
if(empty($email)){
  $emailErr="Email is Required"; 
}
else if (!preg_match($validEmail,$email)) {
  $emailErr="Invalid Email Address";
}
else{
  $emailErr=true;
}
$select = mysqli_query($conn, "SELECT email FROM customer WHERE email = '".$_POST['email']."'") or exit(mysqli_error($conn));
if(mysqli_num_rows($select)) {
    $emailErr="This Email id already being used";
}
    
// password validation 
if(empty($password)){
  $passwordErr="Password is Required"; 
} 
elseif (!preg_match($uppercasePassword,$password) || !preg_match($lowercasePassword,$password) || !preg_match($digitPassword,$password) || !preg_match($symbolPassword,$password) || !preg_match($minEightPassword,$password) || preg_match($spacesPassword,$password)) {
  $passwordErr="Password must be at least one uppercase letter, lowercase letter, digit, a special character with no spaces and minimum 8 length";
}
else{
   $passwordErr=true;
}

// form validation for confirm password
if(empty($cpassword)){
    $cpasswordErr="Confirm Password field should not be empty.";
}
elseif ($password != $cpassword) {
    $cpasswordErr = "Passwords do not match.";
    }
else{
   $cpasswordErr=true;
}

// check all fields are valid or not
if($nameErr==1 && $mobileErr==1 && $emailErr==1 && $addressErr==1 && $passwordErr==1 && $cpasswordErr==1)
{
   
   //legal input values

   $username=$_REQUEST["username"];
   $email=    $_REQUEST["email"];
   $mobile= $_REQUEST["mobile"];
   $name=$_REQUEST["name"];
   $password=  $_REQUEST["password"];
   $address =$_REQUEST["address"];
   $encpassword=md5($password);

   // here you can write Sql Query to insert user data into database table
   $sql="insert into customer values('$username','$email','$mobile','$name','$encpassword','$address','$image')";
   $result=mysqli_query($conn,$sql);
   if($result)
   ob_start();
header("Location: http://localhost/bus/asset/login/login.php");
ob_end_flush();
  
}
   else{
     // set input values is empty until input field is invalid
    $set_name=$name;
    $set_mobile=$mobile;
    $set_email=$email;
}
}
?>