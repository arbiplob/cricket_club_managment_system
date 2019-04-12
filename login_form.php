<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/nav_fot.css">
  <link rel="stylesheet" type="text/css" href="css/body.css">
  <link rel="stylesheet" type="text/css" href="css/form_s.css">
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
	<div class="form">
			<form action="login_p_d.php" method="POST">
				<h2>Login As Player</h2>
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
    

    
</body>
</html>

