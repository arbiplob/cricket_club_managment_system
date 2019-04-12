

<?php 
   include "db_connection.php";
 ?>
 <?php 
 $db = new database();
   if(isset($_POST["submit"])){
       $name=$_POST["name"];
       $email=$_POST["email"];
       $cnumber=$_POST["cnumber"];
       $purpose=$_POST["purpose"];
       $bdate=$_POST["bdate"];
       $bday=$_POST["bday"];
       
    if($name=='' || $email=='' || $cnumber=='' || $purpose=='' || $bdate==''||  $bday=='' ){
      $error="Filed Empty";
    }
    else{

      $query="INSERT INTO `ground_book`(Name,Email,Contact_number,Purpose,Booking_date,B_to)VALUES('$name','$email','$cnumber','$purpose','$bdate','$bday')";
      $create=$db->insert($query);
    }
   }


  ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/nav_fot.css">
	<link rel="stylesheet" type="text/css" href="css/body.css">
	<link rel="stylesheet" type="text/css" href="css/form_s.css">
	<title>Ground Booking Form</title>
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
		
		<form action="ground.php" method="POST">
			<h2>Ground Booking</h2>
			<table>
				<tr>
					<td><b>Name:</b></td>
					<td><input type="text" name="name" placeholder="Enter Your Name"></td>
				</tr>
				<tr>
					<td><b>Email:<b/></td>
					<td><input type="email" name="email" placeholder="Enter Email Address"></td>
				</tr>
				<tr>
					<td><b>Contact Number:</b></td>
					<td><input type="number" name="cnumber" placeholder="Enter Phone Number"></td>
				</tr>
				<tr>
					<td><b>Purpose:</b></td>
					<td>
						<select name="purpose">
							<option value="">Select</option>
							<option value="Event">Event</option>
							<option value="Party">Party</option>
							<option value="Concert">Concert</option>
							
						</select>
					</td>
				</tr>
				<tr>
					<td><b>Booking Date:</b></td>
					<td><input type="date" name="bdate"></td>

					<td><b>To:</b></td>
					<td><input type="Date" name="bday" placeholder="Enter Day"></td>
				</tr>
				
				<tr>
					<td><input type="reset" name="reset" value="Reset"></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
	</div>
	<div class="footer">
      <p>Copy Right@Biplob & Nahid</p>
    </div>

    
</body>
</html>