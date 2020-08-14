<?php
include "connection.php";

$id_siswa = $_GET['id_siswa'];

$query = mysqli_query($con, "SELECT * FROM `program_pkl` join pengajuanpkl join data_dudi on data_dudi.id_dudi=pengajuanpkl.id_dudi join kompetensi_dasar on kompetensi_dasar.id=program_pkl.id_kompetensi_dasar join data_siswa on data_siswa.id_siswa=program_pkl.id_siswa where program_pkl.id_siswa=$id_siswa group by program_pkl.id_program_pkl desc");

$json = array();

while ($row = mysqli_fetch_assoc($query)) {
    $json[] = $row;
}

echo json_encode($json);

mysqli_close($con);
