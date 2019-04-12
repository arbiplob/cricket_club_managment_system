
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/nav_fot.css">
    <link rel="stylesheet" type="text/css" href="css/body.css">
    <title>Cricket  Club Managment System</title>
</head>
<body>
    <div class="main">
        <a href="main_menu.php"><img src="logo1.gif" width="150" height="50px"></a>
        <ul>
            <li><a href="main_menu.php">Home</a></li>
            <li><a href="player_reg.php">Player Registration</a></li>
            <li><a href="ground.php">Ground Booking</a></li>
            <li><a href="view_club_member.php">Club Membership</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#"> Login</a>
                <ul>
                    <li><a href="login_form.php">Login As Player</a></li>
                    <li><a href="login_a_form.php">Login As Admin</a></li>
                </ul>

            </li>

        </ul>
    </div>
    <div class="footer">
      <p>Copy Right@Biplob & Nahid</p>
    </div>

    
</body>
</html>


<?php 
 
  include "db_connection.php";
 ?>

   <?php 

    $db = new database();
    $query = "SELECT * FROM club_member";
    $read = $db->select($query); 
    ?>
    <link rel="stylesheet" type="text/css" href="css/table.css">

 <table >
 	<tr>
        <center><h2>Member Of This Club</h2></center>
 		 <th>  Name</th>
         <th> Email</th>
         <th> Number</th>
         <th>Gender</th>
         <th>Dob</th>
         <th>Profession</th>
         <th>Designation</th>
         <th>Address</th>
         <th> payment</th>
         <th>Picture</th>



         
 	</tr>
<?php  if($read){ ?>
	<?php while($row = $read->fetch_assoc()){ ?>
 	<tr>
 		<td><?php echo $row['Name']; ?></td>
 		<td><?php echo $row['Email']; ?></td>
 		<td><?php echo $row['Number']; ?></td>
 		<td><?php echo $row['Gender']; ?></td>
 		<td><?php echo $row['Dob']; ?></td>
 		<td><?php echo $row['Profession']; ?></td>
        <td><?php echo $row['Designation']; ?></td>
        <td><?php echo $row['Address']; ?></td>
        <td><?php echo $row['payment']; ?></td>
        <td><?php echo $row['Picture']; ?></td>

        
 		
 		
 	</tr>
 <?php } ?>
 <?php } else { ?>
 	<p>empty</p>

 <?php } ?>

 </table>