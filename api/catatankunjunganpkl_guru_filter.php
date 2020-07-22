<?php
include "connection.php";

$id_guru = $_GET['id_guru'];
$tanggal_kunjungan = $_GET['tanggal_kunjungan'];

$query = mysqli_query($con, "SELECT * FROM catatan_kunjungan_pkl where id_guru=$id_guru and tanggal_kunjungan='$tanggal_kunjungan' order by catatan_kunjungan_pkl.id_catatan_kunjungan_pkl desc");

$json = array();

while ($row = mysqli_fetch_assoc($query)) {
    $json[] = $row;
}

echo json_encode($json);

mysqli_close($con);
