<?php 

require_once 'actions/db_connect.php';

	if ($_GET['id']) {
		$id = $_GET['id'];
		$sql = "SELECT * FROM media INNER JOIN authors ON author_id=fk_author_id WHERE media_id = {$id}" ;
		$result = $connect->query($sql);
		$data = $result->fetch_assoc();
		$connect->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title>Delete media</title>
    <style type= "text/css">
       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }
       .delete {
       	margin: 3vw;
       }

       table tr th  {
           padding-top: 20px;
       }
   </style>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div class="page-wrapper delete">
	
	<?php 
	echo  "
        <div class='book'>
            <img src='".$data['img']."' alt='book'>
            <div class='description'>
                <div class='book_title'>".$data['title']."</div>
                <div class='book_author'>".$data['author']."</div>
                <div class='book_sum'>".$data['short_disc']."</div>
            </div>
        </div>";
	?>
	<div class="addItem"><h3>Do you really want to delete this Item?</h3></div>
	<a href="actions/a_delete.php?id=<?php echo $data['media_id']?>" /><button type='button'>Yes!</button></a>
			<a href= "index.php"><button type="button">No!</button></a>
</div>
</body>
</html>

<?php
}
?>