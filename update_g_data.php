

<?php 
   include "db_connection.php";
 ?>
 <?php 

 $id=$_GET['id'];
 $db = new database();
 $query = "SELECT * FROM ground_book  where id=$id";
 $getdata = $db->select($query)->fetch_assoc(); 

  if(isset($_POST["update"])){
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

          $query="UPDATE ground_book SET Name='$name',Email='$email',Contact_number='$cnumber',Purpose='$purpose',Booking_date='$bdate',B_to='$bday' WHERE id=$id";

      $update=$db->update($query);
    }
   }


  ?>



<!DOCTYPE html >
<html>
<head>
  <title>Ground Booking Page</title>
  <link rel="stylesheet" type="text/css" href="css/nav_fot.css">
  <link rel="stylesheet" type="text/css" href="css/form_s.css">
  <link rel="stylesheet" type="text/css" href="css/body.css">
</head>
<body>
  <div class="main">
    
    <nav>
      <a href="main_menu.php"><img src="logo1.gif" width="150" height="50px"></a>
      <ul>
        <li><a href="main_menu.php">Home</a></li>
        <li><a href="player_reg.php">Player Registration</a></li>
        <li><a href="ground.php">Ground Booking</a></li>
        <li><a href="#">Club Member</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="login_form.php">Login</a></li>
      </ul>
    </nav>
  </div>

   <div class="form">
    
    <form action="update_g_data.php?id=<?php echo $id; ?>" method="POST">
      <h2>Ground Booking</h2>
      <table>
        <tr>
          <td><b>Name:</b></td>
          <td><input type="text" name="name" value="<?php echo $getdata['Name']; ?>"></td>
        </tr>
        <tr>
          <td><b>Email:<b/></td>
          <td><input type="email" name="email" value="<?php echo $getdata['Email']; ?>"></td>
        </tr>
        <tr>
          <td><b>Contact Number:</b></td>
          <td><input type="number" name="cnumber" value="<?php echo $getdata['Contact_number']; ?>"></td>
        </tr>
        <tr>
          <td><b>Purpose:</b></td>
          <td>
            <select name="purpose">
              <option ><?php echo $getdata['Purpose']; ?></option>
              <option value="Event">Event</option>
              <option value="Party">Party</option>
              <option value="Concert">Concert</option>
              
            </select>
          </td>
        </tr>
        <tr>
          <td><b>Booking Date:</b></td>
          <td><input type="date" name="bdate" value="<?php echo $getdata['Booking_date']; ?>"></td>

          <td><b>To:</b></td>
          <td><input type="Date" name="bday" value="<?php echo $getdata['B_to']; ?>"></td>
        </tr>
        
        <tr>
          <td><input type="reset" name="reset" value="Reset"></td>
          <td><input type="submit" name="update" value="Update"></td>
        </tr>
      </table>
    </form>
  </div>
  <div class="footer">
      <p>Copy Right@Biplob & Nahid</p>
    </div>

    
</body>
</html>