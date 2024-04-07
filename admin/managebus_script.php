<?php
include 'connection.php';

extract($_POST);
if(isset($_POST['submit']))
{
    $no=$_REQUEST["bus_no"];
    $type=$_REQUEST["type"];
    $origin=$_REQUEST["origin"];
    $destination=$_REQUEST["destination"];
    $date=$_REQUEST["date"];
    $time=$_REQUEST["time"];
    $price=$_REQUEST["price"];
    $arrival_time=$_REQUEST["arrival_time"];

    $sql="INSERT into bus values('$no','$type','$origin','$destination','$date','$time','$price','$arrival_time')";
    $result=mysqli_query($conn,$sql);
}

if(isset($_GET['no']))
{
    $no=$_GET['no'];

    $sql="delete from bus where no='$no'";
    $result=mysqli_query($conn,$sql);

    if($result){
       header('location:http://localhost/bus/admin/managebus.php');
    }
    else{
        die(mysqli_error($conn));
    }
}

?>