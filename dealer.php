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
        .btn{

color:white;
background-color:grey;


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
              <a href="main_page.php" class="nav-link text-secondary">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"></use></svg>
                HOME
              </a>
            </li>
            <li>
              <a href="admin_login.html" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"></use></svg>
                ADMIN
              </a>
            </li>
            <li>
              <a href="aboutus.html" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"></use></svg>
                ABOUT US
              </a>
            </li>
            <li>
              <a href="contactus.php" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"></use></svg>
                CONTACT US
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
    <!-- <div class="px-3 py-2 border-bottom mb-3">
      <div class="container d-flex flex-wrap justify-content-center">
        <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-light text-dark me-2">Login</button>
          <button type="button" class="btn btn-primary">Sign-up</button>
        </div>
      </div> -->
    </div>
  </header>
    <div class="conrtainer">
        <div class="jumbotron">
            <h2 class="heading">Dealer Details</h2>
            <hr>
            <br>
                <?php
                    include('conn.php');
                    $id=$_GET['uid'];
                    $sql="select * from dealer WHERE manf_id='$id'" ;
                    $res=mysqli_query($conn, $sql);
                ?>

                <table class="table table-bordered" style="background-color: white;">
                    <thead class="table-dark">
                        <tr>
                            <th>dealer</th>
                            <th>location</th>
                        </tr>
                    </thead>
                    <?php
                        
                        if($res) {
                            while($result=mysqli_fetch_assoc($res)) {
                                ?>
                                    <tbody>
                                        <tr>
                                
                                            <th><?php echo $result['dealer_name']; ?></th>
                                            <th><?php echo $result['location']; ?></th>

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

    <footer class="footer-distributed">

<div class="footer-left">

  <h3>Future<span>cars</span></h3>

  <p class="footer-links">
    <a href="second.php">Home</a>
    ·
    <a href="aboutus.html">About us</a>
    ·
    <a href="contactus.php">Contact</a>
  </p>

  <p class="footer-company-name">dbms_project © 2022</p>

</div>

<div class="footer-right">

  <p>Contact Us</p>
  <button type="button" class="btn  btn-lg"><a href='contactus.php'>CLICK HERE</a></button>

</div>

</footer>

</body>
</html>