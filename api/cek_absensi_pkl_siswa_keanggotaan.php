<?php

include_once "connection.php";

class emp
{
}

$id_siswa = $_GET['id_siswa'];

$query = mysqli_query($con, "SELECT * FROM pengajuanpkl where id_siswa=$id_siswa and status_keanggotaan='Ketua Kelompok'");

$json = array();

while ($row = mysqli_fetch_assoc($query)) {
    $json[] = $row;
}

if (!empty($json)) {
    $status_pesan = new emp();
    $status_pesan->status_kode = 1;
    $status_pesan->status_pesan = "Data ditemukan";
    die(json_encode($status_pesan));
} else {
    $status_pesan = new emp();
    $status_pesan->status_kode = 0;
    $status_pesan->status_pesan = "Maaf, Anda tidak diizinkan mengakses pengisian absensi, silahkan hubungi ketua kelompok PKL Anda.";
    die(json_encode($status_pesan));
}

echo json_encode($json);

mysqli_close($con);
