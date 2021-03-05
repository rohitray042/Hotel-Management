<?php
include "connection.php";
extract($_REQUEST);

if((isset($send))){
   // $qry = "insert into feedback values('','$name','$email','$mob','$msg')";
    mysqli_query($con,"insert into feedback values('','$name','$email','$mob','$msg')");	
    $msg= "<h4 style='color:green;'>feedback sent successfully</h4>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlyCom</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding:20px;
  font-size:20px;
  text-align:center;
  margin: 5px 2px;
  border-radius:50%;
   text-decoration:none;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google-plus{
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}
</style>
</head>
<body>

<footer style="background-color:  #393939;">
<div class="container-fluid">
    <div class="col-sm-4 hov" style="margin-top:15px; color:whitesmoke;">
        <img src="logo/logoname.png" width="200px" height="150px" alt="logo"><br><br>
        <p class="text-justify">A hotel is an establishment that provides paid lodging on a short-term basis. Facilities provided may range from a modest-quality mattress in a small room to large suites with bigger, higher-quality beds, a dresser, a refrigerator and other kitchen facilities, upholstered chairs, a flat screen television, and en-suite bathrooms. Small, lower-priced hotels may offer only the most basic guest services and facilities. Larger, higher-priced hotels
             may provide additional guest facilities such as a swimming pool, business center</p><br>
      <center><a href="about.php" class="btn btn-danger"><b>Read More..</b></a></center><br><br><br>

     
      <!--------------social site logos------------------------>

<a href="https://www.facebook.com/" class="fa fa-facebook"target="blank"title="facebook"></a>
<a href="https://twitter.com/"class="fa fa-twitter"target="blank"title="twitter"></a>
<a href="https://google-plus.com/" class="fa fa-google-plus"target="blank"title="google-plus"></a>
<a href="https://linkedin.com/" class="fa fa-linkedin"target="blank"title="linkedin"></a>
<a href="https://youtube.com/" class="fa fa-youtube"target="blank"title="youtube"></a>
<a href="https://instagram.com/" class="fa fa-instagram"target="blank"title="instagram"></a>     
    </div>&nbsp;&nbsp;

    <div class="col-sm-4 text-justify">
    <h3 style="color:#cdd51f;">Contact Us</h3>
      <p style="color:white;"><strong>Address:&nbsp;</strong>Block A5 Kalyani,Nadia(West Bengal)</p>
      <p style="color:white;"><strong>Email-Id:&nbsp;</strong>flycomhotel@gmail.com</p>
      <p style="color:white;"><strong>Contact Us:&nbsp;</strong>(+91) 88047914245</p><br><br><br>
     <center><img src="img/rohit.jpg"class="img-responsive"style="width:300px;height:250px;"></center>
    </div>&nbsp;

    <!----Feedback form------------------->
    <div class="col-sm-4 text-center">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Feedback
            </div>
            <div class="panel-body">
                <?php echo @$msg; ?>
                <div class="feedback">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="#" placeholder="Enter Your Name.."required>
                        </div>
                        <div class="form-group">
                            <input id="#" class="form-control" type="email" name="email" placeholder="Email id" required>
                        </div>
                        <div class="form-group">
                            
                            <input id="#" class="form-control" type="mob" name="number" placeholder="Mobile Number..." required>
                        </div>
                        <div class="form-group">
                        <textarea type="Text" name="msg" class="form-control" id="#"placeholder="Type Your Massage"required></textarea>
                        </div>
                        <input type="submit" value="send" name="send" class="btn btn-primary btn-group-justified" required>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>
</body>
<footer class="container-fluid text-center" style="background-color:#000408;height:40px;padding-top:10px;color:#f0f0f0;">
    <p>Developed By Rohit Ray || All Rights Reserved 2021 </p>
</footer>
</html>