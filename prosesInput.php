<?php
require_once("db.php");

$id			= $_POST['id'];
$nama		= $_POST['nama'];
$nim		= $_POST['nim'];
$tgl_lahir	= $_POST['tgl_lahir'];

$sql = "INSERT INTO mahasiswa(id, nama, nim, tgl_lahir)
	   VALUES ('$id', '$nama', '$nim', '$tgl_lahir')";

if (mysqli_query($conn, $sql)) {
	echo "Data Berhasil Di Tambahkan";
	echo "Silahkan <a href='viewData.php'>klik</a> untuk melanjutkan";

} else{
	echo "error". $sql . "<br>" . mysqli_error($conn);
}
?>