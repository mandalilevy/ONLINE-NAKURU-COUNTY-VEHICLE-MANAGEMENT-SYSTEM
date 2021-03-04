<?php
 //session_start();

$con=mysqli_connect("127.0.0.1","root","","nakuru");
$query ="SELECT * FROM `bookhearse` WHERE plate='".$_POST['plate']."' and date='".$_POST['date']."'";
$result=mysqli_query($con,$query);
$stat="Assigned";
if (mysqli_fetch_assoc($result)) {
  header("Location:bookhearse.php?Invalid= HEARSE ALREADY BOOKED!!SELECT ANOTHER ONE");
}
else{
$sql="INSERT INTO `bookhearse`(`rid`, `name`, `plate`, `date`, `cont`) VALUES('".$_POST['id']."','".$_POST['name']."','".$_POST['plate']."','".$_POST['date']."','".$_POST['cont']."')";
if(mysqli_query($con, $sql)){

header("Location:bookhearse.php?success= HEARSE BOOKED SUCCESSFULLY!");

}
}

 ?>

