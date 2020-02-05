<!DOCTYPE html>
<html>
<head>
<?php include_once "dbincludes.php"; 	
if($conn->connect_error){
	die('uppkomlingen misslyckades'.$conn_error);
}
else{echo "Were in bitches";}
?>
<link rel="stylesheet" type="text/css" href="style.php">
	<title>Tjena</title>
</head>
<body>
	<h1>Adminsida</h1>
	<?php

		$sql = "SELECT id, titel, publisher, Coverimage, genre FROM games;";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
		while ($row = $result->fetch_assoc()) {
			echo "id: ".$row["id"]. "titel: ".$row["titel"]. "publisher: ".$row["publisher"]. "Coverimage: ".$row["Coverimage"]. "genre: ". $row["genre"].
			"<br>";
		}
	}
	else{
		echo "tabellen är tom";
	}
	?>

<p><a href="sparaspel.php">Titlar</a></p>

</body>
</html>