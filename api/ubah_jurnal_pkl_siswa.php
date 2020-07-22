<?php
include "connection.php";

$id_jurnal_pkl = $_POST['id_jurnal_pkl'];
$id_siswa = $_POST['id_siswa'];
$tanggal = $_POST['tanggal'];
$id_kompetensi_dasar = $_POST['id_kompetensi_dasar'];
$topik_pekerjaan = $_POST['topik_pekerjaan'];

class emp
{
}

$Sql_Query = "UPDATE jurnal_pkl set id_siswa = '$id_siswa', id_kompetensi_dasar = '$id_kompetensi_dasar', tanggal = '$tanggal', topik_pekerjaan = '$topik_pekerjaan' where jurnal_pkl.id_jurnal_pkl='$id_jurnal_pkl'";

if (mysqli_query($con, $Sql_Query)) {
    $status_pesan = new emp();
    $status_pesan->status_kode = 1;
    $status_pesan->status_pesan = "Data berhasil diubah";
    die(json_encode($status_pesan));
} else {
    $status_pesan = new emp();
    $status_pesan->status_kode = 0;
    $status_pesan->status_pesan = "Error simpan Data";
    die(json_encode($status_pesan));
}

mysqli_close($con);
