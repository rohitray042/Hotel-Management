<?php

include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flycom hotels</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet"  type="text/css" href="style.css">

</head>
<style >

.carousel img{
    height: 50%;
}
    .carousel .item img{
        margin: 0 auto;
    }
    </style>
<body style="margin-top:50px;">

<?php
    include 'Menu_Bar.php';
?>

       

<!---------------- main program----->
    <div id ="myCarousel" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            
        </ul>
        <!-----Slideshow----->

        <div class ="carousel-inner">
            <div class="active item">
            <img src="img/hotel1.jpg" alt="" width="1500px" height="400px">
            </div>
        
        <div class="item">
            <img src="img/hotel2.jpg" alt="outer look" width="1500px" height="400px">
        </div>
        <div class="item">
            <img src="img/hotel3.jpg" alt="bar" width="1500px" height="400px">
        </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

    <!----- Room details-------->

    <div class="container-fluid text-center" id="red">
    <div class="container">
    <h1>Welcome to<b> FlyCom</b> Hotel!!</h1><hr><br>
    
        <div class="row">
            <div class="hov">
            
            <?php 
	        $sql=mysqli_query($con,"select * from rooms");
	        while($r_res=mysqli_fetch_array($sql))
	        {
	        ?>
	<div class="col-sm-4">
      <img src="img/rooms/<?php echo $r_res['image']; ?>"class="img-responsive thumbnail"alt="Image"id="img1"> <!--Id Is Img-->
      <h4 class="Room_Text">[ <?php echo $r_res['type']; ?>]</h4>
      <p class="text-justify"><?php echo substr($r_res['details'],0,100); ?></p><br>
	    <a href="room_details.php?room_id=<?php echo $r_res['room_id']; ?>" class="btn btn-danger text-center">Read more</a><br><br>
    </div>
	<?php } ?>
            </div>
        </div>
    </div>
    </div>
    <?php
    include "footer.php";
    ?>
    
</body>
</html>