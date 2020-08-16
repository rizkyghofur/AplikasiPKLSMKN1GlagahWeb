<?php
include "connection.php";

$id_siswa = $_POST['id_siswa'];
$tanggal = $_POST['tanggal'];
$id_kompetensi_dasar = $_POST['id_kompetensi_dasar'];
$topik_pekerjaan = $_POST['topik_pekerjaan'];
$dokumentasi = $_POST['dokumentasi'];

class emp
{
}

if ($_POST['dokumentasi'] == "default.jpg") {
    $nama_gambar = "default.jpg";
    $path = "../dokumentasi/no-image.jpg";
} else {
    $random = random_word(20);
    $nama_gambar = $random . ".png";
    $path = "../dokumentasi/" . $random . ".png";
}

$Sql_Query = "INSERT INTO jurnal_pkl (id_siswa, id_kompetensi_dasar, tanggal, topik_pekerjaan, dokumentasi) values ('$id_siswa','$id_kompetensi_dasar','$tanggal','$topik_pekerjaan', '$nama_gambar')";

if (mysqli_query($con, $Sql_Query)) {
    file_put_contents($path, base64_decode($dokumentasi));
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
