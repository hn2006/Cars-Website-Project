<?php
include('conf.php');
session_start();
$name=$_POST['username'];
$password=$_POST['password'];
$email_id=$_POST['email'];
$confirm_password=$_POST['confirm_password'];
if (strcmp($password, $confirm_password)==0){
  $sql = "insert into customer values ('$email_id','$name','$password')";

  if (mysqli_query($conn, $sql)) {

    $_SESSION['email']=$email_id;
  header('location:main_page.html');

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
else {

$_SESSION['valid']=2;  
header('location:signup_2.php');
}


mysqli_close($conn);
?>