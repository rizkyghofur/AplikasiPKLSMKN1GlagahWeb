<?php

include_once "connection.php";

$id_siswa = $_GET['id_siswa'];
$id_dudi = $_GET['id_dudi'];
$tanggal_absensi = $_GET['tanggal_absensi'];

$query = mysqli_query($con, "SELECT * FROM `absensi` join data_siswa on data_siswa.id_siswa=absensi.id_siswa where absensi.id_siswa='$id_siswa' and absensi.tanggal_absensi = '$tanggal_absensi' order by id_absensi desc");
$json = array();

while ($row = mysqli_fetch_assoc($query)) {
    $json[] = $row;
}

echo json_encode($json);

mysqli_close($con);
