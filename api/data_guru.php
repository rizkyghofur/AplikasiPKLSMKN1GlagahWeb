<?php 
	include "connection.php";
	
	$query = mysqli_query($con, "SELECT id_guru, nama_guru FROM data_guru ORDER BY nama_guru ASC");
	
	$json = array();
	
	while($row = mysqli_fetch_assoc($query)){
		$json[] = $row;
	
	}
	
	echo json_encode($json);
	
	mysqli_close($con);
	
?>