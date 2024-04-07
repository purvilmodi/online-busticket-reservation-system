<?php
include ('connection.php');
// by default, error messages are empty
$valid=$nameErr=$mobileErr=$addressErr='';

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

//  Address Validation
if(empty($address)){
    $addressErr="Address is Required"; 
 }
 
 else{
    $addressErr=true;
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

    
// check all fields are valid or not
if($nameErr==1 && $mobileErr==1 && $addressErr==1)
{
   
   //legal input values

   $mobile= $_REQUEST["mobile"];
   $name=$_REQUEST["name"];
   $address =$_REQUEST["address"];
   $image =$_FILES["image"]['name'];

   // here you can write Sql Query to insert user data into database table
   $sql="update customer set mobile='$mobile',name='$name',address='$address',image='$image' where email='$email'";
   $result=mysqli_query($conn,$sql);
   if($result)
   {
   move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]);
   $valid="Congratulation,Your Information Update Successfully";
   }
   else
   {
      $valid="data is not Updatd";
   }
mysqli_close($conn);

  
}
   else{
     // set input values is empty until input field is invalid
    $set_name=$name;
    $set_mobile=$mobile;
    $set_email=$email;
}
}
?>