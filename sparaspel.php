<!DOCTYPE html>
<html>
<?php 
include_once "dbincludes.php";

if(isset($_POST['submit'])){
	$titel = $_POST['titel'];
	$publisher = $_POST['publisher'];
	$genre = $_POST['genre'];
	$studio = $_POST['studio'];
}
?>
<head>
	<title>Lägg till nytt spel</title>
</head>
<body>'
	<h1>Lägg till nytt spel</h1>
	<p><a href="index.php">Tillbaka till startsidan</a></p>


	<form action="sparaspel.php" method="post">
		Titel:<input type="text" id="titel" name="titel" value="<?php if(!empty($titel)){ echo $titel; } ?>"><br>
		Publisher:<input type="text" id="publisher" name="publisher" value="<?php if(!empty($publisher)){ echo $publisher; } ?>"><br>		
		Genre:<input type="text" id="genre" name="genre" value="<?php if(!empty($genre)){ echo $genre; } ?>"><br>
		Studio:<input type="text" id="studio" name="studio" value="<?php if(!empty($studio)){ echo $studio; } ?>"><br>
		Omslag:<input type="image" id="coverimage" name="coverimage" value="<?php if(!empty($coverimage)){ echo $coverimage; } ?>"><br>
		<input type="submit" name="submit" value="spara">
	</form>

	<?php
	if(isset($_POST['submit'])){
		if(empty($titel)){
			echo "du måste ange en titel <br>";

			?>
			<script>
				document.getElementById('titel').style.backgroundColor = "pink";
				document.getElementById('publisher').style.backgroundColor = "";
				document.getElementById('genre').style.backgroundColor = "";
				document.getElementById('studio').style.backgroundColor = "";
			</script>
			<?php

		}
	else if(empty($publisher)){
			echo "du måste ange en publisher <br>";

			?>
			<script>
				document.getElementById('titel').style.backgroundColor = "";
				document.getElementById('publisher').style.backgroundColor = "pink";
				document.getElementById('genre').style.backgroundColor = "";
				document.getElementById('studio').style.backgroundColor = "";
			</script>
		 
			<?php
}
		else if(empty($genre)){
			echo "du måste ange en genre <br>";

			?>
			<script>
				document.getElementById('titel').style.backgroundColor = "";
				document.getElementById('publisher').style.backgroundColor = "";
				document.getElementById('genre').style.backgroundColor = "pink";
				document.getElementById('studio').style.backgroundColor = "";
			</script>

			<?php
}
		else if(empty($studio)){
			echo "du måste ange en studio <br>";

			?>
			<script>
				document.getElementById('titel').style.backgroundColor = "";
				document.getElementById('publisher').style.backgroundColor = "";
				document.getElementById('genre').style.backgroundColor = "";
				document.getElementById('studio').style.backgroundColor = "pink";
			</script>
			<?php
		}
			
else{
	$sql = "INSERT INTO games (titel, publisher, genre, studio) VALUES('$titel','$publisher','$genre','$studio')";
		if($conn->query($sql)){
		echo "Your game has been saved";
	}
	else {
		echo "Your save game is corrupted or missing";
	}
}
}
	?>

</body>
</html>