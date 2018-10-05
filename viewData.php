<?php
require_once("db.php");   
?>
<h1 align="center">View Data</h1>
<table border="1" align="center">
	<thead>
		<th>Id</th>
		<th>Nama</th>
		<th>Nim</th>
		<th>Tanggal Lahir</th>
		<th>Action</th>
	</thead>
	<tbody>

<?php  
$sql	= "SELECT * FROM mahasiswa";
$result	= mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0 ) {
	//output data dari beberapa row
	while ($row = mysqli_fetch_assoc($result)) {
		$data = $row["id"];
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . $row['nama'] . "</td>";
		echo "<td>" . $row['nim'] . "</td>";
		echo "<td>" . $row['tgl_lahir'] . "</td>";
		echo "<td>" . "<a href='formUpdate.php?id=$data'>Edit</a> |<a href='delete.php?id=$data'>Hapus</a>" . "</td>";
		echo "</tr>";
	}
} else {
}
mysqli_close($conn);
?>
	</tbody>
</table>