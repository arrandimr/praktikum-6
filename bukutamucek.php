<?php 
if (empty($_POST['nama'] && $_POST['email'])){
	header("location:bukutamukosong.php");
} else {
	include "bukutamusimpan.php";
	echo "<br><br>";
	include "bukutamutampil.php";
}
?>