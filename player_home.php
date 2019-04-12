<?php
  session_start();

  if(!$_SESSION["name"]){

    header("location:login_form.php?error=You Are Not Admin...!");
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