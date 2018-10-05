<!DOCTYPE html>
<html>
<head>
	<title>Form Input</title>
</head>
<body>
	<h1 align="center">Form Inputan</h1>
	<table align="center" border="1">
		<form action="ProsesInput.php" method="post">
			<tr>
				<th>ID</th>
				<td><input type="text" name="id" id="id"></td>
			</tr>
			<tr>
				<th>Nama</th>
				<td><input type="text" name="nama" id="nama"></td>
			</tr>
			<tr>
				<th>Nim</th>
				<td><input type="text" name="nim" id="nim"></td>
			</tr>
			<tr>
				<th>Tanggal Lahir</th>
				<td><input type="date" name="tgl_lahir" id="tgl_lahir"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="submit"></td>
			</tr>
		</form>
	</table>
</body>
</html>