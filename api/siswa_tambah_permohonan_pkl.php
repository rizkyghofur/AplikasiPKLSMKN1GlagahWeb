<?php
include "connection.php";

$id_siswa = $_GET['id_siswa'];
$id_dudi = $_GET['id_dudi'];

class emp
{
}

$Sql_Query = "INSERT INTO pengajuanpkl (id_siswa, id_dudi) values ('$id_siswa','$id_dudi')";

$query = mysqli_query($con, "SELECT * from data_dudi where id_dudi = $id_dudi and kuota > 0");

$row = mysqli_fetch_array($query);

if ($row['kuota'] != null) {
    mysqli_query($con, $Sql_Query);
    $status_pesan = new emp();
    $status_pesan->kuota = $row['kuota'];
    $status_pesan->status_kode = 1;
    $status_pesan->status_pesan = "Permohonan PKL diterima, cek aplikasi secara berkala untuk mengetahui penerimaan permohonan PKL";
    die(json_encode($status_pesan));
} else {
    $status_pesan = new emp();
    $status_pesan->status_kode = 0;
    $status_pesan->status_pesan = "Maaf, kuota pada DUDI yang Anda pilih sudah penuh, silahkan pilih DUDI lain atau hubungi Admin PKL";
    die(json_encode($status_pesan));
}

mysqli_close($con);
