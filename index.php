<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <title>cr11_max_widhalm_biglibrary</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   <style type ="text/css">
        table {
           width: 100%;
            margin: 2vw;
       }
       h1 {
        margin-left: 5vw;
       }
        .add {
          margin-left: 5vw;
        }
   </style>

</head>
<body>
  <h1>Big Library</h1>
<div class="page-wrapper">
   <a href= "create.php"><button type="button" class="add">Add new media</button></a>

   <table class="table" border="1" cellspacing= "0" cellpadding="0">
       <thead>
           <tr>
              <th scope="col">ID</th>
              <th scope="col">ISBN</th>
              <th scope="col">Title</th>
              <th scope="col">Author</th>
              <th scope="col">Type</th>
              <th scope="col">Cover</th>
              <th scope="col">Status</th>
              <th scope="col">Description</th>
              <th scope="col">Publisher ID</th>
           </tr>
       </thead>
       <tbody>

            <?php
           $sql = "SELECT * FROM media INNER JOIN authors ON author_id=fk_author_id ORDER BY media_id ASC";
               $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                          <td>" .$row['media_id']."</td>
                          <td>" .$row['isbn']."</td>
                          <td>" .$row['title']."</td>
                          <td>" .$row['author']."</td>
                          <td>" .$row['type']."</td>
                          <td><img class='img-thumbnail' src=" .$row['img']." alt='image'/></td>
                          <td>" .$row['status']."</td>
                          <td>" .$row['short_disc']."</td>
                          <td>" .$row['fk_publisher_id']."</td>
                          <td>
                          <a href='update.php?id=".$row['media_id']."'><button class='home-manipulate-button' type='button'>Edit</button></a>
                          <a href='delete.php?id=".$row['media_id']."'><button class='home-manipulate-button' type='button'>Delete</button></a>
                          <a href='show_media.php?id=".$row['media_id']."'><button class='home-manipulate-button' type='button'>Details</button></a>
                          </td>
                          </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>

           
       </tbody>
   </table>
</div>

</body>
</html>