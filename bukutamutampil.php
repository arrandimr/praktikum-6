<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form method="POST" action="bukutamucari.php">
	<h4 align="center">BUKU TAMU</h4>
	<p align="center">Cari : <input type="text" name="nama"> <input type="submit" name="cari" value="cari"></p>
	<?php
	$servername  = "localhost";
	$database = "praktikum6";
	$username = "root";
	$password  = "";
	$conn = mysqli_connect($servername, $username, $password, $database);
	
	if (!$conn){
	die("Connection failed : " . mysqli_connect_error());
	}
	$sql = "select * from buku_tamu";
	$result = mysqli_query($conn, $sql);
	echo "<table align='center' width='800' cellpadding='2' cellspacing='2' border='1pt'>";
			echo "<tr><th>No. Urut</th><th> Nama </th><th> Email </th><th> Isi </th></tr>";
	if (mysqli_num_rows($result)>0){
		
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr><td align='center'>".$row['id_bt']."</td><td>".$row['nama']."</td><td>".$row['email']."</td><td align='center'>".$row['isi']."</td></tr>";
		}
	} else {
		echo "0 results";
	}
	echo "</table>";
	mysqli_close($conn);
	?></form>
</body>
</html>