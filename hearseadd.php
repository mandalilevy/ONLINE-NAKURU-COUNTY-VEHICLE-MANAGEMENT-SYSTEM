<?php
 //session_start();

$con=mysqli_connect("127.0.0.1","root","","nakuru");
$query ="SELECT * FROM `hearse` WHERE name='".$_POST['name']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  header("Location:hearse.php?Invalid= Hearse already added");
}
else{
$sql="INSERT INTO `hearse`(`name`) VALUES('".$_POST['name']."')";
if(mysqli_query($con, $sql)){
header("Location:hearse.php?success= Hearse added Successfully");
}
}

 ?>

