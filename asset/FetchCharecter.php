<?php 
	require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php');
	// shitty charapp implementation
	// charapps should be stored as JSON and decoded when needed
	// the RCC uses raw json
	$userrname = $_GET['username'];
    $sql = "SELECT charapp FROM users WHERE username='$userrname'";
    if ($result = mysqli_query($db, $sql)) { 
	while ($row = mysqli_fetch_row($result)) {
	echo $row[0];
	}
	mysqli_free_result($result);
	}
?>