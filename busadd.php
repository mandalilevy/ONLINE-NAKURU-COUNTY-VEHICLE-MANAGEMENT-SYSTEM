<?php
 //session_start();

$con=mysqli_connect("127.0.0.1","root","","nakuru");
$query ="SELECT * FROM `bus` WHERE name='".$_POST['name']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  header("Location:bus.php?Invalid= Bus already added");
}
else{
$sql="INSERT INTO `bus`(`name`) VALUES('".$_POST['name']."')";
if(mysqli_query($con, $sql)){
header("Location:bus.php?success= Bus added Successfully");
}
}

 ?>

