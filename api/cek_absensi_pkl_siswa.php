<?php

include_once "connection.php";

class emp
{
}

$id_siswa = $_GET['id_siswa'];
$tanggal_absensi = $_GET['tanggal_absensi'];

$query = mysqli_query($con, "SELECT * FROM absensi join data_siswa on data_siswa.id_siswa = absensi.id_siswa where absensi.id_siswa=$id_siswa and tanggal_absensi='$tanggal_absensi'");

$json = array();

while ($row = mysqli_fetch_assoc($query)) {
    $json[] = $row;
}

if (!empty($json)) {
    $status_pesan = new emp();
    $status_pesan->status_kode = 1;
    $status_pesan->status_pesan = "Maaf, siswa yang dipilih telah mengisi absensinya hari ini. Silahkan absensi kembali esok hari";
    die(json_encode($status_pesan));
} else {
    $status_pesan = new emp();
    $status_pesan->status_kode = 0;
    $status_pesan->status_pesan = "Tidak ada data";
    die(json_encode($status_pesan));
}

echo json_encode($json);

mysqli_close($con);
