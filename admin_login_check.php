<?php
include('conn.php');
$id=$_POST['admin_id'];
$pass=$_POST['password'];
$sql="select * from admin where admi_id='$id' and password='$pass'";
$res=mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($res))
{
header('location:admin_showData.php');
}
else
{
 echo"<script>alert('INCORRECT EMAIL OR PASSWORD')</script>";
header('location:admin_login.html');
}
?>