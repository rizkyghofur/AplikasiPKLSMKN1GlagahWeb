<?php
include "connection.php";

$tanggal_absensi = $_GET['tanggal_absensi'];

$query = mysqli_query($con, "SELECT * FROM absensi join data_dudi join pengajuanpkl on pengajuanpkl.id_dudi=data_dudi.id_dudi join data_siswa on data_siswa.id_siswa=absensi.id_siswa where absensi.tanggal_absensi='$tanggal_absensi' group by absensi.id_siswa order BY tanggal_absensi DESC");

$json = array();

while ($row = mysqli_fetch_assoc($query)) {
    $json[] = $row;
}

echo json_encode($json);

mysqli_close($con);
