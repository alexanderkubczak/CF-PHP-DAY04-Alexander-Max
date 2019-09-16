<!DOCTYPE html>
<html>
<head>
   <title>Add</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

   <style type= "text/css">
       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Add media</legend>

   <form  action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>ISBN</th>
               <td><input  type="text" name="isbn"  placeholder="ISBN" /></td>
           </tr>    
           <tr>
               <th>Title</th>
               <td><input  type="text" name= "title" placeholder="title" /></td>
           </tr>
           <tr>
               <th>Author</th>
               <td><input type="text"  name="author" placeholder ="author" /></td>
           </tr>
           <tr>
               <th>Cover</th>
               <td><input type="text"  name="img" placeholder ="Image URL" /></td>
           </tr>
           <tr>
               <th>Description</th>
               <td><input type="text"  name="short_disc" placeholder ="Write description" /></td>
           </tr>
           <tr>
               <th>Author ID</th>
               <td><input type="text"  name="fk_author_id" placeholder ="Author ID" /></td>
           </tr>
           <tr>
               <th>Publisher ID</th>
               <td><input type="text"  name="fk_publisher_id" placeholder ="Publisher ID" /></td>
           </tr>
           <tr>
              <th>Status</th>
              <td><select name= "status">
              <option value="available">available</option>
              <option value="reserved">reserved</option>
              </select>
              </td>
            </tr>
            <tr>
                <th>Type</th>
                <td>
                <select name= "type">
                <option value="book">BOOK</option>
                <option value="cd">CD</option>
                <option value="dvd">DVD</option>
                </select>
                </td>
            </tr>
            <tr>
               <td><button type ="submit">Add this media</button></td>
               <td><a href= "index.php"><button  type="button">Back</button></a></td>
           </tr>
       </table>
   </form>

</fieldset >

</body>
</html>