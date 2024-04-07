<?php
include 'payment_script.php';
?>
<html>
<head>
</head>
<link rel="stylesheet" href="css/bootstrap.min.css">
		 <script src="js/bootstrap.bundle.js"></script>
          
		</head>
  <?php
  $total = $_GET['total'];
  $email=$_SESSION['email'];
  $no=$_SESSION['no'];
  $order=$_SESSION['id'];
  $sql=mysqli_query($conn,"SELECT * FROM customer where email='$email'")or die(mysqli_error());
  $row=mysqli_fetch_array($sql);
  $sql1=mysqli_query($conn,"SELECT * FROM bus where no='$no'")or die(mysqli_error());
  $row1=mysqli_fetch_array($sql1);
  $sql2=mysqli_query($conn,"SELECT * FROM booking where order_id='$order'")or die(mysqli_error());
  $row2=mysqli_fetch_array($sql2);
  ?>
<body>
    <!-- header part -->

    <?php

if (isset($_SESSION['email'])) {
    include('header1.php');
}
?>
<section class="service-area section-gap relative"  style="background-color: rgb(177 177 177);">
<div class="container py-3">
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 mx-auto mt-5 mb-5">
            <div id="pay-invoice" class="card mt-5">
                <div class="card-body">
                    <div class="card-title text-center">
                    <p style="color:rgb(72, 72, 72);">Order Id: <?php echo $row2['order_id'] ?></p>    
                    </div>
                    <hr>
                    <form action="" method="post">
                    <div class="form-group">    
                           <label style="font-size: 14px;font-weight: 300;">Your Bank Name:</label> 
                           <p class="text-center" style="color:#777;"><?php echo $row2['bank'] ?></p>
                        </div>
                        <div class="form-group has-success mt-3 mb-3">
                            <label for="cc-name" class="control-label mb-2" style="font-size: 14px;font-weight: 300;">Name on card:</label>
                            <input id="name" name="name" type="text" class="form-control name valid" placeholder="Name" required>
                            <small class="text-danger pl-3">
                                                <?php if($nameErr!=1){ echo $nameErr; }?>
                                                </small>
                        </div>
                        <div class="form-group mt-3 mb-3">
                            <label for="cc-number" class="control-label mb-2" style="font-size: 14px;font-weight: 300;">Card number:</label>
                            <input id="card" name="card" type="text" maxlength="16" class="form-control card identified visa" placeholder="1456 2563 7896 7456" required>                            
                            <small class="text-danger pl-3">
                                                <?php if($cardErr!=1){ echo $cardErr; }?>
                                                </small>
                        </div>
                        <div class="row mt-3 mb-3">
                            <div class="col-6">
                                <div class="form-group ">
                                    <label for="cc-exp" class="control-label mb-2" style="font-size: 14px;font-weight: 300;">Expired Date:</label>
                                    <div class="d-flex">
                                    <div class="col-6">
                                    <select name="month" class="form-control cc-exp identified visa" required>
                                    <option value="" selected disabled="">Month &nbsp; &#8645;</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                     <option value="April">April</option>
                                     <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                 </select>
                                 </div>
                                 <div class="col-6">
                                 <select name="year" class="form-control year identified visa" required>
                                    <option value="" selected disabled="">Year &nbsp; &#8645;</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                     <option value="2027">2027</option>
                                     <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                    <option value="2031">2031</option>
                                    <option value="2032">2032</option>
                                    <option value="2033">2033</option>
                                    <option value="2034">2034</option>
                                    <option value="2035">2035</option>
                                 </select>
                                 </div>
                                 
                                 </div>
                                 <small class="text-danger pl-3">
                                                <?php if($yearErr!=1){ echo $yearErr; }?>
                                                </small>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="cvv" class="control-label mb-2" style="font-size: 14px;font-weight: 300;">CVV No:</label>
                                <div class="input-group">
                                    <input id="cvv" name="cvv" type="text" maxlength="3" class="form-control cvv" placeholder="123" require>                    
                                    <small class="text-danger pl-3">
                                                <?php if($cvvErr!=1){ echo $cvvErr; }?>
                                                </small>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 d-flex justify-content-between">
                            <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-success btn-block">
                                Pay &#x20b9;<?php echo $total;?>.                                
</button>                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<?php
include ('footer.php');
?>
</body>
</html>