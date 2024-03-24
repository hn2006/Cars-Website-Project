<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .form-group {
            padding:2%;
            display:inline-block;
        }
        .jumbotron{
            border:solid;
            padding:2%;
        }
        body{
    /* background-image: linear-gradient(135deg, #cfa2eb 10%, #6be6c5 100%); */
    /* background-image: linear-gradient(135deg, #eac8ff 10%, #e6f7ae 100%);
    background-image: linear-gradient(135deg, #eac8ff 10%, #e6f7ae 100%); */
    background-image: linear-gradient(135deg, #c2f4f4 10%, #e6f7ae 100%);
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
.container{
}
    </style>
</head>
<body >


<header>
    <div class="px-3 py-2 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="second.php" class="nav-link text-secondary">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"></use></svg>
                HOME
              </a>
            </li>
            <li>
              <a href="admin_insertdata.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"></use></svg>
                INSERT
              </a>
            </li>
            <li>
              <a href="admin_showData.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"></use></svg>
                SEE DETAILS
              </a>
            </li>
            <li>
              <a href="admin_contact.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"></use></svg>
                Q/A
              </a>
            </li>
            <li>
              <a href="logout.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"></use></svg>
                LOGOUT
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>



    <div class="container">
        <div class="jumbotron" style="margin:8%">
            <h2 class="heading">Add data</h2>
            <hr>
            <form action="" method="post">
               
                <div class="form-group">
                    <label for="" class="title"> Vehicle Id : </lable>
                    <input type="number" name="veh_id" class="form-control" required placeholder="Enter Vehicle id">
                </div>
                <div class="form-group">
                    <label for=""> Type </lable>
                    <input type="text" name="type" class="form-control" placeholder="Enter Type">
                </div>
                <div class="form-group">
                    <label for=""> Range </lable>
                    <input type="text" name="range" class="form-control" placeholder="Enter Range ">
                </div>
                <div class="form-group">
                    <label for=""> Battery </lable>
                    <input type="text" name="battery" class="form-control" placeholder="Enter Battery">
                </div>
                <div class="form-group">
                    <label for=""> Top speed </lable>
                    <input type="text" name="top_speed" class="form-control" placeholder="Enter Top speed">
                </div>
                <div class="form-group">
                    <label for=""> Accel_time </lable>
                    <input type="text" name="accel_time" class="form-control" placeholder="Enter Acceleration time">
                </div>
                <div class="form-group">
                    <label for=""> Img_link </lable>
                    <input type="text" name="img_link" class="form-control" placeholder="Enter Image link">
                </div>
                <div class="form-group">
                    <label for=""> International Price </lable>
                    <input type="text" name="intl_price" class="form-control" placeholder="Enter Price">
                </div>
                <div class="form-group">
                    <label for=""> Manf_id </lable>
                    <input type="number" name="manf_id" class="form-control" placeholder="Enter Manf_id">
                </div>
                
                <button type="submit" name="insert" class="btn btn-primary">Save Data</button>
                <a href="index.php" class="btn btn-danger"> Cancel</a>

            </form>
        </div>
    </div>

    <footer class="footer-distributed">

  <div class="footer-left">

    <h3>Future<span>cars</span></h3>

    <p class="footer-links">
      <a href="second.php">Home</a>
      ·
      <a href="#">See Questions </a>
      ·
      <a href="admin_showData.php">Details</a>
    </p>

    <p class="footer-company-name">project © 2024</p>

  </div>

</footer>

</body>
</html>


<?php
    include('conn.php');
    if(isset($_POST['insert'])) {
        $veh_id = $_POST['veh_id'];
        $type = $_POST['type'];
        $range = $_POST['range'];
        $battery = $_POST['battery'];
        $top_speed = $_POST['top_speed'];
        $accel_time = $_POST['accel_time'];
        $img_link = $_POST['img_link'];
        $intl_price = $_POST['intl_price'];
        $manf_id = $_POST['manf_id'];
        
        $sql="insert into vehicle(`veh_id`,`type`,`range`,`battery`,`top_speed`,`accel_time`,`img_link`,`intl_price`,`manf_id`) values('$veh_id','$type','$range','$battery','$top_speed','$accel_time','$img_link','$intl_price','$manf_id')" ;
        $res=mysqli_query($conn, $sql);
        
        if($res) {
            echo '<script>alert("Data successfully Entered !!!") </script>';
        }
        else {
            echo '<script>alert("Insertion failed !!!") </script>';
        }
    }
?>