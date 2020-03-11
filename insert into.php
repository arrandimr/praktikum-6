<?php 
$servername = "localhost";
$database = "praktikum6";
$username = "root";
$password  = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
	die("Connection failed : " . mysqli_connect_error());
}

$sql = "insert into liga (kode,negara, champion) values ('jer', 'jerman', '4')";

if (mysqli_query($conn, $sql)){
	echo "new record created successfully";
} else {
	echo "Error : ".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);

?>