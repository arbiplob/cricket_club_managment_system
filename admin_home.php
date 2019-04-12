<?php
  session_start();

  if(!$_SESSION["name"]){

    header("location:login_a_form.php?error=You Are Not Admin...!");
  }

?>

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

			    <li><a href="admin_logout.php">Logout</a></li>
			</ul>
		</nav>
	</div>
	<div class="footer">
      <p>Copy Right@Biplob & Nahid</p>
    </div>

    
</body>
</html>


