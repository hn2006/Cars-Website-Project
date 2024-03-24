<?php
include('conn.php');
session_start();
// if (isset($_SESSION['email'])) {

//     header(location:'main_page.html');
// }
// else {
$email=$_POST['email'];
$pass=$_POST['password'];
$sql="select * from customer where email_id='$email' and password='$pass' ";
$res=mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($res))
{
// $_SESSION['email']=$result['email'];
header('location:main_page.php');
}
else
{
 echo'<script>alert("INCORRECT EMAIL OR PASSWORD")</script>';
header('location:login_page.html');
}
// }
?>