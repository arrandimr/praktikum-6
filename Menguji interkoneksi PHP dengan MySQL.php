<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Koneksi Database MySQL</title>
</head>

<body>
	<h1>Demo Koneksi Database MySQL</h1>
	<?php 
$con = mysqli_connect("localhost","root","","praktikum6");
	
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL".mysqli_connect_error();
		exit();
	}
?>
</body>
</html>
