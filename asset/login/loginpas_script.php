<?php
include ('connection.php');
// by default, error messages are empty
$passwordErr=$cpasswordErr='';

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
if($passwordErr==1 && $cpasswordErr==1)
{
   
   //legal input values

   $password=  $_REQUEST["password"];
   $encpassword=md5($password);

   // here you can write Sql Query to insert user data into database table
   $sql="update customer set password='$encpassword' where email='$email'";
   $result=mysqli_query($conn,$sql);
   if($result)
   {
       echo "<script>alert('Password Change Successfully')</script>";
   }
   else{
    echo "<script>alert('Password Not Change')</script>";
   }
  
}
  
}
?>