<?php
 //session_start();

$con=mysqli_connect("127.0.0.1","root","","nakuru");
$sql="INSERT INTO  `issue`(`vehicle`, `issue`) VALUES('".$_POST['vh']."','".$_POST['issue']."')";
if(mysqli_query($con, $sql)){
header("Location:issue.php?success= Issue Successfully Reported");
}


 ?>

