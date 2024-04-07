<?php
include ('insidescript.php');
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
   
	<title>Check Schedule</title>
         <link rel="stylesheet" href="css/bootstrap.min.css">
		 <script src="js/bootstrap.bundle.js"></script>
          
	</head>
<?php
error_reporting(0);
include 'connection.php';
$email=$_SESSION['email'];
$sql=mysqli_query($conn,"SELECT * FROM customer where email='$email'")or die(mysqli_error());
$row=mysqli_fetch_array($sql);
?>
<body>
	<!-- header part -->
    <?php
    if (!isset($_SESSION['email'])) 
    {
        include 'header.php';
    }
    else
    {
        include 'header1.php';
    }
    ?>

			<section class="service-area section-gap relative" style="background-color: rgb(177 177 177);">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 ">
					<!-- Default Card Example -->
					<div class="card mb-5" style="margin-top:110px;">
						<div class="card-header">
							<i class="fa fa-search"></i> Search Tickets
						</div>
						<div class="card-body">
							<div class="alert alert-warning" role="alert">
								<p><b>IMPORTANT!!</b></p>
								<P>Before Buying Tickets, Please have a look>> <b><i data-bs-toggle="modal"
											data-bs-target="#ModalForm" style="cursor:pointer;">How to book?</i></b></P>
							</div>
							<form action="" method="post">
								<div class="form-group">
									<label for="exampleInputEmail1">Select Date</label>
									<input placeholder="Enter date" id="myDate" type="date" class="form-control datepicker mt-2 mb-2" name="date" required="" min="<?php echo date('Y-m-d'); ?>">                            
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Origin</label>
									<select name="origin" class="form-control js-example-basic-single  mt-2 mb-2" required>

										<option value="" selected disabled="">Choose City</option>
																				
    <option value="Abrama">Abrama</option>
    <option value="Adalaj">Adalaj</option>
    <option value="Ahmedabad">Ahmedabad</option>
    <option value="Ahwa">Ahwa</option>
    <option value="Amod">Amod</option>
    <option value="Amreli">Amreli</option>
    <option value="Amroli">Amroli</option>
    <option value="Anand">Anand</option>
    <option value="Anjar">Anjar</option>
    <option value="Ankleshwar">Ankleshwar</option>
    <option value="Babra">Babra</option>
    <option value="Bagasara">Bagasara</option>
    <option value="Bagasra">Bagasra</option>
    <option value="Banas Kantha">Banas Kantha</option>
    <option value="Bantva">Bantva</option>
    <option value="Bardoli">Bardoli</option>
    <option value="Bedi">Bedi</option>
    <option value="Bhachau">Bhachau</option>
    <option value="Bhanvad">Bhanvad</option>
    <option value="Bharuch">Bharuch</option>
    <option value="Bhavnagar">Bhavnagar</option>
    <option value="Bhayavadar">Bhayavadar</option>
    <option value="Bhuj">Bhuj</option>
    <option value="Bilimora">Bilimora</option>
    <option value="Bilkha">Bilkha</option>
    <option value="Borsad">Borsad</option>
    <option value="Botad">Botad</option>
    <option value="Chaklasi">Chaklasi</option>
    <option value="Chalala">Chalala</option>
    <option value="Chanasma">Chanasma</option>
    <option value="Chhala">Chhala</option>
    <option value="Chhota Udepur">Chhota Udepur</option>
    <option value="Chikhli">Chikhli</option>
    <option value="Chotila">Chotila</option>
    <option value="Dabhoi">Dabhoi</option>
    <option value="Dahegam">Dahegam</option>
    <option value="Dahod">Dahod</option>
    <option value="Dakor">Dakor</option>
    <option value="Damnagar">Damnagar</option>
    <option value="Dangs (India)">Dangs (India)</option>
    <option value="Dayapar">Dayapar</option>
    <option value="Delvada">Delvada</option>
    <option value="Delwada">Delwada</option>
    <option value="Devbhumi Dwarka">Devbhumi Dwarka</option>
    <option value="Devgadh Bariya">Devgadh Bariya</option>
    <option value="Dhandhuka">Dhandhuka</option>
    <option value="Dhanera">Dhanera</option>
    <option value="Dharampur">Dharampur</option>
    <option value="Dhari">Dhari</option>
    <option value="Dhola">Dhola</option>
    <option value="Dholka">Dholka</option>
    <option value="Dhoraji">Dhoraji</option>
    <option value="Dhrangadhra">Dhrangadhra</option>
    <option value="Dhrol">Dhrol</option>
    <option value="Dhuwaran">Dhuwaran</option>
    <option value="Disa">Disa</option>
    <option value="Dohad">Dohad</option>
    <option value="Dungarpur">Dungarpur</option>
    <option value="Dwarka">Dwarka</option>
    <option value="Gadhada">Gadhada</option>
    <option value="Gandevi">Gandevi</option>
    <option value="Gandhidham">Gandhidham</option>
    <option value="Gandhinagar">Gandhinagar</option>
    <option value="Gariadhar">Gariadhar</option>
    <option value="Ghogha">Ghogha</option>
    <option value="Gir Somnath">Gir Somnath</option>
    <option value="Godhra">Godhra</option>
    <option value="Gondal">Gondal</option>
    <option value="Halol">Halol</option>
    <option value="Halvad">Halvad</option>
    <option value="Hansot">Hansot</option>
    <option value="Harij">Harij</option>
    <option value="Himatnagar">Himatnagar</option>
    <option value="Jalalpore">Jalalpore</option>
    <option value="Jalalpur">Jalalpur</option>
    <option value="Jambusar">Jambusar</option>
    <option value="Jamnagar">Jamnagar</option>
    <option value="Jasdan">Jasdan</option>
    <option value="Jetalsar">Jetalsar</option>
    <option value="Jetpur">Jetpur</option>
    <option value="Jhulasan">Jhulasan</option>
    <option value="Jodhpur">Jodhpur</option>
    <option value="Jodia">Jodia</option>
    <option value="Jodiya Bandar">Jodiya Bandar</option>
    <option value="Junagadh">Junagadh</option>
    <option value="Kachchh">Kachchh</option>
    <option value="Kadi">Kadi</option>
    <option value="Kadod">Kadod</option>
    <option value="Kalavad">Kalavad</option>
    <option value="Kalol">Kalol</option>
    <option value="Kandla">Kandla</option>
    <option value="Kanodar">Kanodar</option>
    <option value="Kapadvanj">Kapadvanj</option>
    <option value="Karamsad">Karamsad</option>
    <option value="Kathor">Kathor</option>
    <option value="Katpur">Katpur</option>
    <option value="Kavant">Kavant</option>
    <option value="Kawant">Kawant</option>
    <option value="Keshod">Keshod</option>
    <option value="Khambhalia">Khambhalia</option>
    <option value="Khambhat">Khambhat</option>
    <option value="Kheda">Kheda</option>
    <option value="Khedbrahma">Khedbrahma</option>
    <option value="Kheralu">Kheralu</option>
    <option value="Kodinar">Kodinar</option>
    <option value="Kosamba">Kosamba</option>
    <option value="Kundla">Kundla</option>
    <option value="Kutch district">Kutch district</option>
    <option value="Kutiyana">Kutiyana</option>
    <option value="Lakhtar">Lakhtar</option>
    <option value="Lalpur">Lalpur</option>
    <option value="Lathi">Lathi</option>
    <option value="Limbdi">Limbdi</option>
    <option value="Lunavada">Lunavada</option>
    <option value="Mahemdavad">Mahemdavad</option>
    <option value="Mahesana">Mahesana</option>
    <option value="Mahudha">Mahudha</option>
    <option value="Malpur">Malpur</option>
    <option value="Manavadar">Manavadar</option>
    <option value="Mandal">Mandal</option>
    <option value="Mandvi">Mandvi</option>
    <option value="Mandvi (Surat)">Mandvi (Surat)</option>
    <option value="Mangrol">Mangrol</option>
    <option value="Mansa">Mansa</option>
    <option value="Meghraj">Meghraj</option>
    <option value="Mehsana">Mehsana</option>
    <option value="Mendarda">Mendarda</option>
    <option value="Modasa">Modasa</option>
    <option value="Morbi">Morbi</option>
    <option value="Morva (Hadaf)">Morva (Hadaf)</option>
    <option value="Morwa">Morwa</option>
    <option value="Mundra">Mundra</option>
    <option value="Nadiad">Nadiad</option>
    <option value="Naliya">Naliya</option>
    <option value="Narmada">Narmada</option>
    <option value="Naroda">Naroda</option>
    <option value="Navsari">Navsari</option>
    <option value="Okha">Okha</option>
    <option value="Olpad">Olpad</option>
    <option value="Paddhari">Paddhari</option>
    <option value="Padra">Padra</option>
    <option value="Palanpur">Palanpur</option>
    <option value="Palitana">Palitana</option>
    <option value="Paliyad">Paliyad</option>
    <option value="Panch Mahals">Panch Mahals</option>
    <option value="Panchmahal district">Panchmahal district</option>
    <option value="Pardi">Pardi</option>
    <option value="Parnera">Parnera</option>
    <option value="Patan">Patan</option>
    <option value="Pavi Jetpur">Pavi Jetpur</option>
    <option value="Petlad">Petlad</option>
    <option value="Porbandar">Porbandar</option>
    <option value="Radhanpur">Radhanpur</option>
    <option value="Rajkot">Rajkot</option>
    <option value="Rajpipla">Rajpipla</option>
    <option value="Rajula">Rajula</option>
    <option value="Ranavav">Ranavav</option>
    <option value="Rapar">Rapar</option>
    <option value="Roha">Roha</option>
    <option value="Sabar Kantha">Sabar Kantha</option>
    <option value="Sachin">Sachin</option>
    <option value="Salaya">Salaya</option>
    <option value="Sanand">Sanand</option>
    <option value="Sankheda">Sankheda</option>
    <option value="Sarkhej">Sarkhej</option>
    <option value="Savarkundla">Savarkundla</option>
    <option value="Sayla">Sayla</option>
    <option value="Shahpur">Shahpur</option>
    <option value="Shivrajpur">Shivrajpur</option>
    <option value="Siddhpur">Siddhpur</option>
    <option value="Sihor">Sihor</option>
    <option value="Sikka">Sikka</option>
    <option value="Sinor">Sinor</option>
    <option value="Sojitra">Sojitra</option>
    <option value="Songadh">Songadh</option>
    <option value="Surat">Surat</option>
    <option value="Surendranagar">Surendranagar</option>
    <option value="Talaja">Talaja</option>
    <option value="Tankara">Tankara</option>
    <option value="Tapi">Tapi</option>
    <option value="Than">Than</option>
    <option value="Thangadh">Thangadh</option>
    <option value="Tharad">Tharad</option>
    <option value="Thasra">Thasra</option>
    <option value="The Dangs">The Dangs</option>
    <option value="Umrala">Umrala</option>
    <option value="Umreth">Umreth</option>
    <option value="Un">Un</option>
    <option value="Una">Una</option>
    <option value="Unjha">Unjha</option>
    <option value="Upleta">Upleta</option>
    <option value="Utran">Utran</option>
    <option value="Vadnagar">Vadnagar</option>
    <option value="Vadodara">Vadodara</option>
    <option value="Vaghodia">Vaghodia</option>
    <option value="Vallabh Vidyanagar">Vallabh Vidyanagar</option>
    <option value="Vallabhipur">Vallabhipur</option>
    <option value="Valsad">Valsad</option>
    <option value="Vansda">Vansda</option>
    <option value="Vapi">Vapi</option>
    <option value="Vartej">Vartej</option>
    <option value="Vasa">Vasa</option>
    <option value="Vaso">Vaso</option>
    <option value="Vejalpur">Vejalpur</option>
    <option value="Veraval">Veraval</option>
    <option value="Vijapur">Vijapur</option>
    <option value="Vinchhiya">Vinchhiya</option>
    <option value="Vinchia">Vinchia</option>
    <option value="Virpur">Virpur</option>
    <option value="Visavadar">Visavadar</option>
    <option value="Visnagar">Visnagar</option>
    <option value="Vyara">Vyara</option>
    <option value="Wadhai">Wadhai</option>
    <option value="Wadhwan">Wadhwan</option>
    <option value="Waghai">Waghai</option>
    <option value="Wankaner">Wankaner</option>
