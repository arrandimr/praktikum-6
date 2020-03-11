<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BUKU TAMU</title>
</head>

<body>
<?php 
$servername = "localhost";
$database = "praktikum6";
$username = "root";
$password  = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
	die("Connection failed : " . mysqli_connect_error());
}

$sql = "insert into buku_tamu (nama,email,isi) values ('".$_POST['nama']."','".$_POST['email']."','".$_POST['isi']."');";

if (mysqli_query($conn, $sql)){
	echo "<h4 align='center'>new record created successfully</h4><br>";
} else {
	echo "Error : ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);
echo "<a href='bukutamu.php'><center><input type='submit' name='tampil' value='Kembali'></center></a>";

?>
		
	</body>