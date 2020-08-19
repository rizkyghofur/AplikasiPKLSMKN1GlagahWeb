<?php
include "connection.php";

$id_guru = $_GET['id_guru'];
$tanggal_kunjungan = $_GET['tanggal_kunjungan'];
$catatan_pembimbing = $_GET['catatan_pembimbing'];

class emp
{
}

$Sql_Query = "INSERT INTO catatan_kunjungan_pkl (id_guru, tanggal_kunjungan, catatan_pembimbing) values ('$id_guru','$tanggal_kunjungan','$catatan_pembimbing')";

if (mysqli_query($con, $Sql_Query)) {
    $status_pesan = new emp();
    $status_pesan->status_kode = 1;
    $status_pesan->status_pesan = "Data berhasil disimpan";
    die(json_encode($status_pesan));
} else {
    $status_pesan = new emp();
    $status_pesan->status_kode = 0;
    $status_pesan->status_pesan = "Terjadi kesalahan simpan data";
    die(json_encode($status_pesan));
}

mysqli_close($con);
