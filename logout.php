<?php

session_start();
echo '<script>alert("logout successfully")</script>';

session_destroy();
header('location:second.php');

?>