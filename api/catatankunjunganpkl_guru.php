<?php
include "connection.php";

$id_guru = $_GET['id_guru'];

$query = mysqli_query($con, "SELECT * FROM catatan_kunjungan_pkl where id_guru=$id_guru order by catatan_kunjungan_pkl.id_catatan_kunjungan_pkl desc");

$json = array();

while ($row = mysqli_fetch_assoc($query)) {
    $json[] = $row;
}

echo json_encode($json);

mysqli_close($con);
