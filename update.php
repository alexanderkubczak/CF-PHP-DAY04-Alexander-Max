<?php 
    require_once 'actions/db_connect.php';
    if ($_GET['id']) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM media WHERE media_id = {$id}" ;
        $result = $connect->query($sql);
        $data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>

  <title>Edit Item</title>

  <link rel="stylesheet" type="text/css" href="library.css">
  <style type ="text/css">
        main {
           width: 100%;
            margin: 2vw;
       }

   </style>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

  <header>
    
    <div class="welcome"><h1>Best Library</h1></div>

  </header>


    <main>
    
       <div class="addItem">Add Media

        <form action="actions/a_update.php" method="post">

             <input type="hidden" name="media_id" value="<?php echo $data['media_id'] ?>" />

            <div class="form_row">
                <div class="form-group col-md-6">
                    ISBN:
                <input type="text" placeholder="ISBN" name="isbn" value="<?php echo $data['isbn'] ?>">
                </div>

            </div>

            <div class="form_row">
                <div class="form-group col-md-6">
                    Title:
                

                <input type="text" placeholder="Title" name="title" value="<?php echo $data['title'] ?>">
                </div>
            </div>

            <div class="form_row">
                <div class="form-group col-md-6">
                    Image:
                

                <input type="text" placeholder="Image URL" name="img" value="<?php echo $data['img'] ?>">
                </div>
            </div>

            <div class="form_row">
                <div class="form-group col-md-6">
                    Description:
                

                <input type="text" placeholder="Description" name="short_disc" value="<?php echo $data['short_disc'] ?>">
                </div>
            </div>

            <div class="form_row">
                <div class="form-group col-md-6">
                    Type:
                

                <select name="type">
                    <option <?php echo $data['type'] == "book" ? "selected='selected'" : ''  ?> value="Book">Book</option>
                    <option <?php echo $data['type'] == "dvd" ? "selected='selected'" : ''  ?> value="dvd">dvd</option>
                    <option <?php echo $data['type'] == "cd" ? "selected='selected'" : ''  ?> value="cd">cd</option>
                </select>
                </div>
            </div>

            <div class="form_row">
                <div class="form-group col-md-6">
                    Availibilty:
               

                <input type="text" placeholder="availibility" name="status" value="<?php echo $data['status'] ?>">
                 </div>
            </div>

            <div class="form_row">
                <div class="form-group col-md-6">
                    Author:
               
                <input type="text" placeholder="author" name="author" value="<?php echo $data['author'] ?>">
                 </div>
            </div>
            
            <div class="form_row">
                <div class="form-group col-md-6">
                    Publisher ID:
                

                <input type="text" placeholder="publisher_id" name="publisher_id" value="<?php echo $data['fk_publisher_id'] ?>">
                <?php $connect->close(); ?>
                </div>
            </div>
            

            <button class="button" type="submit">Save</button>
            <a href="index.php" class="button">Go back</a>

        </form>
      </div>
    </main>

</body>
</html>

<?php
}
?>