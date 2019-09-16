<?php 
require_once 'db_connect.php';
if ($_POST) {
  $id = $_POST['media_id'];
  $media_isbn = $_POST['isbn'];
  $media_title = $_POST['title'];
  $media_author = $_POST['author'];
  $media_image = $_POST['img'];
  $media_description = $_POST['short_disc'];
  $media_type = $_POST['type'];
  $media_status = $_POST['status'];
  $sql_request = "UPDATE media SET `isbn` = '$media_isbn', `title` = '$media_title', `author` = '$media_author', `img` = '$media_image', `short_disc` = '$media_description', `type` = '$media_type', `status` = '$media_status' WHERE media_id = '$id'" ;
?>

<!DOCTYPE html>
<html>
<head>
  <title>Confirmation</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<?php
  if($connect->query($sql_request) === TRUE) {
    echo "
    <div class='confirmation-message'>
      <h2>Record successfully updated</h2>
      <a href='../update.php?id=$id'><button type='button'>Back</button></a>
      <a href='../index.php'><button type='button'>Home</button></a>
    </div>
    ";
  } else {
    echo "Error while updating record : ". $connect->error;
  }
$connect->close();
}
?>