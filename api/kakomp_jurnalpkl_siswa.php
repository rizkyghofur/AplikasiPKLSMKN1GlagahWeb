<?php
include "connection.php";

$query = mysqli_query($con, "SELECT * FROM jurnal_pkl join data_siswa on data_siswa.id=jurnal_pkl.id_siswa join pengajuanpkl on pengajuanpkl.id_siswa=jurnal_pkl.id_siswa join data_dudi on data_dudi.id=pengajuanpkl.id_dudi order by jurnal_pkl.id_jurnal_pkl desc, data_dudi.nama_dudi asc");

$json = array();

while ($row = mysqli_fetch_assoc($query)) {
    $json[] = $row;
}

echo json_encode($json);

mysqli_close($con);
