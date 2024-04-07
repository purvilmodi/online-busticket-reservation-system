<?php
include 'managebus_script.php';
session_start();
include 'connection.php';
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
  $sql1=mysqli_query($conn,"select * from bus");
  ?>
<body>
<?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}

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
   <h4>Manage Bus</h4>
               <div class="container" style="margin-top:90px;">
                        <div class="container-fluid" style="border:2px solid rgba(81, 80, 80, 0.2);">
      <!-- DataTales Example -->
      <!-- Log on to codeastro.com for more projects -->
      <div class="card-shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
          <button type="button" class="btn btn-success pull-right" data-bs-toggle="modal" data-bs-target="#ModalTujuan">
          Add Bus
          </button>
          <div>
           Search:<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Enter Busno" style="background-color:rgb(248, 249, 252);border:1px solid rgb(227, 230, 240);font-size:17px;padding:5px;">
            </div>
        </div>
        
        <div class="card-body">
        <div class="table-responsive">
        <table id="myTable" class="table table-bordered table-hover table-striped">
									<thead class="table-dark">
										<tr style="line-height:50px;letter-spacing:1.5px;">
                                        <th scope="col">#</th>
										<th scope="col">Bus No</th>
                                        <th>Bus Type</th>
										<th scope="col">Origin</th>
										<th>Destination</th>
										<th scope="col">Date</th>											
                                        <th scope="col">Time</th>											
										<th>Price</th>
											<th scope="col">Arrival Time</th>
                      <th scope="col">Action</th>
										</tr>
									</thead>
									<tbody style="font-size: 14px;font-weight: 300;">
                  <?php
                                        $LimitPerPage = 10;
                                        $offset = ($page - 1) * $LimitPerPage;
                                        $query = "SELECT * From bus LIMIT $LimitPerPage OFFSET  $offset";
                                        $result = mysqli_query($conn, $query);
                                        $sno= $offset + 1;
                                    while($row1 = mysqli_fetch_assoc($result)){
                                         ?>
                                          <tr style="line-height:40px;letter-spacing:1.5px;font-size:15px;">                                          
                                          <td><?php echo $sno;?></td>
										  <td><?php echo $row1['no'];?></td>
                                          <td><?php echo $row1['type'];?></td>
                                          <td><?php echo $row1['origin'];?></td>
                                          <td><?php echo $row1['destination'];?></td>
                                          <td><?php echo $row1['date']?></td>
                                          <td><?php echo $row1['time'];?></td>
                                          <td><?php echo $row1['price'];?></td> 
                                          <td><?php echo $row1['arrival_time'];?></td> 
                                          <td>
                                          <a href='http://localhost/bus/admin/updatebus.php?no=<?php echo $row1['no']?>' class='btn btn-outline-primary'>Edit</a>
                                            <a href='http://localhost/bus/admin/managebus_script.php?no=<?php echo $row1['no']?>' onclick="return confirm('Are you sure you want to delete this item?')" class='btn btn-outline-danger'>Delete</a></td>
                                          </tr>                                         
										  <?php
                                          $sno++;
                                        }
                                       ?>
									</tbody>
                                    
								</table>
                <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

                <?php
    $CountQuery = "SELECT count(*) FROM bus";
    $res = mysqli_query($conn, $CountQuery);
    $records = mysqli_fetch_array($res)[0];
    $totalpages = ceil($records / $LimitPerPage);
    mysqli_close($conn);
    ?>
    <p style="text-align:center;"><?php echo $page." of ".$totalpages." pages "; ?></p>
    <a class="btn btn-primary
     <?php
      if($page <= 1){ 
        echo 'disabled';
         } 
         ?>"
    href="<?php if($page <= 1){ echo '#'; } 
    else {
       echo "?page=".($page - 1); 
       } ?>">
    &lt;&lt;
    </a>
    <?php
    echo '<a class="btn btn-primary" href = "?page=1">First</a>';
    for($num = 1; $num<= $totalpages; $num++) { 
        if($num>5){
            echo '<a class="btn"> . . . </a>';
            break;
        }
        if($page==$num){
        echo '<a class="btn btn-dark active mx-2" href = "?page=' . $num . '">' . $num . ' </a>';
        } else{
        echo '<a class="btn btn-primary mx-2" href = "?page=' . $num . '">' . $num . ' </a>';
        }  
    } 
    echo '<a class="btn btn-primary" href = "?page='.$totalpages.'">Last</a>';
    ?>
    <a class="btn btn-primary <?php if($page >= $totalpages){ 
      echo 'disabled';
       } ?>"
    href="<?php if($page >= $totalpages){
       echo '#';
        } else { 
          echo "?page=".($page + 1);
           } ?>">
    &gt;&gt;
    </a>
								
          </div>
</div>
</div>
</div>
</div>
    <!-- /.container-fluid -->
  <!-- /.container-fluid -->

<!-- bus form -->
<div class="modal fade" id="ModalTujuan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Add Bus</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-bs-label="Close">
        </button>
  </div>
  <div class="modal-body">
    <form action="http://localhost/bus/admin/managebus.php" method="post">
      <div class="form-group">
        <label for="busno" class="">Bus No</label>
        <input type="text" class="form-control my-2" name="bus_no" placeholder="Bus No" required>
      </div>
      <div class="form-group">
        <label for="type" class="">Bus Type</label>
        <select name="type" id="type" class="form-control my-2" required>
        <option value="" selected disabled="">Choose Bus Type</option>
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
      <div class="form-group">
        <label for="origin" class="">origin city</label>
        <select name="origin" class="form-control my-2" required>

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
        <label for="destination" class="">Destination city</label>
        <select name="destination" class="form-control my-2" required>

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
        <label for="date" class="">Date</label>
        <input required type="date" class="form-control my-2" name="date" min="<?php echo date('Y-m-d'); ?>">
      </div>

      <div class="form-group">
        <label for="time" class="">Time</label>
        <input type="time" class="form-control my-2" name="time" required>
      </div>

      <div class="form-group">
        <label for="price" class="">Price</label>
        <input type="number" class="form-control my-2" name="price" required>
      </div>

      <div class="form-group">
        <label for="arrival_time" class="">Arrival Time</label>
        <input type="time" class="form-control my-2" name="arrival_time" required>
      </div>



      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-success" type="submit" name="submit">Save</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>
</body>
</html>