<?php 
session_start();

 if (isset($_SESSION['valid'])&&$_SESSION['valid']==2) {
        echo "<script>alert('both your passwords doesnt match')</script>";
        $_SESSION['valid']=1;
 }
 

echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>SIGNUP PAGE</title>
    <link rel='stylesheet' href='login.css'>
    <style>
    body{
        /* background-image: linear-gradient(135deg, #cfa2eb 10%, #6be6c5 100%); */
        /* background-image: linear-gradient(135deg, #eac8ff 10%, #e6f7ae 100%);
        background-image: linear-gradient(135deg, #eac8ff 10%, #e6f7ae 100%); */
         background-image: linear-gradient(135deg, #c2f4f4 10%, #e6f7ae 100%); 
        /* background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed; */
    }
    h1{width:150px;
        margin-left: 28%;};
    .signup{
        padding: 20px;
    };
    </style>
</head>
<body>";
 echo "
      
    <div class='main_box2'>
        <h1>Signup</h1><form action='signup.php' method='post'>
            <div class='input_box2'>
                <img src='user_icon.png'>
                <input type='text'   placeholder='Enter your username' 
                name='username' id='user_name' class='input'>
            </div>
        <div class='input_box2'>
            <img src='icons8-email-48.png'>
            <input type='email'   placeholder='Enter your email' 
            name='email' id='email_id' class='input'>
        </div>
        <div class='input_box2'>
            <img src='icons8-key-60.png'>
            <input type='password' placeholder='Enter your password' name='password' class='input' id='pswd1'>
        </div>
        <div class='input_box2'>
            <img src='confirm-password.png'>
            <input type='password' placeholder='Confirm password' name='confirm_password' class='input' id='pswd2'>
        </div>
        <br>

        <button type='submit'>SIGNUP</button>

    </form>
<div id='signup'>

    already have a account <a href='login_page.html'>signin</a> here
</div></div>
</body>
</html>";
 ?>