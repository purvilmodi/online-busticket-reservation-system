<?php
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
<body>
<?php
     if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    ?>
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
   

   <div class="container" style="margin-top:20px;">
                        <div class="container-fluid" style="border:2px solid rgba(81, 80, 80, 0.2);">
      <!-- DataTales Example -->
      <!-- Log on to codeastro.com for more projects -->
      <div class="card-shadow mb-4">
        <div class="card-header d-flex justify-content-between">
        <h4>Booking List</h4>
        <div>
        Search:<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Enter order-id" style="background-color:rgb(248, 249, 252);border:1px solid rgb(227, 230, 240);margin:20px;font-size:17px;padding:5px;">
            </div>
        </div>
        
        <div class="card-body">
        <div class="table-responsive">
        <table id="myTable" class="table table-bordered table-hover table-striped">
									<thead class="table-dark">
										<tr style="line-height:50px;letter-spacing:1.5px;">
                                        <th scope="col">#</th>
										<th scope="col">Order-Id</th>                                      
                                        <th>Bus No</th>	
                                        <th scope="col">Departure</th>																			
										<th scope="col">Customer-Email</th>											
                                        <th scope="col">Seat-No</th>																					
										</tr>
									</thead>
									<tbody style="font-size: 14px;font-weight: 300;">
                                        <?php
                                        $LimitPerPage = 10;
                                        $offset = ($page - 1) * $LimitPerPage;
                                        $query = "SELECT * From payment LIMIT $LimitPerPage OFFSET  $offset";
                                        $result = mysqli_query($conn, $query);
                                        $sno= $offset + 1;
                                    while($row = mysqli_fetch_assoc($result)){
                                      $busno=$row['bus_no'];
                                      $query1=mysqli_query($conn,"SELECT * FROM bus where no='$busno'")or die(mysqli_error());
                                      $row1=mysqli_fetch_array($query1);
                                         ?>
                                          <tr style="line-height:40px;letter-spacing:1.5px;font-size:15px;">                                          
                                          <td><?php echo $sno;?></td>
										                      <td><?php echo $row['order_id'];?></td>                                          
                                          <td><?php echo $row['bus_no'];?></td>
                                          <td><?php echo $row1['origin'];?>-<?php echo $row1['destination'];?></td>
                                          <td><?php echo $row['email'];?></td>
                                          <td><?php echo $row['seat']?></td>                                          
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
    $CountQuery = "SELECT count(*) FROM payment";
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

    
</body>
</html>