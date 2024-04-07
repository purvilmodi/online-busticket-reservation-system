<?php
session_start();
$alert='';
include 'connection.php';

if(isset($_POST['submit']))
{
$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = mysqli_query($conn,"select * from admin where username='$username' and password='$password'");
$numRows = mysqli_num_rows($sql);
$row=mysqli_fetch_array($sql);

if($numRows  == 1){
	$_SESSION["username"]=$row['username'];
header("location:http://localhost/bus/admin/dashboard.php");   // create my-account.php page for redirection 	
}
else{
	$alert="Please Check Details";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
		 <script src="js/bootstrap.bundle.js"></script>
		 <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		 <style>
			body{
				font-family: 'Rubik', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
			}
			*,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #2a2944;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}

form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
button:hover{
    background-color: rgba(255,255,255,0.13);
    backdrop-filter: blur(10px);
}
		 </style>
</head>

<body>
    
    <form action="" method="post">
        <h3>Login Here</h3>
        <p class="text-danger text-center"><?php echo $alert; ?></p>
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Username" id="username">

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" id="password">

        <button type="submit" name="submit">Log In</button>
    </form>
</body>

</html>
