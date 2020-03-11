<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BUKU TAMU</title>
</head>

<body>
	<form method="POST" action="bukutamucek.php">
		<h4 align="center">BUKU TAMU</h4>
		<table width="300" align="center" cellpadding="2" cellspacing="2">
			<tr>
				<td width="100"> Nama </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="100"> Email </td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td width="100"> Isi </td>
				<td><input type="text" name="isi"></td>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="btnLogin" value="Daftar">
				<input type="reset" name="reset" value="reset"> <a href="bukutamutampil.php"><input type="button" name="cari" value="cari"></a></td>
			</tr>
		</table>
	</form>
</body>
</html>