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
        <a href="dashboard.php" style="text-decoration: none; color: white; font-family:Verdana; cursor: pointer; font-weight: bolder;">HOME<i class="fa fa-home"></i></a>
      </li>
 
 </ul>
 </div> 
  </div>
</nav>
</div>
 


<div class="container pt-sm-4">
  <div class="">
    <div class="">
       <table class="table  table-bordered table-responsive-sm table-sm">
    <thead class="thead-light">
<tr>
<th scope="col"><strong>DRIVER</strong></th>
<th scope="col"><strong>CABINET SECRETARY</strong></th>
<th scope="col"><strong>VEHICLE</strong></th>


</tr>
</thead>
<tbody>
<?php
$con=mysqli_connect("127.0.0.1","root","","nakuru");
$query ="SELECT * FROM `assignment`";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)) { ?>

<tr><td><?php echo $row["driver"]; ?></td>
<td ><?php echo $row["cs"]; ?></td>
<td ><?php echo $row["vehicle"]; ?></td>


</tr>
<?php } ?>

</tbody>
</table>
  </div>
</div>






 </body>
 </html>
