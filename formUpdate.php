<?php  
require_once("db.php");

$data = $_GET['id'];

$sql = "SELECT * FROM mahasiswa WHERE id=$data";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Update</title>
</head>
<body>
	<h1 align="center">Form Update</h1>
	<form action="Update.php" method="POST">
		<table border="1" align="center">
			<tr>
			<td>ID</td>
			<td><input type="text" name="id" value="<?php echo $row["id"]; ?>" disabled>
                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $row["nama"]; ?>"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim" value="<?php echo $row["nim"]; ?>"></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tgl_lahir" value="<?php echo $row["tgl_lahir"]; ?>"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>