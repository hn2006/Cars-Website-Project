<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
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
    </style>
</head>
<body>

    <div class="conrtainer">
        <div class="jumbotron">
            <h2 class="heading">Contact Us</h2>
            <hr>
            <!-- <div class="row">
                <a href="admin_insertdata.php" class="btn btn-primary" >Insert data</a>
            </div> -->
            <br>
                <?php
                    include('conn.php');
                    $sql="select * from contact" ;
                    $res=mysqli_query($conn, $sql);
                ?>

                <table class="table table-bordered" style="background-color: white;">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email Id</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <?php
                        if($res) {
                            while($result=mysqli_fetch_assoc($res)) {
                                ?>
                                    <tbody>
                                        <tr>
                                            <th><?php echo $result['name']; ?></th>
                                            <th><?php echo $result['email']; ?></th>
                                            <th><?php echo $result['message']; ?></th>
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