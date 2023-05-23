<?php 
$Username=$_POST['Username'];
$password=$_POST['password'];
#Given your database name and password.
$con=mysqli_connect("localhost","root","","loginpage_db") or die("db not connected");
$que="select * from pagess where Username='$Username'";
$res=mysqli_query($con,$que);
if($row=mysqli_fetch_array($res))
{
   if($row['password']==$password) 
     { 
        #given your href='link page path'.
        echo"<script> alert('login success'); 
        window.location.href='index.php';</script>";
     }
    else
    {
        echo"<script>alert('login unsuccess');
        window.location.href='index.php';</script>";
    }
}
else
{
    echo"<script>alert('invalid username')
   </script>;";
}
?>