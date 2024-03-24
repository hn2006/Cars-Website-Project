<?php
include('conn.php');
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$sql = "insert into contact(name,email,message) values ('$name','$email','$message')";
$res=mysqli_query($conn,$sql);
if($res)
{
    echo"<script>alert('your message has been sent')</script>";
    header('location:main_page.php');
}
else
{
    echo"<script>alert('INCORRECT EMAIL OR PASSWORD')</script>";
    header('location:contact_form.php');
}
?>