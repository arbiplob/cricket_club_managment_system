
<?php
  session_start();

  if(!$_SESSION["name"]){

    header("location:login_form.php?error=You Are Not Player...!");
  }

?>

<!DOCTYPE html>
<html>
<head>
  <title> Player Page</title>
  <link rel="stylesheet" type="text/css" href="css/form_s.css">
  <link rel="stylesheet" type="text/css" href="css/nav_fot.css">
    <link rel="stylesheet" type="text/css" href="css/body.css">
</head>
<body>
  <div class="main">
    
    
      <a href="main_menu.php"><img src="logo1.gif" width="150" height="50px"></a>
      <ul>
        <li><a href="main_menu.php">Home</a></li>
        
          <li><a href="player_logout.php">Logout</a></li>
      </ul>
    
  </div>
  <div class="background">
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

   if(isset($_POST['submit'])){

    $name=$_SESSION["name"]=$_POST['name'];
    $password=$_POST['password'];

    $db = new database();
    $query = "SELECT * FROM player_reg WHERE User_name='$name' AND Password = '$password' ";
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
         <th>User Name</th>
         <th>Password</th>
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
    <td><?php echo $row['User_name']; ?></td>
    <td><?php echo $row['Password']; ?></td>


        <td><a href="update_p_data.php?id=<?php echo $row['id']; ?>">Edit</a></td>
        <td><a href="delete_p_data.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    
  </tr>
 <?php } ?>
 <?php } else {
   echo "<script>alert('  User Name And Password Is Incorrect!')</script>";
   
  
  ?>
 

 <?php } ?>
<?php } ?>

 </table>