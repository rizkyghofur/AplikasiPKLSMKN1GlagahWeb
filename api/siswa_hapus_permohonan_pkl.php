<?php
include "connection.php";

$id_pengajuanpkl = $_GET['id_pengajuanpkl'];

class emp
{
}

$Sql_Query = "DELETE FROM pengajuanpkl WHERE pengajuanpkl.id_pengajuanpkl = '$id_pengajuanpkl'";

if (mysqli_query($con, $Sql_Query)) {
    $status_pesan = new emp();
    $status_pesan->status_kode = 1;
    $status_pesan->status_pesan = "Data berhasil dihapus";
    die(json_encode($status_pesan));
} else {
    $status_pesan = new emp();
    $status_pesan->status_kode = 0;
    $status_pesan->status_pesan = "Terjadi kesalahan hapus data";
    die(json_encode($status_pesan));
}

mysqli_close($con);
