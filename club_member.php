<?php 
   include "db_connection.php";
 ?>
 <?php 
 $db = new database();
   if(isset($_POST["submit"])){
       $fullname=$_POST["name"];
       $email=$_POST["email"];
       $cnumber=$_POST["cnumber"];
       $gender=$_POST["gender"];
       $bday=$_POST["bday"];
       
       $Profession=$_POST["Profession"];
       $designation=$_POST["designation"];
       $address=$_POST["address"];
       $payment=$_POST["Payment"];
       $picture=$_POST["picture"];
       
    if($fullname=='' || $email=='' || $cnumber=='' || $bday=='' || $picture==''||  $Profession==''|| $designation==''|| $address==''|| $payment=='' ){
      $error="Filed Empty";
    }
    else{

      $query="INSERT INTO club_member(Name,Email,Number,Gender,Dob,Profession,Designation,Address,payment,Picture
)VALUES('$fullname','$email','$cnumber','$gender','$bday','$Profession','$designation','$address','$payment','$picture')";
      $create=$db->insert($query);
    }
   }


  ?>








<!DOCTYPE html>
<html>
<head>
	<title>  Page</title>
	<link rel="stylesheet" type="text/css" href="css/nav_fot.css">
	<link rel="stylesheet" type="text/css" href="css/body.css">
	<link rel="stylesheet" type="text/css" href="css/form_s.css">
</head>
<body>
	<div class="main">
		
		
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
		
	</div>
<div class="form">
	<form action="club_member.php" method="POST">
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" placeholder="Enter Member name"></td>
			
				<td>Email:</td>
				<td><input type="email" name="email" placeholder="Email Address"></td>
			</tr>
			<tr>
				<td>Contact Number:</td>
				<td><input type="number" name="cnumber" placeholder=" Phone Number"></td>
			
				
				<td>Gender:</td>
				<td><input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female
					<input type="radio" name="gender" value="Others"> Others
				</td>
			</tr>
			<tr>
				<td>Date Of Birth:</td>
				<td><input type="date" name="bday"></td>
			</tr>
			<tr>
				<td>Profession:</td>
				<td><input type="text" name="Profession"></td>
			
				<td>Designation:</td>
				<td>
					<SELECT  name="designation" >
                    <option value="">Select</option>
                    <option value="President">President</option>
                    <option value="Vice-president">Vice-president</option>
                    <option value="Secretary">Secretary</option>
                    <option value="Genarel-Secretary">Genarel-Secretary</option>
                    <option value="Member">Member</option>



              
                   </SELECT>
               </td>
			</tr>
			<tr>
				<td>Picture:</td>
				<td><input type="file" name="picture"></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><input type="text" name="address"></td>
			</tr>
			<td> Payment </td>
			<td>
				<SELECT name="Payment">
					<option value="SELECT">select</option>
					<option value="Bkash">Bkash</option>
					<option value="Rocket">Rocket </option>
					<option value="paypal">paypal</option>
					<option value="payoneer">payoneer</option>
					
				</SELECT>
			</td>
			<tr>
				<td><input type="reset" name="reset" value="Reset"></td>
                                  
                <td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
</div>
	

</body>
</html>