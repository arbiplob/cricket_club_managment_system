<?php 

include "db_connection.php";
 ?>

 <?php 
   $id=$_GET['id'];
   $db = new database();
   $query = "SELECT * FROM club_member  where id=$id";
   $getdata = $db->select($query)->fetch_assoc(); 


   if(isset($_POST["update"])){
       $fullname=$_POST["name"];
       $email=$_POST["email"];
       $cnumber=$_POST["cnumber"];
       $gender=$_POST["gender"];
       $bday=$_POST["bday"];
       
       $Profession=$_POST["Profession"];
       $designation=$_POST["designation"];
       $address=$_POST["address"];
       $payment=$_POST["payment"];
       $picture=$_POST["picture"];
       
       
    if($fullname=='' || $email=='' || $cnumber=='' || $bday=='' || $picture==''||  $Profession==''|| $designation==''|| $payment==''|| $address=='' ){
      $error="Filed Empty";
    }

    else{

    	$query="UPDATE club_member SET Name='$fullname',Email='$email',Number='$cnumber',Gender='$gender',Dob='$bday',Profession='$Profession',Designation='$designation',Address='$address', payment='$payment',Picture='$picture'  WHERE id=$id ";

    	$update=$db->update($query);
    }
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
		
	</div>
<div class="form">
	<form action="member_edit.php?id=<?php echo $id; ?>" method="POST">
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" value="<?php echo $getdata['Name']; ?>"></td>
			
				<td>Email:</td>
				<td><input type="email" name="email"value="<?php echo $getdata['Email']; ?>"></td>
			</tr>
			<tr>
				<td>Contact Number:</td>
				<td><input type="number" name="cnumber" value="<?php echo $getdata['Number']; ?>"></td>
			
				
				<td>Gender:</td>
				<td><input type="radio" name="gender" value="Male" required>Male
					<input type="radio" name="gender" value="Female">Female
					<input type="radio" name="gender" value="Others"> Others
				</td>
			</tr>
			<tr>
				<td>Date Of Birth:</td>
				<td><input type="date" name="bday" value="<?php echo $getdata['Dob']; ?>"></td>
			</tr>
			<tr>
				<td>Profession:</td>
				<td><input type="text" name="Profession" value="<?php echo $getdata['Profession']; ?>"></td>
			
				<td>Designation:</td>
				<td>
					<SELECT  name="designation" >
                    <option ><?php echo $getdata['Designation']; ?></option>
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
				<td><input type="file" name="picture" value="<?php echo $getdata['Picture']; ?>" required></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><input type="text" name="address" value="<?php echo $getdata['Address']; ?>"></td>
			</tr>

			<td> Payment </td>
			<td>
				<SELECT name="Payment">
					<option> <?php echo $getdata['payment']; ?></option>
					<option value="Bkash">Bkash</option>
					<option value="Rocket">Rocket </option>
					<option value="paypal">paypal</option>
					<option value="payoneer">payoneer</option>
					
				</SELECT>
			</td>
			<tr>
				<td><input type="reset" name="reset" value="Reset"></td>
                                  
                <td><input type="submit" name="update" value="update"></td>
			</tr>
		</table>
	</form>
</div>
	

</body>
</html>