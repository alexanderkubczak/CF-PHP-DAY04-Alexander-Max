<?php 
require_once 'db_connect.php';
if ($_GET['id']) {
	$id = $_GET['id'];
   $sql = "DELETE FROM media WHERE media_id = {$id}";
    if($connect->query($sql) === TRUE) {
       echo "<h2>Successfully deleted!!</h2>" ;
       echo "<a href='../index.php'><button type='button'>Back</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }
   $connect->close();
}
?>