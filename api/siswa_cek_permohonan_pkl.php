<?php

include_once "connection.php";

class emp
{
}

$id_siswa = $_GET['id_siswa'];

$query = mysqli_query($con, "SELECT * FROM pengajuanpkl where id_siswa=$id_siswa and status_validasi='Diterima' or status_validasi = 'Proses Pengajuan' or status_validasi = 'Belum Tervalidasi'");

$json = array();

while ($row = mysqli_fetch_assoc($query)) {
    $json[] = $row;
}

if (!empty($json)) {
    $status_pesan = new emp();
    $status_pesan->status_kode = 1;
    $status_pesan->status_pesan = "Maaf, Anda sudah mengajukan permohonan PKL sebelumnya, silahkan menunggu status validasi penerimaan";
    die(json_encode($status_pesan));
} else {
    $status_pesan = new emp();
    $status_pesan->status_kode = 0;
    $status_pesan->status_pengajuan = "Belum mengajukan";
    $status_pesan->status_pesan = "Tidak ada data";
    die(json_encode($status_pesan));
}

echo json_encode($json);

mysqli_close($con);
