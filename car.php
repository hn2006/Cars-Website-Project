<?php
session_start();
?>


<!DOCTYPE HTML>
<html>
<head>
<title>m4</title>
<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
   
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<link rel="stylesheet" href="css/global.css">
<script src="js/slides.min.jquery.js"></script>
   <script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script> -->
  <style>
    .btn{

color:white;
background-color:grey;


}
.first{

  margin-left:43%;
  height:40px;
  border:2px solid black;
  border-radius:10px;
  margin-bottom:20px;
  
}

li{

  color:black;
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





                <?php
                    include('conn.php');
                    $id = $_GET['uid'];
                    $sql="SELECT * from vehicle where veh_id='$id'";
                    $res=mysqli_query($conn, $sql);
                    $result=mysqli_fetch_assoc($res);
                ?>

<div class="header-bottom">
	<div class="wrap">
		<div class="single">
            
				<div class="box_wrapper"><h1><?php echo $result['name']; ?></h1></div>
				    <div class="single-top"> 	
		  				<div class="lsidebar span_1_of_s">
					   		<div id="container">
						   	  <div id="products_example">
							   <div id="products">
                               <div class="image">
                                    <!-- <?php echo '<img src="images/'.$result['img_link'].'">' ?> -->
                                    <?php echo '<img src="images/'.$result['img_link'].'" style="width: 100%; height : 100%">' ?>
                                </div>
								
							</div>
						</div>
					   </div>
					</div>
                    
                    

                    
						<div class="grid span_2_of_3">
							<table class="table table-bordered table-responsive table-striped table-hover table-condensed">
                                   <thead>
                                       <tr>
                                           <th class="text-center" style="font-family: broadway; ">Economy</th>
                                           <th class="text-center" style="font-family: broadway; ">Performance</th>
                                       </tr>
                                   </thead>

                                   <tbody class="text-center">
                                       <tr>
                                           <td>Range:	<?php echo $result['range']; ?></td>
                                           <td>Speed:	<?php echo $result['top_speed']; ?></td>

                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td></td>

                                       </tr>
                                       <tr>
                                           <td> Cost: $ <?php echo $result['intl_price']; ?></td>
                                           <td>Acceration: <?php echo $result['accel_time']; ?></td>

                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td></td>

                                       </tr>
                                   </tbody>
                            </table>
                            
                            <table class="table table-bordered table-responsive table-striped table-hover table-condensed">
                                   <thead>
                                       <tr>
                                           <th class="text-center" style="font-family: broadway; ">Comfort</th>
                                           <th class="text-center" style="font-family: broadway; ">Safety</th>
                                       </tr>
                                   </thead>

                                   <tbody class="text-center">
                                       <tr>
                                           <td>Type: <?php echo $result['type']; ?></td>
                                           <td>ABS : Yes</td>

                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Driver Airbag : Yes</td>

                                       </tr>
                                       <tr>
                                           <td>Seating capacity: 4</td>
                                           <td>Parking Sensor : Yes</td>

                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Air Bag: Yes</td>

                                       </tr>
                                   </tbody>
                            </table>
						</div><div class="clear"></div> 
					</div>
				
                    <table class="table table-bordered table-responsive table-striped table-hover table-condensed">
                        <thead>
                            <tr>
                                <th class="text-center" style="font-family: broadway; ">M4 highlights</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>
                                    <!-- BMW has always captured the finest elements to make a car, and successfully unleashed them into entities of grandeur and luxury. This all new model shows the world just why this prominent company dazzles in what they do. The BMW M Series M4 Coupe stands as one of the rarest and most exquisite machines to cruise our streets. The two door vehicle is a blend of both performance and style: It is destined to rule our streets with speed and ferocity, but without compromising on luxury and comfort. This high end sports machine is powered by a M TwinPower turbo engine, which sends it sailing to exhilarating top speeds rarely seen on Indian streets. This high rev engine is built as a six cylinder petrol format. Translating the massive engine capacity to speed is a seven gear dual clutch transmission system, specially designed for the needs of expensive machine. The inner prowess is balanced by the beauty that paints it from the outside: Its low profile is designed for aerodynamics and stealth on the streets. Its fluidic, streamlined shape gives it an imposing look rarely found on regular roads. Its trimmed front grille, stylistically shaped headlights and elegant bumper are all sure to bring it to the fore of all its viewers' eyes. -->
                                    <?php echo $result['details']; ?>
                                  </td>

                            </tr>
                        </tbody>
                    </table>
                    <!-- <div class="container">
                          <div class="row"> 

                            <div class="col-sm-4">
                            </div>

                            <div class="col-sm-4">
                               
                            </div>

                            <div class="col-sm-4">       
                            </div>

                          </div>
                    </div>	 -->
			   
		</div>
	</div>
</div>

<div>

<button class="first"><?php echo '<a href="dealer.php?uid='.$result['manf_id'].'">'; ?> SEE BUYING DETAILS</button>
</div>



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

    	
    	
            