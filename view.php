<?php
session_start();
include "connection.php";
$eid = $_SESSION['create_account_logged_in'];
error_reporting(1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flycom</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
 <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="margin-top:50px;" >
<?php
include "Menu_Bar.php";
?>
    <div class="container-fluid"><!--Primary Id-->
  <h1 class="text-center text-primary">[ Booking Details ]</h1><br>
  <div class="container">
    <div class="row">
        <table class="table table-striped table-bordered table-hover table-responsive"style="height:150px;">
               <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                    <th>Contury</th>
                    <th>Room Type</th>
                    <th>Check In Date</th>
                    <th>Check In Time</th>
                    <th>Check Out Date</th>
                    <th>Occupancy</th>
					<th>Cancel</th>
               </tr>
<?php 
$query = "select * from room_booking_details";
$sql = mysqli_query($con,$query);
while($result = mysqli_fetch_array($sql))
{
    $oid=$result['id'];
    ?>
    <tr>
<td><?php echo $result['name']; ?></td>

<td><?php echo $result['email']; ?></td>                                    
<td><?php echo $result['phone']; ?></td>
<td><?php echo $result['address']; ?></td>
<td><?php echo $result['contry']; ?></td>
<td><?php echo $result['room_type']; ?></td>
<td><?php echo $result['check_in_date']; ?></td>
<td><?php echo $result['check_in_time']; ?></td>
<td><?php echo $result['check_out_date']; ?></td>
<td><?php echo $result['Occupancy']; ?></td>
<td><?php echo "<a href='cancel_order.php?order_id=$oid' style='color:Red'>Cancel</a>"; ?></td>
</tr>
<?php 
}
?>
        </table>
    </div>
  </div>
    </div>
    <?php 
    include "footer.php";
    ?>
</body>
</html>