<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>NAKURU COUNTY</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="bootstrap.css">
 <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.css">

  <link rel = "icon" href = "logo.png" type = "image/x-icon"> 
  <link rel = "icon" href = "img/logo.png" type = "image/x-icon"> 
</head>
<body class="bg-light">
	<div>
    <div class="" style="background-color:white">
   <center>
  <div style="color: blue;font-weight: bolder;"> NAKURU COUNTY VEHICLE MANAGEMENT SYSTEM</div>
 </center>
   </div>
 <nav class="navbar navbar-expand-lg navbar-light bg-primary" >

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    
<ul class="navbar-nav  mt-lg-0 mr-auto">
	<li class="nav-item">
        	<?php 
	session_start();
if (isset($_SESSION['User'])) {
                  echo '<a style="color: white; font-family:Verdana; font-weight:bolder;" class="nav-link"> '.$_SESSION['User'].'</a>';
                    }


 ?>
      </li>
</ul >
<ul class="navbar-nav  mt-lg-0 mx-auto">
    <li class="nav-item">
        <a style="color: white; font-family:Verdana; font-weight: bolder;" ></a>
      </li>
</ul>
 <ul class="navbar-nav  mt-lg-0 ml-auto">
    <li class="nav-item">
        <a href="reports.php" style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" >Print Reports</a>
      </li>
 	<li class="nav-item">
        <a style="color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" data-toggle="modal" data-target="#exampleModalCenter">Reset Password</a>
      </li>
 	<li class="nav-item">
   <?php 
echo '<a class="nav-link ml-auto" style="color: white; font-weight:bolder; font-family:Verdana"  href="logout.php?logout">Sign Out <i class="fa fa-sign-out" aria-hidden="true"></i></a>';
  ?>
   </li>
 </ul>
 </div> 
  </div>
</nav>
</div>
<div class="container pt-sm-4">
  <div class="jumbotron bg-light">
    <div class="container">
    <table class="mx-auto table-bordered" >
      <tr>
        <td data-toggle="modal" data-target="#station"  style="cursor: pointer;">New Vehicle</td>
        <td><a href="vehicles.php" style="text-decoration: none;color: black">All Vehicles</a> </td>
      </tr>
       <tr>
        <td data-toggle="modal" data-target="#cs"  style="cursor: pointer;">New Driver</td>
        <td style="color: black"><a href="cs.php" style="cursor: pointer;text-decoration: none;color: black">New CS</a></td>
      </tr>
        <tr>
        <td><a href="department.php" style="cursor: pointer;text-decoration: none;color: black">New Department</a></td>
        <td ><a href="assigned.php" style="text-decoration: none;color: black">View All Assigned Vehicles</a></td>
      </tr>
        <tr>
        <td><a href="assign.php" style="text-decoration: none;color: black">Assign Vehicle</a></td>
        <td><a href="issue.php" style="text-decoration: none;color: black">Maintenance</a></td>
      </tr>
      <tr>
        <td><a href="hearse.php" style="text-decoration: none;color: black">Add a Hearse</a></td>
        <td><a href="bus.php" style="text-decoration: none;color: black">Add a Bus</a></td>
      </tr>
    </table>
    <style>
      td{
        color: black;
        font-weight: bolder;
      }
    </style>
  </div>
</div>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">RESET PASSWORD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <form class="form" method="post" action="">
                                <div class="form-group">

                             <label style="font-weight: bold;">New Password</label>
                                    <input type="text" required="" class="form-control" name="pp" >
                                </div>
                           
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right" name="upp">Reset</button>
                                </div>
                            </form>
      </div>
    </div>
  </div>
</div>



<?php 

if (isset($_SESSION['User'])) {
	if (isset($_POST['upp'])){
$con=mysqli_connect("127.0.0.1","root","","nakuru");
//$ps=$_POST['num'];
$qr ="UPDATE `registration` SET `password`='".$_POST['pp']."' WHERE email = '".$_SESSION['User']."'";
if ($con->query($qr) === TRUE) {
  //header("Location: main.php");
}
}
}
 ?>
