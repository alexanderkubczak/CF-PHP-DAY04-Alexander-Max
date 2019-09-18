<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 

		/**
		 * 
		 */
		class Author
		{
			public $id;
			public $name;
			public $surname;
			public $birthDate;
			
			function __construct($ida,$firstname,$lastname,$DateofBirth)
			{
			$this->id = $ida;
			$this->name = $firstname;
			$this->surname = $lastname;
			$this->birthDate = $DateofBirth;

			}

			public function delete(){
				$mysqli = new mysqli("localhost","root","","cr11_max_widhalm_biglibrary");

				if ($mysqli->connect_errno) {
					echo "no f*** connection to our database" .$mysqli->connect_error;
				}

				$beekesql="DELETE FROM author where authorId = " .$this->id;

				$result = $mysqli->query($beekesql);

			}


		}


					$connectiontoDb = new mysqli("localhost","root","","cr11_max_widhalm_biglibrary");
					$sql = " SELECT * from authors where author_id = 123";

					$result = $connectiontoDb->query($sql) or die(mysqli_error());

					$row = $result->fetch_assoc();

				$author1 = new Author($row["author_id"],$row["name"],$row["surname"],$row["media"], $row["genre"]);

			$author1->delete(); 

			echo "ich war hier";

	 ?>

</body>
</html>