</select>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Destination</label>
									<select name="destination" class="form-control js-example-basic-single  mt-2 mb-2" required>

										<option value="" selected disabled="">Choose City</option>
																				
    <option value="Abrama">Abrama</option>
    <option value="Adalaj">Adalaj</option>
    <option value="Ahmedabad">Ahmedabad</option>
    <option value="Ahwa">Ahwa</option>
    <option value="Amod">Amod</option>
    <option value="Amreli">Amreli</option>
    <option value="Amroli">Amroli</option>
    <option value="Anand">Anand</option>
    <option value="Anjar">Anjar</option>
    <option value="Ankleshwar">Ankleshwar</option>
    <option value="Babra">Babra</option>
    <option value="Bagasara">Bagasara</option>
    <option value="Bagasra">Bagasra</option>
    <option value="Banas Kantha">Banas Kantha</option>
    <option value="Bantva">Bantva</option>
    <option value="Bardoli">Bardoli</option>
    <option value="Bedi">Bedi</option>
    <option value="Bhachau">Bhachau</option>
    <option value="Bhanvad">Bhanvad</option>
    <option value="Bharuch">Bharuch</option>
    <option value="Bhavnagar">Bhavnagar</option>
    <option value="Bhayavadar">Bhayavadar</option>
    <option value="Bhuj">Bhuj</option>
    <option value="Bilimora">Bilimora</option>
    <option value="Bilkha">Bilkha</option>
    <option value="Borsad">Borsad</option>
    <option value="Botad">Botad</option>
    <option value="Chaklasi">Chaklasi</option>
    <option value="Chalala">Chalala</option>
    <option value="Chanasma">Chanasma</option>
    <option value="Chhala">Chhala</option>
    <option value="Chhota Udepur">Chhota Udepur</option>
    <option value="Chikhli">Chikhli</option>
    <option value="Chotila">Chotila</option>
    <option value="Dabhoi">Dabhoi</option>
    <option value="Dahegam">Dahegam</option>
    <option value="Dahod">Dahod</option>
    <option value="Dakor">Dakor</option>
    <option value="Damnagar">Damnagar</option>
    <option value="Dangs (India)">Dangs (India)</option>
    <option value="Dayapar">Dayapar</option>
    <option value="Delvada">Delvada</option>
    <option value="Delwada">Delwada</option>
    <option value="Devbhumi Dwarka">Devbhumi Dwarka</option>
    <option value="Devgadh Bariya">Devgadh Bariya</option>
    <option value="Dhandhuka">Dhandhuka</option>
    <option value="Dhanera">Dhanera</option>
    <option value="Dharampur">Dharampur</option>
    <option value="Dhari">Dhari</option>
    <option value="Dhola">Dhola</option>
    <option value="Dholka">Dholka</option>
    <option value="Dhoraji">Dhoraji</option>
    <option value="Dhrangadhra">Dhrangadhra</option>
    <option value="Dhrol">Dhrol</option>
    <option value="Dhuwaran">Dhuwaran</option>
    <option value="Disa">Disa</option>
    <option value="Dohad">Dohad</option>
    <option value="Dungarpur">Dungarpur</option>
    <option value="Dwarka">Dwarka</option>
    <option value="Gadhada">Gadhada</option>
    <option value="Gandevi">Gandevi</option>
    <option value="Gandhidham">Gandhidham</option>
    <option value="Gandhinagar">Gandhinagar</option>
    <option value="Gariadhar">Gariadhar</option>
    <option value="Ghogha">Ghogha</option>
    <option value="Gir Somnath">Gir Somnath</option>
    <option value="Godhra">Godhra</option>
    <option value="Gondal">Gondal</option>
    <option value="Halol">Halol</option>
    <option value="Halvad">Halvad</option>
    <option value="Hansot">Hansot</option>
    <option value="Harij">Harij</option>
    <option value="Himatnagar">Himatnagar</option>
    <option value="Jalalpore">Jalalpore</option>
    <option value="Jalalpur">Jalalpur</option>
    <option value="Jambusar">Jambusar</option>
    <option value="Jamnagar">Jamnagar</option>
    <option value="Jasdan">Jasdan</option>
    <option value="Jetalsar">Jetalsar</option>
    <option value="Jetpur">Jetpur</option>
    <option value="Jhulasan">Jhulasan</option>
    <option value="Jodhpur">Jodhpur</option>
    <option value="Jodia">Jodia</option>
    <option value="Jodiya Bandar">Jodiya Bandar</option>
    <option value="Junagadh">Junagadh</option>
    <option value="Kachchh">Kachchh</option>
    <option value="Kadi">Kadi</option>
    <option value="Kadod">Kadod</option>
    <option value="Kalavad">Kalavad</option>
    <option value="Kalol">Kalol</option>
    <option value="Kandla">Kandla</option>
    <option value="Kanodar">Kanodar</option>
    <option value="Kapadvanj">Kapadvanj</option>
    <option value="Karamsad">Karamsad</option>
    <option value="Kathor">Kathor</option>
    <option value="Katpur">Katpur</option>
    <option value="Kavant">Kavant</option>
    <option value="Kawant">Kawant</option>
    <option value="Keshod">Keshod</option>
    <option value="Khambhalia">Khambhalia</option>
    <option value="Khambhat">Khambhat</option>
    <option value="Kheda">Kheda</option>
    <option value="Khedbrahma">Khedbrahma</option>
    <option value="Kheralu">Kheralu</option>
    <option value="Kodinar">Kodinar</option>
    <option value="Kosamba">Kosamba</option>
    <option value="Kundla">Kundla</option>
    <option value="Kutch district">Kutch district</option>
    <option value="Kutiyana">Kutiyana</option>
    <option value="Lakhtar">Lakhtar</option>
    <option value="Lalpur">Lalpur</option>
    <option value="Lathi">Lathi</option>
    <option value="Limbdi">Limbdi</option>
    <option value="Lunavada">Lunavada</option>
    <option value="Mahemdavad">Mahemdavad</option>
    <option value="Mahesana">Mahesana</option>
    <option value="Mahudha">Mahudha</option>
    <option value="Malpur">Malpur</option>
    <option value="Manavadar">Manavadar</option>
    <option value="Mandal">Mandal</option>
    <option value="Mandvi">Mandvi</option>
    <option value="Mandvi (Surat)">Mandvi (Surat)</option>
    <option value="Mangrol">Mangrol</option>
    <option value="Mansa">Mansa</option>
    <option value="Meghraj">Meghraj</option>
    <option value="Mehsana">Mehsana</option>
    <option value="Mendarda">Mendarda</option>
    <option value="Modasa">Modasa</option>
    <option value="Morbi">Morbi</option>
    <option value="Morva (Hadaf)">Morva (Hadaf)</option>
    <option value="Morwa">Morwa</option>
    <option value="Mundra">Mundra</option>
    <option value="Nadiad">Nadiad</option>
    <option value="Naliya">Naliya</option>
    <option value="Narmada">Narmada</option>
    <option value="Naroda">Naroda</option>
    <option value="Navsari">Navsari</option>
    <option value="Okha">Okha</option>
    <option value="Olpad">Olpad</option>
    <option value="Paddhari">Paddhari</option>
    <option value="Padra">Padra</option>
    <option value="Palanpur">Palanpur</option>
    <option value="Palitana">Palitana</option>
    <option value="Paliyad">Paliyad</option>
    <option value="Panch Mahals">Panch Mahals</option>
    <option value="Panchmahal district">Panchmahal district</option>
    <option value="Pardi">Pardi</option>
    <option value="Parnera">Parnera</option>
    <option value="Patan">Patan</option>
    <option value="Pavi Jetpur">Pavi Jetpur</option>
    <option value="Petlad">Petlad</option>
    <option value="Porbandar">Porbandar</option>
    <option value="Radhanpur">Radhanpur</option>
    <option value="Rajkot">Rajkot</option>
    <option value="Rajpipla">Rajpipla</option>
    <option value="Rajula">Rajula</option>
    <option value="Ranavav">Ranavav</option>
    <option value="Rapar">Rapar</option>
    <option value="Roha">Roha</option>
    <option value="Sabar Kantha">Sabar Kantha</option>
    <option value="Sachin">Sachin</option>
    <option value="Salaya">Salaya</option>
    <option value="Sanand">Sanand</option>
    <option value="Sankheda">Sankheda</option>
    <option value="Sarkhej">Sarkhej</option>
    <option value="Savarkundla">Savarkundla</option>
    <option value="Sayla">Sayla</option>
    <option value="Shahpur">Shahpur</option>
    <option value="Shivrajpur">Shivrajpur</option>
    <option value="Siddhpur">Siddhpur</option>
    <option value="Sihor">Sihor</option>
    <option value="Sikka">Sikka</option>
    <option value="Sinor">Sinor</option>
    <option value="Sojitra">Sojitra</option>
    <option value="Songadh">Songadh</option>
    <option value="Surat">Surat</option>
    <option value="Surendranagar">Surendranagar</option>
    <option value="Talaja">Talaja</option>
    <option value="Tankara">Tankara</option>
    <option value="Tapi">Tapi</option>
    <option value="Than">Than</option>
    <option value="Thangadh">Thangadh</option>
    <option value="Tharad">Tharad</option>
    <option value="Thasra">Thasra</option>
    <option value="The Dangs">The Dangs</option>
    <option value="Umrala">Umrala</option>
    <option value="Umreth">Umreth</option>
    <option value="Un">Un</option>
    <option value="Una">Una</option>
    <option value="Unjha">Unjha</option>
    <option value="Upleta">Upleta</option>
    <option value="Utran">Utran</option>
    <option value="Vadnagar">Vadnagar</option>
    <option value="Vadodara">Vadodara</option>
    <option value="Vaghodia">Vaghodia</option>
    <option value="Vallabh Vidyanagar">Vallabh Vidyanagar</option>
    <option value="Vallabhipur">Vallabhipur</option>
    <option value="Valsad">Valsad</option>
    <option value="Vansda">Vansda</option>
    <option value="Vapi">Vapi</option>
    <option value="Vartej">Vartej</option>
    <option value="Vasa">Vasa</option>
    <option value="Vaso">Vaso</option>
    <option value="Vejalpur">Vejalpur</option>
    <option value="Veraval">Veraval</option>
    <option value="Vijapur">Vijapur</option>
    <option value="Vinchhiya">Vinchhiya</option>
    <option value="Vinchia">Vinchia</option>
    <option value="Virpur">Virpur</option>
    <option value="Visavadar">Visavadar</option>
    <option value="Visnagar">Visnagar</option>
    <option value="Vyara">Vyara</option>
    <option value="Wadhai">Wadhai</option>
    <option value="Wadhwan">Wadhwan</option>
    <option value="Waghai">Waghai</option>
    <option value="Wankaner">Wankaner</option>
