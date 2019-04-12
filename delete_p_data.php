<?php 
 include "db_connection.php";

 $id=$_GET["id"];
 $db= new database();

 $query="DELETE FROM player_reg WHERE id=$id";
 $deletedata=$db->delete($query);



 ?>