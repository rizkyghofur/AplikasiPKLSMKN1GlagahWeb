<?php

include_once "connection.php";

$id_dudi = $_GET['id_dudi'];

$query = mysqli_query($con, "SELECT * FROM `pengajuanpkl` join data_siswa on data_siswa.id_siswa=pengajuanpkl.id_siswa where pengajuanpkl.status_validasi='Diterima' and pengajuanpkl.id_dudi='$id_dudi'");

$json = array();

while ($row = mysqli_fetch_assoc($query)) {
    $json[] = $row;
}

echo json_encode($json);

mysqli_close($con);
