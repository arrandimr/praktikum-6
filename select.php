<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$servername  = "localhost";
	$database = "praktikum6";
	$username = "root";
	$password  = "";
	$conn = mysqli_connect($servername, $username, $password, $database);
	
	if (!$conn){
	die("Connection failed : " . mysqli_connect_error());
	}
	$sql = "select kode,negara,champion from liga";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)){
			echo "kode : ".$row['kode']." - Negara : ".$row['negara']." ".$row['champion']."<br>";
		}
	} else {
		echo "0 results";
	}
	mysqli_close($conn);
	?>
</body>
</html>