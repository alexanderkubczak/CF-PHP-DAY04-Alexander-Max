<?php 

require_once 'db_connect.php';

if ($_POST) {
  $media_isbn = $_POST['isbn'];
  $media_title = $_POST['title'];
  $media_author = $_POST['author'];
  $media_image = $_POST['img'];
  $media_description = $_POST['short_disc'];
  $media_authorid = $_POST['fk_author_id'];
  $media_publisher = $_POST['fk_publisher_id'];
  $media_status = $_POST['status'];
  $media_type = $_POST['type'];
  $sql_request = "INSERT INTO media (`isbn`, `title`, `author`, `img`, `short_disc`, `fk_author_id`, `fk_publisher_id`, `status`, `type`) VALUES ('$media_isbn', '$media_title', '$media_author', '$media_image', '$media_description', '$media_authorid', '$media_publisher', '$media_status', '$media_type')";

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
      <h2>Record has beed successfully added to the library</h2>
      <a href='../create.php'><button type='button'>Add more</button></a>
      <a href='../index.php'><button type='button'>Home</button></a>
    </div>
    ";
  } else {
    echo "Error while updating record : ". $connect->error;
  }
$connect->close();
}
?>

   


