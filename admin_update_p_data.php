

<?php 
   include "db_connection.php";
 ?>
 <?php 

 $id=$_GET['id'];
 $db = new database();
 $query = "SELECT * FROM player_reg  where id=$id";
 $getdata = $db->select($query)->fetch_assoc(); 

   if(isset($_POST["update"])){
       $fullname=$_POST["fullname"];
       $email=$_POST["email"];
       $pnumber=$_POST["pnumber"];
       $bday=$_POST["bday"];
       $picture=$_POST["picture"];
       
       $batstyle=$_POST["batstyle"];
       $bowlstyle=$_POST["bowlstyle"];
       $address=$_POST["address"];
       
    if($fullname=='' || $email=='' || $pnumber=='' || $bday=='' || $picture==''||  $batstyle==''|| $bowlstyle==''|| $address=='' ){
      $error="Filed Empty";
    }
    else{

          $query="UPDATE player_reg SET Full_name='$fullname',Email='$email',Phone_number='$pnumber',Dob='$bday',Picture='$picture',Batting_style='$batstyle',Bowling_style='$bowlstyle',Address='$address' WHERE id=$id";

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

	<div class="form">
              <form action="admin_update_p_data.php?id=<?php echo $id; ?>" method="POST">
                <h2>  Player Registration</h2>
                <table>
                  <tr>
                     <td><b>Full Name:</b></td>
                     <td><input type="text" name="fullname" value="<?php echo $getdata['Full_name']; ?>"></td>
                  
                    <td><b>Email:</b></td>
                    <td><input type="email" name="email" value="<?php echo $getdata['Email']; ?>"></td>
                  </tr>
                  <tr>
                    <td><b>Phone Number:</b></td>
                    <td><input type="number" name="pnumber" value="<?php echo $getdata['Phone_number']; ?>"></td>
                  
                    <td><b>Date Of Birth:</b></td>
                    <td><input type="date" name="bday" value="<?php echo $getdata['Dob']; ?>"></td>
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
                      <option ><?php echo $getdata['Batting_style']; ?></option>
                      <option value="Right Hand Bat">Right Hand Bat</option>
                      <option value="Left Handed Bat">Left Handed Bat</option>
              
                      </SELECT>
                    </td>
                
                    <td><b>Bowling Style:</b></td>
                    <td>
                    <SELECT  name="bowlstyle" >
                    <option ><?php echo $getdata['Bowling_style']; ?></option>
                    <option value="Right-arm fast-medium">Right-arm fast-medium</option>
                    <option value="Left-arm fast-medium">Left-arm fast-medium</option>
              
                   </SELECT>
                   </td>
                  </tr>
                  <tr>
                    <td><b>Picture:</b></td>
                    <td><input type="file" name="picture"  value="<?php echo $getdata['Picture']; ?>"  required></td>
                  
                    <td><b>Address:</b></td>
                    <td><input type="text" name="address" value="<?php echo $getdata['Address']; ?>" ></td>
                  </tr>
                  
                  <tr>
                    
                                  
                    <td><input type="submit" name="update" value="update"></td>
                  </tr>

                </table>
              </form>
            </div>
	<div class="footer">
      <p>Copy Right@Biplob & Nahid</p>
    </div>

    
</body>
</html>