<!DOCTYPE html>
<html>
<head>
	<title>lägg till spel</title>
	<?php 
	include_once 'dbuncludes.php';


	?>
</head>
<body>
<h1>lägg till Spel</h1>

<p><a href="">Tillbaka till Huvudadminsidan</a></p>
<form>
	Titel:<input type="text" name="">
	Omslag:
	Genre:

</form>

<?php
 if($conn->connect_error){
	die('uppkomlingen misslyckades'.$conn_error);
}
else{echo "We are in bitches";} 
?>

</body>
</html>