<?php
session_start();
include 'usermanagement_script.php';
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
$sql1=mysqli_query($conn,"select * from admin");
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
   <h4>List of System Administrators</h4>
               <div class="container" style="margin-top:90px;">
                        <div class="container-fluid" style="border:2px solid rgba(81, 80, 80, 0.2);">
      <!-- DataTales Example -->
      <!-- Log on to codeastro.com for more projects -->
      <div class="card-shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
          <button type="button" class="btn btn-success pull-right" data-bs-toggle="modal" data-bs-target="#ModalTujuan">
          Add Access Account
          </button>
        </div>
        
        <div class="card-body">
        <div class="table-responsive">
        <table id="table" class="table table-bordered table-hover table-striped">
									<thead class="table-dark">
										<tr style="line-height:50px;letter-spacing:1.5px;">
                                        <th scope="col">#</th>
										<th scope="col">Name</th>
                                        <th>Username</th>
										<th scope="col">Email</th>
										<th>Level</th>										
										</tr>
									</thead>
									<tbody style="font-size: 14px;font-weight: 300;">
                                        <?php
                                        $sno=1;
                                    while($row1=$sql1->fetch_assoc()){
                                         ?>
                                          <tr style="line-height:40px;letter-spacing:1.5px;font-size:15px;">                                          
                                          <td><?php echo $sno;?></td>
										  <td><?php echo $row1['name'];?></td>
                                          <td><?php echo $row1['username'];?></td>
                                          <td><?php echo $row1['email'];?></td>
                                          <td><?php echo $row1['level'];?></td>                                          
                                          </tr>                                         
										  <?php
                                          $sno++;
                                        }
                                       ?>
									</tbody>
                                    
								</table>
								
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
    <h5 class="modal-title" id="exampleModalLabel">Add New Admin</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-bs-label="Close">
        </button>
  </div>
  <div class="modal-body">
    <form action="http://localhost/bus/admin/usermanagement.php" method="post">
      <div class="form-group">        
        <input type="text" class="form-control my-2" name="name" placeholder="Name" required>
        <small class="text-danger pl-3">
            <?php if($nameErr!=1){ echo $nameErr; } ?>
        </small>
      </div>
      
<div class="form-group">        
        <input required type="text" class="form-control my-2" name="username" placeholder="Username">
        <small class="text-danger pl-3">
            <?php if($usernameErr!=1){ echo $usernameErr; } ?>
        </small>
      </div>

      <div class="form-group">        
        <input type="text" class="form-control my-2" name="email" placeholder="Email-Id" required>
        <small class="text-danger pl-3">
            <?php if($emailErr!=1){ echo $emailErr; } ?>
        </small>
      </div>

      <div class="form-group">        
        <input type="password" class="form-control my-2" name="password" placeholder="Password" required>
        <small class="text-danger pl-3">
            <?php if($passwordErr!=1){ echo $passwordErr; } ?>
        </small>
      </div>

      <div class="form-group">        
        <input type="password" class="form-control my-2" name="cpassword" placeholder="Confirm-Password" required>
        <small class="text-danger pl-3">
            <?php if($cpasswordErr!=1){ echo $cpasswordErr; } ?>
        </small>
      </div>

      <div class="form-group">
       
        <select name="level" id="level" class="form-control my-2" required>
        <option value="Adminstartor" selected >Adminstartor</option>
        <option value="owner">owner</option>        
        </select>
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