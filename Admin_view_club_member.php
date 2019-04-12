
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
                        <li><a href="Admin_view_club_member.php">Manage Membership</a></li>
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
        <td><?php echo $row['Picture']; ?></td>


        <td><a href="member_edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
        <td><a href="delete_member.php?id=<?php echo $row['id']; ?>">Delete</a></td>

        
        
        
    </tr>
 <?php } ?>
 <?php } else { ?>
    <p>empty</p>

 <?php } ?>

 </table>