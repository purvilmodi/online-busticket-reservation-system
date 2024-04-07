<?php
include 'passenger_script.php';
?>

<!DOCTYPE html>
<html lang="" class="">
	<head>

	<link rel="stylesheet" href="css/bootstrap.min.css">
		 <script src="js/bootstrap.bundle.js"></script>
          
	</head>
<?php
include 'connection.php';
$email=$_SESSION['email'];
$sql=mysqli_query($conn,"SELECT * FROM customer where email='$email'")or die(mysqli_error());
$row=mysqli_fetch_array($sql);
?>
<body>
	<!-- header part -->
	<?php

if (isset($_SESSION['email'])) {
	include('header1.php');
}
?>
		
        <section class="service-area section-gap relative" style="background-color: rgb(177 177 177);">
			<div class="overlay overlay-bg"></div>
			<div class="container" style="padding-top:120px;">
            <div class="row" style="display:flex;flex-wrap:wrap;">
				
					

	<?php
    $_SESSION['kursi'] = (isset($_POST['kursi'])) ? $_POST['kursi'] : array();
	
    if (count( $_SESSION['kursi']) > 0) { 
        foreach ( $_SESSION['kursi'] as $index => $value) {  
			  
            ?>
			
            <div class="col-lg-4">
						<!-- Default Card Example -->
						<form action="" method="post">
						<input type="hidden" name="tgl" value="">
            <div class="card mb-5">
								<div class="card-header" style="color:rgb(119, 119, 119);">
									<i class="fa fa-id-card"></i> Seat Number <?php echo  $_SESSION['kursi'][$index]; ?>								</div>
								<div class="card-body">
									<div class="form-group mb-3">
										<label for="CN" style="color:rgb(119, 119, 119);">Passenger's Name</label>
										<input type="text" id="" class="form-control mt-1" id="" name="pname[]" required>
										<input type="hidden" name="kursi[]" value="">
									</div>
									<div class="form-group">
									<label for="age" style="color:rgb(119, 119, 119);">Passenger's Age</label>
										<input type="number" min="12" max="100" id="" class="form-control mt-1" id="" name="age[]" required>										
									</div>
								</div>
							</div> 
        </div>
                            <?php
        }  
    } 
    ?>
    <div class="col-lg-5">
						
							<div class="card mb-5">
								<div class="card-header" style="color:rgb(119, 119, 119);">
									<i class="fa fa-user"></i> Customer Identity
								</div>
								<div class="card-body">
									
										<div class='form-group mb-3'>
											<div class='col-sm-12'>
												<input name='name' maxlength='64' class='form-control required' placeholder='Customer Name' type='text' title='Customer name is required' value="<?php echo $row['name'] ?>" Required></div>
											</div>
											<div class='form-group mb-3'>
												<div class='col-sm-12'>
													<input name='hp' required="" maxlength='16' class='form-control required' placeholder='Handphone' type='text' title='Required Field' readonly value="<?php echo $row['mobile']?>"></div>
												</div>
												<div class='form-group mb-3'>
													<div class='col-sm-12'>
													<textarea name='alamat' cols='20' rows='3' id='alamat' required="" maxlength='256' class='form-control required' placeholder='Address' title='Address Required.' ><?php echo $row['address']?></textarea></div>
												</div>
												<div class='form-group mb-3'>
													<div class='col-sm-12'>
														<input name='email' required="" maxlength='64' class='form-control' placeholder='Email' type='text'readonly value="<?php echo $row['email']?>"></div>
													</div>
												</div>
											</div>
										</div>
                                        
										<div class="col">
											<div class="card">
												<div class="card-header" style="color:rgb(119, 119, 119);">
                                                <i class="fa fa-inr" aria-hidden="true"></i> Payment Method
												</div>
												<div class="card-body">
													<form action="" method="post">
														<div class="form-group">
															<label for="exampleInputEmail1" style="color:rgb(119, 119, 119);">Select Bank </label>
															<select class="form-control"  name="bank" required style="color:rgb(119, 119, 119);font-size:12px;">
																<option value="" selected disabled="">Select Bank</option>
																
<option value="ALLAHABAD BANK ">ALLAHABAD BANK </option>
<option value="ANDHRA BANK">ANDHRA BANK</option>
<option value="AXIS BANK">AXIS BANK</option>
<option value="STATE BANK OF INDIA">STATE BANK OF INDIA</option>
<option value="BANK OF BARODA">BANK OF BARODA</option>
<option value="UCO BANK">UCO BANK</option>
<option value="UNION BANK OF INDIA">UNION BANK OF INDIA</option>
<option value="BANK OF INDIA">BANK OF INDIA</option>
<option value="BANDHAN BANK LIMITED">BANDHAN BANK LIMITED</option>
<option value="CANARA BANK">CANARA BANK</option>
<option value="GRAMIN VIKASH BANK">GRAMIN VIKASH BANK</option>
<option value="CORPORATION BANK">CORPORATION BANK</option>
<option value="INDIAN BANK">INDIAN BANK</option>
<option value="INDIAN OVERSEAS BANK">INDIAN OVERSEAS BANK</option>
<option value="ORIENTAL BANK OF COMMERCE">ORIENTAL BANK OF COMMERCE</option>
<option value="PUNJAB AND SIND BANK">PUNJAB AND SIND BANK</option>
<option value="PUNJAB NATIONAL BANK">PUNJAB NATIONAL BANK</option>
<option value="RESERVE BANK OF INDIA">RESERVE BANK OF INDIA</option>
<option value="SOUTH INDIAN BANK">SOUTH INDIAN BANK</option>
<option value="UNITED BANK OF INDIA">UNITED BANK OF INDIA</option>
<option value="CENTRAL BANK OF INDIA">CENTRAL BANK OF INDIA</option>
<option value="VIJAYA BANK">VIJAYA BANK</option>
<option value="DENA BANK">DENA BANK</option>
<option value="BHARATIYA MAHILA BANK LIMITED">BHARATIYA MAHILA BANK LIMITED</option>
<option value="FEDERAL BANK LTD ">FEDERAL BANK LTD </option>
<option value="HDFC BANK LTD">HDFC BANK LTD</option>
<option value="ICICI BANK LTD">ICICI BANK LTD</option>
<option value="IDBI BANK LTD">IDBI BANK LTD</option>
<option value="PAYTM BANK">PAYTM BANK</option>
<option value="FINO PAYMENT BANK">FINO PAYMENT BANK</option>
<option value="INDUSIND BANK LTD">INDUSIND BANK LTD</option>
<option value="KARNATAKA BANK LTD">KARNATAKA BANK LTD</option>
<option value="KOTAK MAHINDRA BANK">KOTAK MAHINDRA BANK</option>
<option value="YES BANK LTD">YES BANK LTD</option>
<option value="SYNDICATE BANK">SYNDICATE BANK</option>
<option value="BANK OF INDIA">BANK OF INDIA</option>
<option value="BANK OF MAHARASHTRA">BANK OF MAHARASHTRA</option>
																															</select>
														</div>
														<hr>
														<div class='form-group'>
														<a href='http://localhost/bus/asset/searchbus/show.php'style="color:rgb(0, 86, 179);" class='btn btn-default pull-left'>Go Back</a>
														<button type="submit" name="submit" class="btn btn-success max-auto w-100">Process Ticket</button>
													</div>
												</form>
												<!-- Log on to codeastro.com for more projects -->
													</div>
                                                    </div>
											</div>
										</div>
									</div>
								</section>
								<?php
			include 'footer.php';
			?>

	</body>
</html>
