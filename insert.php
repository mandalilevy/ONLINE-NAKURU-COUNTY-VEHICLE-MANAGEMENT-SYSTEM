
<?php
$con=mysqli_connect("127.0.0.1","root","","nakuru");

$idn=$_POST['id'];
$nm=$_POST['name'];
$em=$_POST['email'];
$ph=$_POST['cont'];
$ps=$_POST['pas'];
$sql = "INSERT INTO `registration`(`id`, `name`, `email`, `contacts`, `password`) VALUES ('$idn', '$nm', '$em','$ph', '$ps')";
if(mysqli_query($con, $sql)){
echo "Message Saved";
header("Location:index.php");
} 

else{
   header("Location:registration.php?Invalid=Data Not Saved!! Duplicate entry of ID Number");
}
 

mysqli_close($con);
 ?>