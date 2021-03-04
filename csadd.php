<?php
 //session_start();

$con=mysqli_connect("127.0.0.1","root","","nakuru");
$query ="SELECT * FROM `cs` WHERE id='".$_POST['id']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  header("Location:cs.php?Invalid= Cabinet Secretary already added");
}
else{
$sql="INSERT INTO `cs`(`id`, `name`, `email`, `cont`) VALUES('".$_POST['id']."','".$_POST['name']."','".$_POST['email']."','".$_POST['cont']."')";
if(mysqli_query($con, $sql)){
header("Location:cs.php?success= Cabinet Secretary added Successfully");
}
}

 ?>