<div class="modal fade" id="station" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form" method="post" action="">
      <div class="modal-body">
        <div class="card card-outline-secondary">
     <div class="card-header bg-primary">
       <center><h3 style="color: white">NEW VEHICLE</h3></center> 
     </div>
                                <div class="form-group">

                             <label style="font-weight: bold;">Number Plate</label>
                                    <input type="text" required="" class="form-control" name="name" >
                                </div>
                            <div class="form-group">

                             <label style="font-weight: bold;">Vehicle Type</label>
                                    <input type="text" required="" class="form-control" name="loc" >
                                </div>



                                <div class="form-group">
                             
                                    <label style="font-weight: bold;">Department</label>
                                    <select class="form-control" name="st">
                                      <option value="">Select Department</option>
                                           <?php 
                                 //  session_start();
$con=mysqli_connect("127.0.0.1","root","","nakuru");
$query = "SELECT * FROM department";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_array($query_run)) {?>

                                      <option><?php echo $row['name'];?></option>
                                         <?php 
}
 ?>
                                    </select>

                                </div>
                                
<div class="form-group">

                             <label style="font-weight: bold;">Date Registered</label>
                                    <input type="date" required="" class="form-control" name="date" >
                                </div>
<div class="form-group">

                             <label style="font-weight: bold;">Status</label>
                                    <input type="text" required="" class="form-control" name="stt" value="Unassigned" readonly="readonly" >
                                </div>


      
     
        <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg float-right" name="add">Add</button>
                                </div>
        
                      
      </div>
          </div>                     
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="cs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card card-outline-secondary">
                        <div class="card-header bg-primary">
                         <center>  <h3 class=" mx-auto" style="color: white">NEW DRIVER</h3></center> 
                        </div>
                        <div class="card-body">
                            <form class="form" method="post" action="">
                                <div class="form-group">

                                   

<label style="font-weight: bold;">Driver ID</label>
                                    <input type="text" class="form-control" name="num" required="">
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Driver Name</label>
                                    <input type="text" class="form-control"  name="name" required="" >
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Driver Contacts</label>
                                    <input type="text" maxlength="10" class="form-control" name="cont" required="">

                                </div>
                                <div class="form-group">
                             
                    
<div class="modal-footer">
   <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg float-right" name="submit">Submit</button>
                                </div>
</div>


                               
                            </form>





                    


                                    
                        </div>
                    </div>
      </div>
      
    </div>
  </div>
</div>

<div class="modal fade" id="aa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form" method="post" action="">
      <div class="modal-body">
        <div class="card card-outline-secondary">
     <div class="card-header bg-primary">
       <center><h3 style="color: white">NEW VEHICLE</h3></center> 
     </div>
                                <div class="form-group">

                             <label style="font-weight: bold;">Number Plate</label>
                                    <input type="text" required="" class="form-control" name="name" >
                                </div>
                            <div class="form-group">

                             <label style="font-weight: bold;">Vehicle Type</label>
                                    <input type="text" required="" class="form-control" name="loc" >
                                </div>
                                
      
     
        <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg float-right" name="add">Add</button>
                                </div>
        
                      
      </div>
          </div>                     
      </div>
      </form>
    </div>
  </div>
</div>


</body>
</html>
<?php
if (isset($_POST['add'])) {
$con=mysqli_connect("127.0.0.1","root","","nakuru");
$query ="SELECT * FROM `vehicle` WHERE platenumber='".$_POST['name']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  echo "<script type='text/javascript'>alert('VEHICLE ALREADY REGISTERED!!');</script>";
}
else{
$sql="INSERT INTO `vehicle`(`platenumber`, `type`, `department`,`date`, `status`)VALUES('".$_POST['name']."','".$_POST['loc']."','".$_POST['st']."','".$_POST['date']."','".$_POST['stt']."')";
if(mysqli_query($con, $sql)){
//header("Location: main.php");
}
}
}
 ?>

 <?php
 //session_start();
if (isset($_POST['submit'])) {
$con=mysqli_connect("127.0.0.1","root","","nakuru");
$query ="SELECT * FROM `driver` WHERE did='".$_POST['num']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  echo "<script type='text/javascript'>alert('DRIVER ALREADY REGISTERED!!');</script>";
}
else{
$sql="INSERT INTO `driver`(`did`, `name`, `contacts`) VALUES('".$_POST['num']."','".$_POST['name']."','".$_POST['cont']."')";
if(mysqli_query($con, $sql)){

}
}
}
 ?>