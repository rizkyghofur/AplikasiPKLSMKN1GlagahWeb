<?php
include "connection.php";

$id_siswa = $_POST['id_siswa'];
$tanggal = $_POST['tanggal'];
$id_kompetensi_dasar = $_POST['id_kompetensi_dasar'];
$topik_pekerjaan = $_POST['topik_pekerjaan'];
$dokumentasi = $_POST['dokumentasi'];

$targer_dir = $_SERVER['DOCUMENT_ROOT'] . "/pklsmkn1glagah/dokumentasi/" . $dokumentasi;

class emp
{
}

$Sql_Query = "INSERT INTO jurnal_pkl (id_siswa, id_kompetensi_dasar, tanggal, topik_pekerjaan, dokumentasi) values ('$id_siswa','$id_kompetensi_dasar','$tanggal','$topik_pekerjaan', '$dokumentasi')";

if (mysqli_query($con, $Sql_Query)) {
    move_uploaded_file($targer_dir, $dokumentasi);
    $status_pesan = new emp();
    $status_pesan->status_kode = 1;
    $status_pesan->status_pesan = "Data berhasil disimpan";
    die(json_encode($status_pesan));
} else {
    $status_pesan = new emp();
    $status_pesan->status_kode = 0;
    $status_pesan->status_pesan = "Error simpan Data";
    die(json_encode($status_pesan));
}

mysqli_close($con);
