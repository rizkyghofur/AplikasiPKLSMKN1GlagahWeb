<?php

include_once "connection.php";

class emp
{
}

$id_guru = $_GET['id_guru'];

$query = mysqli_query($con, "SELECT * FROM `pengajuanpkl` where id_guru=$id_guru");

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
    $status_pesan->status_pesan = "Data kosong.";
    die(json_encode($status_pesan));
}

echo json_encode($json);

mysqli_close($con);
