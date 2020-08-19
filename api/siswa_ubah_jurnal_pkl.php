<?php
include "connection.php";

$id_jurnal_pkl = $_POST['id_jurnal_pkl'];
$id_siswa = $_POST['id_siswa'];
$tanggal = $_POST['tanggal'];
$id_kompetensi_dasar = $_POST['id_kompetensi_dasar'];
$topik_pekerjaan = $_POST['topik_pekerjaan'];
$dokumentasi = $_POST['dokumentasi'];

if ($_POST['dokumentasi'] == "default.jpg") {
    $nama_gambar = "default.jpg";
} else {
    $random = random_word(20);
    $nama_gambar = $random . ".png";
    $path = "../dokumentasi/" . $random . ".png";
}

class emp
{
}

$Sql_Query = "UPDATE jurnal_pkl set id_siswa = '$id_siswa', id_kompetensi_dasar = '$id_kompetensi_dasar', tanggal = '$tanggal', topik_pekerjaan = '$topik_pekerjaan', dokumentasi = '$nama_gambar' where jurnal_pkl.id_jurnal_pkl='$id_jurnal_pkl'";

if (mysqli_query($con, $Sql_Query)) {
    file_put_contents($path, base64_decode($dokumentasi));
    $status_pesan = new emp();
    $status_pesan->status_kode = 1;
    $status_pesan->status_pesan = "Data berhasil diubah";
    die(json_encode($status_pesan));
} else {
    $status_pesan = new emp();
    $status_pesan->status_kode = 0;
    $status_pesan->status_pesan = "Terjadi kesalahan ubah data";
    die(json_encode($status_pesan));
}

function random_word($id = 20)
{
    $pool = '1234567890abcdefghijkmnpqrstuvwxyz';

    $word = '';
    for ($i = 0; $i < $id; $i++) {
        $word .= substr($pool, mt_rand(0, strlen($pool) - 1), 1);
    }
    return $word;
}

mysqli_close($con);
