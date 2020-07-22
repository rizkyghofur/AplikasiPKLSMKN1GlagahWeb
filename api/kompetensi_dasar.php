<?php

include_once "connection.php";

$id_mapel = $_GET['id_mapel'];

$query = mysqli_query($con, "SELECT id, kompetensi_dasar, kode FROM kompetensi_dasar where id_mapel='$id_mapel' ORDER BY id ASC");

$json = array();

while ($row = mysqli_fetch_assoc($query)) {
    $json[] = $row;
}

echo json_encode($json);

mysqli_close($con);
