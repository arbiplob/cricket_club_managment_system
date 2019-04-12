<?php 
  session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/nav_fot.css">
  <link rel="stylesheet" type="text/css" href="css/body.css">
  <link rel="stylesheet" type="text/css" href="css/form_s.css">
  <title>Admin Login Form</title>
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
	<div class="form">
			<form action="login_a_form.php" method="POST">
				<h2>Login As Admin</h2>
				<table>
					<tr>
						<td>User Name:</td>
						<td><input type="text" name="name" placeholder="Enter User Name"></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="password" placeholder="Enter Password"></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="Login"></td>
					</tr>
				</table>
			</form>
		</div>
	<div class="footer">
      <p>Copy Right@Biplob & Nahid</p>
    </div>


<?php 
 
  include "db_connection.php";
 ?>

   <?php 

   if(isset($_POST['submit'])){

   	$name=$_SESSION["name"]=$_POST['name'];
   	$password=$_POST['password'];

    $db = new database();
    $query = "SELECT * FROM admin WHERE username='$name' AND password = '$password' ";
    $read = $db->select($query); 
    ?>


<?php  if($read){ ?>
	<?php while($row = $read->fetch_assoc()){ 

   header("Location:admin_home.php");
    ?>
 	   
 <?php } ?>
 <?php } else { 
   echo "<script>alert(' User Name And Password Is Incorrect!')</script>";

  

  ?>
 	

 <?php } ?>
<?php } ?>

 
    
</body>
</html>



