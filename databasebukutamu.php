<?php 
$servername = "localhost";

$username = "root";
$password  = "";
$conn1 = mysqli_connect($servername, $username, $password);

if (!$conn1){
	die("Connection failed: " . mysqli_connect_error());
}
//create database
$sql1 = "create database praktikum";
$sql2 = "create table bukutamu ( id_bt INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nama VARCHAR(200) NOT NULL, email VARCHAR(50) NOT NULL, isi int(50) )";
if (mysqli_query($conn1, $sql1)) {
	echo "Database sukses dibuat<br>";
} else {
	echo "Pembuatan database gagal!<br> " . mysqli_error($conn);
}
mysqli_close($conn1);

$database = "praktikum";
$conn2 = mysqli_connect($servername, $username, $password, $database);

if (mysqli_query($conn2, $sql2)) {
	echo "Tabel telah dibuat<br>";
} else {
	echo "Pembuatan tabel gagal!<br> " . mysqli_error($conn);
}
mysqli_close($conn2);
?>