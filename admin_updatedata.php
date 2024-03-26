<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
    <style>
         body{
    /* background-image: linear-gradient(135deg, #cfa2eb 10%, #6be6c5 100%); */
    /* background-image: linear-gradient(135deg, #eac8ff 10%, #e6f7ae 100%);
    background-image: linear-gradient(135deg, #eac8ff 10%, #e6f7ae 100%); */
    background-image: linear-gradient(135deg, #c2f4f4 10%, #e6f7ae 100%);
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;}
        .jumbotron{
            margin:4%;
            margin-top:10%;
        }
        .form-group {
            padding:2%;
            display:inline-block;
        }
        .jumbotron{
            border:solid;
            padding:2%;
        }
    </style>
</head>
<body>

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
    </header>
    
    <?php
        include ('conn.php');

        $veh_id = $_POST['veh_id'];
        $sql="SELECT * from vehicle where veh_id='$veh_id' ";
        $res=mysqli_query($conn, $sql);
        
        if($res) {
            while($result=mysqli_fetch_assoc($res)) { 
                ?>
                    <div class="container">
                        <div class="jumbotron">
                            <h2>Update Data</h2>
                            <hr>

                            <form action="" method="post">
                                <input type="hidden" name="veh_id" value="<?php echo $result['veh_id'] ?>">
                                <!-- <div class="form-group">
                                    <label for=""> Vehicle Id </lable>
                                    <input type="number" name="veh_id" class="form-control" value="<?php echo $result['veh_id'] ?>" required placeholder="Enter Vehicle id">
                                </div> -->
                                <div class="form-group">
                                    <label for=""> Type </lable>
                                    <input type="text" name="type" class="form-control" value="<?php echo $result['type'] ?>" placeholder="Enter Type">
                                </div>
                                <div class="form-group">
                                    <label for="" class="title"> Vehicle Name : </lable>
                                    <input type="text" name="name" class="form-control" value="<?php echo $result['name']?>"  required placeholder="Enter Vehicle name">
                                </div>
                                <div class="form-group">
                                    <label for=""> Range </lable>
                                    <input type="text" name="range" class="form-control" value="<?php echo $result['range'] ?>" placeholder="Enter Range ">
                                </div>
                                <div class="form-group">
                                    <label for=""> Battery </lable>
                                    <input type="text" name="battery" class="form-control" value="<?php echo $result['battery'] ?>" placeholder="Enter Battery">
                                </div>
                                <div class="form-group">
                                    <label for=""> Top speed </lable>
                                    <input type="text" name="top_speed" class="form-control" value="<?php echo $result['top_speed'] ?>" placeholder="Enter Top speed">
                                </div>
                                <div class="form-group">
                                    <label for=""> Accel_time </lable>
                                    <input type="text" name="accel_time" class="form-control" value="<?php echo $result['accel_time'] ?>" placeholder="Enter Acceleration time">
                                </div>
                                <div class="form-group">
                                    <label for=""> Img_link </lable>
                                    <input type="text" name="img_link" class="form-control" value="<?php echo $result['img_link'] ?>" placeholder="Enter Image link">
                                </div>
                                <div class="form-group">
                                    <label for=""> International Price </lable>
                                    <input type="text" name="intl_price" class="form-control" value="<?php echo $result['intl_price'] ?>" placeholder="Enter Price">
                                </div>
                                <div class="form-group">
                                    <label for=""> Manf_id </lable>
                                    <input type="number" name="manf_id" class="form-control" value="<?php echo $result['manf_id'] ?>" placeholder="Enter Manf_id">
                                </div>
                                <div class="form-group">
                                    <label for=""> summary </lable>
                                    <textarea name="details" class="form-control" value="<?php echo $result['details'] ?>" placeholder="Enter summary"></textarea>
                                </div>
                                
                                <button type="submit" name="update" class="btn btn-primary">Update Data</button>

                                <a href="index.php" class="btn btn-danger"> Cancel</a>

                            </form>

                            <?php
                                    // type = '$type', range = '$range',
                                include ('conn.php');
                                if(isset($_POST['update'])) {
                                    // $veh_id = $_POST['veh_id'];
                                    $type = $_POST['type'];
                                    $range = $_POST['range'];
                                    $battery = $_POST['battery'];
                                    $top_speed = $_POST['top_speed'];
                                    $accel_time = $_POST['accel_time'];
                                    $img_link = $_POST['img_link'];
                                    $intl_price = $_POST['intl_price'];
                                    $manf_id = $_POST['manf_id'];
                                    $name = $_POST['name'];
                                    $details = $_POST['details'];
                                    // veh_id = '$veh_id',
                                    $sql_q="UPDATE vehicle SET   battery = '$battery', top_speed = '$top_speed', accel_time = '$accel_time', img_link = '$img_link', intl_price = '$intl_price', manf_id = '$manf_id', name='$name', details='$details'  where veh_id = '$veh_id' ";
                                    $res2=mysqli_query($conn, $sql_q);
                                    
                                    if($res2) {
                                        echo '<script>alert("Data successfully Updated !!!") </script>';
                                        // header("location:admin_showData.php");
                                    }
                                    else {
                                        echo '<script>alert("Updation failed !!!") </script>';
                                    }
                                }
                            ?>

                        </div>
                    </div>
                <?php
            }
        }
        else {
            echo '<script>alert("No record found !!!")</script>';
        }
    ?>


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