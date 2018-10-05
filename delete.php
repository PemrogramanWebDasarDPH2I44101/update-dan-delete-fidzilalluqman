<?php
require_once("db.php");

$data = $_GET["id"];

$sql = "DELETE FROM mahasiswa WHERE id=$data";

if (mysqli_query($conn, $sql)) {
    header("Location: viewData.php");
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}