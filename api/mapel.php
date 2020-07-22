<?php

include_once "connection.php";

$query = mysqli_query($con, "SELECT id, nama_mapel FROM mapel ORDER BY id ASC");

$json = array();

while ($row = mysqli_fetch_assoc($query)) {
    $json[] = $row;
}

echo json_encode($json);

mysqli_close($con);
