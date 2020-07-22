<?php
include "connection.php";

class emp
{
}

$id_siswa = $_GET['id_siswa'];

$query = mysqli_query($con, "SELECT * FROM catatan_kunjungan_pkl join data_guru on data_guru.id_guru=catatan_kunjungan_pkl.id_guru join pengajuanpkl on pengajuanpkl.id_guru=catatan_kunjungan_pkl.id_guru where pengajuanpkl.id_siswa=$id_siswa order by catatan_kunjungan_pkl.id_catatan_kunjungan_pkl desc");

$json = array();

while ($row = mysqli_fetch_assoc($query)) {
	$json[] = $row;
}

echo json_encode($json);

mysqli_close($con);
