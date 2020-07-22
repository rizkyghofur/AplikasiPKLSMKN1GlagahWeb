<?php
include "connection.php";

$nama_dudi = $_GET['nama_dudi'];
$id_jurusan = $_GET['id_jurusan'];

$query = mysqli_query($con, "SELECT * FROM data_dudi where nama_dudi like '%$nama_dudi%' and id_jurusan='$id_jurusan' ORDER BY nama_dudi ASC");

$json = array();

while ($row = mysqli_fetch_assoc($query)) {
    $json[] = $row;
}

echo json_encode($json);

mysqli_close($con);
