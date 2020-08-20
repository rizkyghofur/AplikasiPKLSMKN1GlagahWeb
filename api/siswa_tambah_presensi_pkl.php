<?php
include "connection.php";

$id_siswa = $_GET['id_siswa'];
$tanggal_absensi = $_GET['tanggal_absensi'];
$keterangan = $_GET['keterangan'];

class emp
{
}

$Sql_Query = "INSERT INTO absensi (id_siswa, tanggal_absensi, keterangan) values ('$id_siswa','$tanggal_absensi','$keterangan')";

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
