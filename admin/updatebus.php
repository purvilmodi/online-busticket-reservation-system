<?php
include 'connection.php';
extract($_POST);
if(isset($_POST['submit']))
{
    $no=$_GET['no'];
    $type=$_REQUEST["type"];
    $origin=$_REQUEST["origin"];
    $destination=$_REQUEST["destination"];
    $date=$_REQUEST["date"];
    $time=$_REQUEST["time"];
    $price=$_REQUEST["price"];
    $arrival_time=$_REQUEST["arrival_time"];

    $sql2="update bus set type='$type',origin='$origin',destination='$destination',date='$date',
    time='$time',price='$price',arrival_time='$arrival_time' where no='$no'";
    $result=mysqli_query($conn,$sql2);

    if($result){
        header("location:http://localhost/bus/admin/managebus.php");   // create my-account.php page for redirection 	
    }
    else
    {
        header("location:http://localhost/bus/admin/dashboard.php");   // create my-account.php page for redirection 	
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
		 <script src="js/bootstrap.bundle.js"></script>

</head>
<?php
session_start();
include 'connection.php';
$no=$_GET['no'];
$sql=mysqli_query($conn,"SELECT * FROM bus where no='$no'")or die(mysqli_error());
$row=mysqli_fetch_array($sql);
?>
<body>
<?php
  $username=$_SESSION['username'];
  $headersql=mysqli_query($conn,"SELECT * FROM admin where username='$username'")or die(mysqli_error());
  $headerrow=mysqli_fetch_array($headersql);
  if($headerrow['level'] == 'owner')
  {
    include 'header.php';
  }
  else{
    include 'header1.php';
  }
  ?>
			<div class="container-fluid">
				<div class="container-fluid d-flex justify-content-center">
					<div class="col-lg-8">
						<!-- Default Card Example -->
						<div class="card mb-5" style="margin-top:50px;box-shadow: -15px 6px 68px 42px rgba(104,117,125,0.43);
-webkit-box-shadow: -15px 6px 68px 42px rgba(104,117,125,0.43);
-moz-box-shadow: -15px 6px 68px 42px rgba(104,117,125,0.43);">
							<div class="card-header" style="font-size:18px;text-align:center;letter-spacing:2px;">
								Bus No:<?php echo $row['no']?>
							</div>
							<div class="card-body">
								<form action="" method="post">
                                <div class="form-group">
                                <label for="bustype" class="text-secondary">Select Bus Type</label>
        <select name="type" id="type" class="form-control my-2" required>
        <option value="<?php echo $row['type']?>"><?php echo $row['type']?></option>
        <option value="Local">Local</option>
        <option value="Express">Express</option>
        <option value="Mini Bus">Mini Bus</option>
        <option value="Gujarnagari">Gujarnagari</option>
        <option value="Sleeper">Sleeper</option>
        <option value="Volvo Sleeper">Volvo Sleeper</option>
        <option value="AC Sleeper">AC Sleeper</option>
        <option value="AC Seater">AC Seater</option>
        <option value="Volvo Seater">Volvo Seater</option>
        </select>
      </div>
									<div class="form-group row mb-4">
                                    <div class="form-group col-sm-6">
        <label for="origin" class="text-secondary">origin city</label>
        <select name="origin" class="form-control my-2" required>

<option value="<?php echo $row['origin']?>"><?php echo $row['origin']?></option>
                    
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

<div class="form-group col-sm-6">
        <label for="destination" class="text-secondary">Destination city</label>
        <select name="destination" class="form-control my-2" required>

<option value="<?php echo $row['destination']?>"><?php echo $row['destination']?></option>
                    
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

										
									</div>
                                    <div class="form-group row mb-4">
									<div class="form-group col-sm-6">
        <label for="date" class="text-secondary">Date</label>
        <input required type="date" class="form-control my-2" name="date" min="<?php echo date('Y-m-d'); ?>" value="<?php echo $row['date']?>">
      </div>

      <div class="from-group col-sm-6">
        <label for="time" class="text-secondary">Time</label>
        <input type="time" value="<?php echo $row['time']?>" class="form-control my-2" name="time" required>
      </div>
</div>
									<div class="form-group row mb-4">
										<div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="price" class="text-secondary">Price</label>
        <input type="number" class="form-control my-2" name="price" value="<?php echo $row['price']?>" required>
                                           
										</div>
										<div class="col-sm-6">
                                        <label for="arrival_time" class="text-secondary">Arrival Time</label>
        <input type="time" class="form-control my-2" name="arrival_time" value="<?php echo $row['arrival_time']?>" required>
                                            
										</div>
									</div>
										
								<div class="form-group d-flex justify-content-between">
                                    <a href="http://localhost/bus/admin/managebus.php" class="btn btn-danger">Go Back</a>
                                    <button type="submit" name="submit"  onclick="return confirm('Are you sure you want to Change the Details?')" class="btn btn-success">Submit</button>
                                </div>
								</form>
								<hr>
								
							</div>
						</div>
					</div>
</div>

</body>
</html>

