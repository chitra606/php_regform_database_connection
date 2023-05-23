<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
  $Fullname=$_POST['Fullname'];
  $Username=$_POST['Username'];
  $Email=$_POST['Email'];
  $phone_number=$_POST['phone_number'];
  $password=$_POST['password'];
  $confirm_password=$_POST['confirm_password'];
  $gender=$_POST['gender'];
echo $Fullname.$Username.$Email.$phone_number.$password.$confirm_password.$gender;
$con=mysqli_connect("localhost","root","","loginpage_db");

$query="INSERT INTO pagess values(null,'$Fullname','$Username','$Email','$phone_number','$password','$confirm_password','$gender')";

if(mysqli_query($con,$query))
{
  echo "<script> alert('data saved html page');
	window.location.href='logpage3.php';</script>";

}
else
{
  echo "<script> alert('data not saved html page');
	window.location.href='logpage3.php';</script>"; 
}
}
?>
