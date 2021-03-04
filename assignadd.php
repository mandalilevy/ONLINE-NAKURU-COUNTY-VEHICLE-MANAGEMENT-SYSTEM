<?php
 //session_start();

$con=mysqli_connect("127.0.0.1","root","","nakuru");
$query ="SELECT * FROM `assignment` WHERE vehicle='".$_POST['vh']."'";
$result=mysqli_query($con,$query);
$stat="Assigned";
if (mysqli_fetch_assoc($result)) {
  header("Location:assign.php?Invalid= Vehicle already assigned");
}
else{
$sql="INSERT INTO `assignment`(`driver`, `cs`, `vehicle`) VALUES('".$_POST['driver']."','".$_POST['st']."','".$_POST['vh']."')";
if(mysqli_query($con, $sql)){

$uu="UPDATE `vehicle` SET `status`='$stat' WHERE platenumber='".$_POST['vh']."'";
if(mysqli_query($con, $uu)){
header("Location:assign.php?success= Vehicle assigned Successfully");

}



	
//header("Location:assign.php?success= Vehicle assigned Successfully");

}
}

 ?>

