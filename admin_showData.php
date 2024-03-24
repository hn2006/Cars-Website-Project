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
         body{
    /* background-image: linear-gradient(135deg, #cfa2eb 10%, #6be6c5 100%); */
    /* background-image: linear-gradient(135deg, #eac8ff 10%, #e6f7ae 100%);
    background-image: linear-gradient(135deg, #eac8ff 10%, #e6f7ae 100%); */
    background-image: linear-gradient(135deg, #c2f4f4 10%, #e6f7ae 100%);
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;}
        body{
            text-align:center;
        }
        .row {
            margin-left:80%;
            width:8%;
        }
        .jumbotron {
            margin:8%;
        }
        .heading{
            margin:2%;
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

    <div class="conrtainer">
        <div class="jumbotron">
            <h2 class="heading">Car Details</h2>
            <hr>
            <div class="row">
                <a href="admin_insertdata.php" class="btn btn-primary" >Insert data</a>
            </div>
            <br>
                <?php
                    include('conn.php');
                    $sql="select * from vehicle" ;
                    $res=mysqli_query($conn, $sql);
                ?>

                <table class="table table-bordered" style="background-color: white;">
                    <thead class="table-dark">
                        <tr>
                            <th>Veh_id</th>
                            <th>Type</th>
                            <th>Range</th>
                            <th>Top_speed</th>
                            <th>Battery</th>
                            <th>Accel_time</th>
                            <th>Img_link</th>
                            <th>Intl_price</th>
                            <th>Manf_id</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <?php
                        
                        if($res) {
                            while($result=mysqli_fetch_assoc($res)) {
                                ?>
                                    <tbody>
                                        <tr>
                                            <th><?php echo $result['veh_id']; ?></th>
                                            <th><?php echo $result['type']; ?></th>
                                            <th><?php echo $result['range']; ?></th>
                                            <th><?php echo $result['battery']; ?></th>
                                            <th><?php echo $result['top_speed']; ?></th>
                                            <th><?php echo $result['accel_time']; ?></th>
                                            <th><?php echo $result['img_link']; ?></th>
                                            <th><?php echo $result['intl_price']; ?></th>
                                            <th><?php echo $result['manf_id']; ?></th>
                                            <form action="admin_updatedata.php" method="post">
                                                <input type="hidden" name="veh_id" value="<?php echo $result['veh_id'] ?>">
                                                <th><input type="submit" name="edit" class="btn btn-success" value="EDIT"></th>
                                            </form>

                                            <form action="admin_deletedata.php" method="post">
                                                <input type="hidden" name="veh_id" value="<?php echo $result['veh_id'] ?>">
                                                <th><input type="submit" name="delete" class="btn btn-danger" value="DELETE"></th>
                                            </form>

                                        </tr>
                                    </tbody>
                                <?php
                            }
                        }
                        else {
                            echo "No data found !!!";
                        }
                    ?>
                </table>
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