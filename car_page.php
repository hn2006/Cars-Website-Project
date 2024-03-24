<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="css/1.css">
    <style>
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
        body {
        /* background-image: linear-gradient(135deg, #cfa2eb 10%, #6be6c5 100%); */
        background-image: linear-gradient(135deg, #c2f4f4 10%, #e6f7ae 100%);
        /* background-image: linear-gradient(135deg, #eac8ff 10%, #e6f7ae 100%); */
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        }
        img:hover{
        transform: scale(1.1);
        }
        #div1{
        display: inline-block;
        }
        #div2{
        display: inline-block;
        }
    </style>
    
</head>
<body>

    <div class="conrtainer">
        <div class="jumbotron">
            <h2 class="heading">Car Details</h2>
            <hr>
            <!-- <div class="row">
                <a href="admin_insertdata.php" class="btn btn-primary" >Insert data</a>
            </div> -->
            <br>
                <?php
                    include('conn.php');
                    $id = $_GET['uid'];
                    $sql="SELECT * from vehicle where veh_id='$id'";
                    $res=mysqli_query($conn, $sql);
                ?>

                <table class="table table-bordered" style="background-color: white;">
                    <thead class="table-dark">
                        <tr>
                            <th>Veh_id</th>
                            <th>Veh_name</th>
                            <th>Type</th>
                            <th>Range</th>
                            <th>Top_speed</th>
                            <th>Battery</th>
                            <th>Accel_time</th>
                            <th>Img_link</th>
                            <th>Intl_price</th>
                            <th>Manf_id</th>
                        </tr>
                    </thead>

                    <?php
                        if($res) {
                            while($result=mysqli_fetch_assoc($res)) {
                                ?>
                                    <tbody>
                                        <tr>
                                            <?php echo '<img src="images/'.$result['img_link'].'">' ?>
                                            <th><?php echo $result['veh_id']; ?></th>
                                            <th><?php echo $result['name']; ?></th>
                                            <th><?php echo $result['type']; ?></th>
                                            <th><?php echo $result['range']; ?></th>
                                            <th><?php echo $result['battery']; ?></th>
                                            <th><?php echo $result['top_speed']; ?></th>
                                            <th><?php echo $result['accel_time']; ?></th>
                                            <th><?php echo $result['img_link']; ?></th>
                                            <th><?php echo $result['intl_price']; ?></th>
                                            <th><?php echo $result['manf_id']; ?></th>
                                            
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

</body>
</html>