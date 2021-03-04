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
<body class="bg-primary">
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
        <a href="dashboard.php" style="text-decoration: none; color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;">HOME<i class="fa fa-home"></i></a>
      </li>
 
 </ul>
 </div> 
  </div>
</nav>
</div>
 <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 bg-light mt-4 p-2 rounded">
        <div class="">
          <div >
              <h5 class="card-title text-center" style="color: blue">NEW DEPARTMENT REGISTRATION</h5>
             <?php 
                 if (@$_GET['Invalid']==true)
                 {
                   ?>
                  <div class="card-title alert-light text-danger text-center text-uppercase"><?php echo $_GET['Invalid']?></div>
                   <?php 
                 }
               ?>
                 <?php 
                 if (@$_GET['success']==true)
                 {
                   ?>
                  <div class="card-title alert-light text-success text-center text-uppercase"><?php echo $_GET['success']?></div>
                   <?php 
                 }
               ?>

       <form action="dadd.php" method="POST">       
  
              <div class="form-group row">
  <label for="inputEmail3" class="col-sm-2 col-form-label"> Name</label>
  <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="name" name="name" required="">
  </div>
  </div>
  
          
  

  <div class="form-group">
  <div class="">
    <button type="submit" id="Register" name="" class="btn btn-success">Register</button>

  </div>
  </div>
  <span id="success_message" class="text-success"></span>
                </fieldset>
  </form>


          </div>
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
$sql="INSERT INTO `vehicle`(`platenumber`, `type`)VALUES('".$_POST['name']."','".$_POST['loc']."')";
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