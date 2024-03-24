<?php
    include ('conn.php');

    // $veh_id = $_POST['veh_id'];
     
    if(isset($_POST['delete'])) {
        $veh_id = $_POST['veh_id'];
        $sql="delete from vehicle where veh_id='$veh_id' ";
        $res=mysqli_query($conn, $sql);
        if($res) {
            echo "<script>alert('Data deleted succesflly !!!')</script>";
            header("location:admin_showData.php");
        }
        else {
            echo "<script>alert('Deletion failed')</script>";
        }
    }

?>