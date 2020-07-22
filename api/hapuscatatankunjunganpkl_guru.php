<?php
include "connection.php";

$id_catatan_kunjungan_pkl = $_GET['id_catatan_kunjungan_pkl'];

class emp
{
}

$Sql_Query = "DELETE FROM catatan_kunjungan_pkl WHERE catatan_kunjungan_pkl.id_catatan_kunjungan_pkl = '$id_catatan_kunjungan_pkl'";

if (mysqli_query($con, $Sql_Query)) {
    $status_pesan = new emp();
    $status_pesan->status_kode = 1;
    $status_pesan->status_pesan = "Data berhasil dihapus";
    die(json_encode($status_pesan));
} else {
    $status_pesan = new emp();
    $status_pesan->status_kode = 0;
    $status_pesan->status_pesan = "Error simpan Data";
    die(json_encode($status_pesan));
}

mysqli_close($con);
