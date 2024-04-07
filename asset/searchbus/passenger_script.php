<?php
error_reporting(0);
include 'connection.php';
    session_start();
        $query = "select order_id from booking order by order_id desc";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result);
        $lastid = $row['order_id'];
        if (empty($lastid))
        {
            $number = "ORD-0000001";
        }
        else
        {
            $idd = str_replace("ORD-","",$lastid);
            $id = str_pad($idd + 1,7,0,STR_PAD_LEFT);
            $number = 'ORD-' .$id;
        }

        $_SESSION['passenger'] = (isset($_POST['pname'])) ? $_POST['pname'] : array();
        $_SESSION['pas_age'] = (isset($_POST['age'])) ? $_POST['age'] : array();
if (isset($_POST['submit'])) 
        {

            if (count($_SESSION['kursi']) > 0) 
            { 
                foreach ( $_SESSION['kursi'] as $index => $value)
                {  
                    $query1 = "select ticket_id from booking order by ticket_id desc";
                    $result1 = mysqli_query($conn,$query1);
                    $row1 = mysqli_fetch_array($result1);
                    $lastid1 = $row1['ticket_id'];
                    if (empty($lastid1))
                    {
                        $number1 = "TKT-0000001";
                    }
                    else
                    {
                        $idd1 = str_replace("TKT-","",$lastid1);
                        $id1 = str_pad($idd1 + 1,7,0,STR_PAD_LEFT);
                        $number1 = 'TKT-' .$id1;
                    }
            
                 $no=$_SESSION["no"];
            $name=$_POST['name'];
            $bank =$_POST['bank'];
            $email=$_POST['email'];
            $pname=$_SESSION['passenger'][$index];
            $age=$_SESSION['pas_age'][$index];
            $site=$_SESSION['kursi'][$index];
            
            $sql ="insert into booking values('$number','$number1','$no','$name','$bank','$email','$pname','$age','$site')";
            $sql1="insert into pending values('$number','$number1','$no','$name','$bank','$email','$pname','$age','$site')";
            $result=mysqli_query($conn,$sql);
            $result1=mysqli_query($conn,$sql1);
            $_SESSION['id']=$number;
            header("Location: http://localhost/bus/asset/payment/code.php");
        }
    
            }
        }

?>