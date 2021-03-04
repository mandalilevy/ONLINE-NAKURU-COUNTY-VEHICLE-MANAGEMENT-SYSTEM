<?php
 //session_start();

$con=mysqli_connect("127.0.0.1","root","","nakuru");
$query ="SELECT * FROM `department` WHERE name='".$_POST['name']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  header("Location:department.php?Invalid= Department already added");
}
else{
$sql="INSERT INTO `department`(`name`) VALUES('".$_POST['name']."')";
if(mysqli_query($con, $sql)){
header("Location:department.php?success= Department added Successfully");
}
}

 ?>

