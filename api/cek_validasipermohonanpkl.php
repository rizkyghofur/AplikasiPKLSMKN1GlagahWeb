<?php

include_once "connection.php";

class emp
{
}

$id_siswa = $_GET['id_siswa'];

$query = mysqli_query($con, "SELECT * FROM `data_siswa` left join pengajuanpkl on pengajuanpkl.id_siswa=data_siswa.id_siswa where data_siswa.id_siswa = $id_siswa order by pengajuanpkl.id_pengajuanpkl desc");

$row = mysqli_fetch_array($query);

if (!empty($row['status_validasi'])) {
    $status_pesan = new emp();
    $status_pesan->status_validasi = $row['status_validasi'];
    $status_pesan->status_keanggotaan = $row['status_keanggotaan'];
    $status_pesan->status_kode = 1;
    die(json_encode($status_pesan));
} else {
    $status_pesan = new emp();
    $status_pesan->status_kode = 0;
    $status_pesan->status_pesan = "Tidak ada data";
    die(json_encode($status_pesan));
}

echo json_encode($json);

mysqli_close($con);
