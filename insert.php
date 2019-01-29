<?php 
include 'dbcon.php';
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$query="insert into dummy(name,email,password,mobile,gender)values('$name','$email','$password','$mobile','$gender')";
$run=mysqli_query($con,$query);
if ($run) {
	header('location:showdata.php?msg=Data inserted Successfully');
}
else{
	echo "error in data insertion";
}
 ?>
