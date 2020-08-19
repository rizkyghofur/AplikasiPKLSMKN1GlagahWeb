<?php
include "connection.php";

$id_jurnal_pkl = $_GET['id_jurnal_pkl'];

class emp
{
}

$getdata = mysqli_query($con, "SELECT * FROM jurnal_pkl where id_jurnal_pkl = '$id_jurnal_pkl'");
$row = mysqli_fetch_array($getdata);

if (!empty($row)) {
    if ($row['dokumentasi'] != 'default.jpg') {
        unlink("../dokumentasi/" . $row['dokumentasi']);
    }
} else {
    $status_pesan = new emp();
    $status_pesan->status_kode = 0;
    $status_pesan->status_pesan = "Error hapus gambar";
    die(json_encode($status_pesan));
}

$Sql_Query = "DELETE FROM jurnal_pkl WHERE id_jurnal_pkl = '$id_jurnal_pkl'";

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
