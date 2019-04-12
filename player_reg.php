

<?php 
   include "db_connection.php";
 ?>
 <?php 
 $db = new database();
   if(isset($_POST["submit"])){
       $fullname=$_POST["fullname"];
       $email=$_POST["email"];
       $pnumber=$_POST["pnumber"];
       $bday=$_POST["bday"];
       $picture=$_POST["picture"];
       $Playingrole=$_POST["Playingrole"];
       $b=implode(",",$Playingrole);
       $batstyle=$_POST["batstyle"];
       $bowlstyle=$_POST["bowlstyle"];
       $address=$_POST["address"];
       $uname=$_POST["uname"];
       $password=$_POST["password"];
    if($fullname=='' || $email=='' || $pnumber=='' || $bday=='' || $picture==''|| $b==''|| $batstyle==''|| $bowlstyle==''|| $address==''|| $uname==''|| $password=='' ){
      $error="Filed Empty";
    }
    else{

      $query="INSERT INTO player_reg(Full_name,Email,Phone_number,Dob,Picture,Playing_role,Batting_style,Bowling_style,Address,User_name,Password)VALUES('$fullname','$email','$pnumber','$bday','$picture','$b','$batstyle','$bowlstyle','$address','$uname','$password')";
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
  <title>Player Registration Form</title>
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
              <form action="player_reg.php" method="POST">
                <h2>  Player Registration</h2>
                <table>
                  <tr>
                     <td><b>Full Name:</b></td>
                     <td><input type="text" name="fullname" placeholder="Enter Full Name"></td>
                  
                    <td><b>Email:</b></td>
                    <td><input type="email" name="email" placeholder="Enter Email Address"></td>
                  </tr>
                  <tr>
                    <td><b>Phone Number:</b></td>
                    <td><input type="number" name="pnumber" placeholder="Enter Phone Number"></td>
                  
                    <td><b>Date Of Birth:</b></td>
                    <td><input type="date" name="bday"></td>
                  </tr>
                  
                  <tr>
                    <td><b>Playing Role:</b></td>
                    <td>
                  <input type="checkbox" name="Playingrole[]" value="Opening Batsman">Opening Batsman 
                  <input type="checkbox" name="Playingrole[]" value="Middle Order"> Middle Order
                  <input type="checkbox" name="Playingrole[]" value="First Bowler"> First Bowler
                  <input type="checkbox" name="Playingrole[]" value="Spinner">Spiner
                  <input type="checkbox" name="Playingrole[]" value="Batting All-Rounder"> Batting All-Rounder
                  <input type="checkbox" name="Playingrole[]" value="Bowlling All-Rounder">Bowlling All-Rounder
                  <input type="checkbox" name="Playingrole[]" value="Wicketkeeper/Batsman"> Wicketkeeper/Batsman
                  </td>
                  </tr>
                  <tr>
                    <td><b>Batting Style:</b></td>
                    <td>
                      <SELECT  name="batstyle" >
                      <option value="">Select</option>
                      <option value="Right Hand Bat">Right Hand Bat</option>
                      <option value="Left Handed Bat">Left Handed Bat</option>
              
                      </SELECT>
                    </td>
                
                    <td><b>Bowling Style:</b></td>
                    <td>
                    <SELECT  name="bowlstyle" >
                    <option value="">Select</option>
                    <option value="Right-arm fast-medium">Right-arm fast-medium</option>
                    <option value="Left-arm fast-medium">Left-arm fast-medium</option>
              
                   </SELECT>
                   </td>
                  </tr>
                  <tr>
                    <td><b>Picture:</b></td>
                    <td><input type="file" name="picture"></td>
                  
                    <td><b>Address:</b></td>
                    <td><input type="text" name="address" placeholder="Enter Your Address" ></td>
                  </tr>
                  <tr>
                    <td><b>User Name:</b></td>
                    <td><input type="text" name="uname" placeholder="Enter A User Name"></td>
                  
                    <td><b>Password:</b></td>
                    <td><input type="password"   name="password" placeholder="Enter Password" ></td>
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