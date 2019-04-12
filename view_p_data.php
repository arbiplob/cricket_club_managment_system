<!DOCTYPE html>
<html>
<head>
    <title> Admin Page</title>
    <link rel="stylesheet" type="text/css" href="css/nav_fot.css">
    <link rel="stylesheet" type="text/css" href="css/body.css">
    <link rel="stylesheet" type="text/css" href="css/form_s.css">
</head>
<body>
    <div class="main">
        
        <nav>
            <a href="main_menu.php"><img src="logo1.gif" width="150" height="50px"></a>
            <ul>
                <li><a href="main_menu.php">Home</a></li>
                <li><a href="view_p_data.php">Player Request</a></li>
                <li><a href="view_g_data.php">Ground Request</a></li>
                <li><a href="club_member.php">Member Registration</a>
                    <ul>
                        <li><a href="mamber_manage.php">Manage Membership</a></li>
                    </ul>


                </li>

                <li><a href="login_a_form.php">Logout</a></li>
            </ul>
        </nav>
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
    $query = "SELECT * FROM player_reg";
    $read = $db->select($query); 
    ?>
 <link rel="stylesheet" type="text/css" href="css/table.css">
 <table border="1px">
 	<tr>
 		 <th> Full Name</th>
         <th> Email</th>
         <th>Phone Number</th>
         <th>Dob</th>
         <th>Picture</th>
         <th>Playing Role</th>
         <th>Batting Style</th>
         <th>Bowling Style</th>
         <th>Address</th>
         
 	</tr>


<?php  if($read){ ?>
	<?php while($row = $read->fetch_assoc()){ ?>
 	<tr>
 		<td><?php echo $row['Full_name']; ?></td>
 		<td><?php echo $row['Email']; ?></td>
 		<td><?php echo $row['Phone_number']; ?></td>
 		<td><?php echo $row['Dob']; ?></td>
 		<td><?php echo $row['Picture']; ?></td>
 		<td><?php echo $row['Playing_role']; ?></td>
 		<td><?php echo $row['Batting_style']; ?></td>
 		<td><?php echo $row['Bowling_style']; ?></td>
 		<td><?php echo $row['Address']; ?></td>
 		

        <td><a href="admin_update_p_data.php?id=<?php echo $row['id']; ?>">Edit</a></td>
        <td><a href="delete_p_data.php?id=<?php echo $row['id']; ?>">Delete</a></td>
 		
 	</tr>
 <?php } ?>
 <?php } else { ?>
 	<p>empty</p>

 <?php } ?>

 </table>


 
 