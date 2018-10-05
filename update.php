<?php
require_once("db.php");

$id			= $_POST['id'];
$nama		= $_POST['nama'];
$nim		= $_POST['nim'];
$tgl_lahir	= $_POST['tgl_lahir'];

$sql = "UPDATE mahasiswa SET id='$id', nama='$nama', nim='$nim', tgl_lahir='$tgl_lahir' WHERE nim=$nim";
if (mysqli_query($conn, $sql)) {
    header("Location: viewData.php");
}else {
    echo "Error updating record: " . $sql . "<br>" . mysqli_error($conn);
}