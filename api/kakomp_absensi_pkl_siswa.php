<?php
include "connection.php";

$query = mysqli_query($con, "SELECT * FROM absensi join data_dudi join pengajuanpkl on pengajuanpkl.id_dudi=data_dudi.id join data_siswa on data_siswa.id=absensi.id_siswa group by absensi.id_siswa order BY tanggal_absensi DESC, data_dudi.nama_dudi asc");

$json = array();

while ($row = mysqli_fetch_assoc($query)) {
    $json[] = $row;
}

echo json_encode($json);

mysqli_close($con);
