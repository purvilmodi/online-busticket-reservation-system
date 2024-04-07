<?php
include 'connection.php';

if(isset($_GET['id']))
{
    $id=$_GET['id'];

    $sql="delete from payment where ticket_id='$id'";
    $result=mysqli_query($conn,$sql);

    if($result){
       header('location:http://localhost/bus/asset/payment/ticket_details.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
?>