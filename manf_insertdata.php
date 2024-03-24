<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        </style>
</head>
<body >
    
    <div class="container">
        <div class="jumbotron" style="margin:8%">
            <h2 class="heading">Add data</h2>
            <hr>
            <form action="" method="post">
                
                <div class="form-group">
                    <label for=""> Manf_id : </lable>
                    <input type="number" name="manufacturer_id" class="form-control" placeholder="Enter Manf_id">
                </div>
                <div class="form-group">
                    <label for="" class="title"> Name : </lable>
                    <input type="text" name="name" class="form-control" required placeholder="Enter Name">
                </div>
                <div class="form-group">
                    <label for=""> Estd Year : </lable>
                    <input type="number" name="estd_year" class="form-control" placeholder="Enter Estd Year">
                </div>
                <!-- <div class="form-group">
                    <label for=""> Dealer Id : </lable>
                    <input type="number" name="dealer_id" class="form-control" placeholder="Enter Dealer Id">
                </div> -->
                
                <button type="submit" name="insert" class="btn btn-primary">Insert Data</button>
                <a href="index.php" class="btn btn-danger"> Cancel</a>

            </form>
        </div>
    </div>

</body>
</html>


<?php
    include('conn.php');
    if(isset($_POST['insert'])) {
        $manf_id = $_POST['manufacturer_id'];
        $name = $_POST['name'];
        $year = $_POST['estd_year'];
        // $dealer_id = $_POST['dealer_id'];
        
        
        $sql="insert into manufacturer(`manufacturer_id`,`name`,`estd_year`) values('$manf_id','$name','$year')" ;
        $res=mysqli_query($conn, $sql);
        
        if($res) {
            echo '<script>alert("Data successfully Entered !!!") </script>';
        }
        else {
            echo '<script>alert("Insertion failed !!!") </script>';
        }
    }
?>