</select>
								</div>
                                <div class="form-group mt-4 d-flex justify-content-between">
								<a href="http://localhost/bus/asset/login/login.php" class="btn btn-danger pull-left">Go Back </a>
								<button type="submit" name="submit" value="submit" class="btn btn-primary pull-right">Search </button>
</div>
							</form>
						</div>
					</div>
				</div>
				
	</section>

	<?php
			include 'footer.php';
			?>
</body>

</html>
<!-- Modal -->
<!-- Log on to codeastro.com for more projects -->
<div class="modal fade" id="ModalForm" tabindex="-1"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">How to book tickets?</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
				</button>
			</div>
			<div class="modal-body">
				<div class="table-responsive">
					<ol class="ordered-list" align="justify"><span class="center_content2">
					<li>Select date and select your origin and destination terminal/city in order to search for available schedules.
							<li>Search for tickets then click on the <b>Select </b> button on the ticket you want to book.
							</li>
							<li>The system will redirect you to seat selection page where you have to <b>select any seats</b> [Max.4 seats at a time]</li>
							<li>After selection of seats, click on the <b>Next </b>button to proceed. </li>
							<li>Fill up your ticket details by providing customer's details such as Passenger's Name, Age and other required <b>Customer Identity</b>. With it, select any of the available bank [as a Payment Method] to book tickets.</li>
							<li>After submitting the form,Click on Submit Button</li>
							<li>That page show all the Details of Like <b> Order-id,Ticket-id,Time,Seat number</b></li>
							<li>Following that, click on the <b>Submit for Payment</b></li>
							<li>At last, you Your are Payment With Credit Card,Debit Card</li>
							<li>You will also receive an <b>Invoice</b></li>
							<li>You Can dowload PDF of that Invoice,your ticket is booked</li>
						</span></ol>
					<w:worddocument></w:worddocument>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-bs-dismiss="modal" arial-label="close">Close</button>
			</div>
		</div>
	</div>
</div>