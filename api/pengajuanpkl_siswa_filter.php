<?php

require_once('connection.php');

$status_validasi = $_GET['status_validasi'];

$query = mysqli_query($con, "SELECT * FROM pengajuanpkl LEFT JOIN data_guru on data_guru.id_guru = pengajuanpkl.id_guru join data_siswa on data_siswa.id_siswa=pengajuanpkl.id_siswa join data_dudi on data_dudi.id_dudi=pengajuanpkl.id_dudi where pengajuanpkl.status_validasi='$status_validasi' ORDER BY data_dudi.id_dudi desc");

$json = array();

while ($row = mysqli_fetch_assoc($query)) {
    $json[] = $row;
}

echo json_encode($json);
mysqli_close($con);
