<?php 
require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php'); 
if($_SESSION['isadmin'] == 0) {
	header('Location: /projects/newblox/error?t=You are not an admin.'); 
	exit;
}

if($_POST['baction'] == 'add') {
	if(!isset($_POST['content'])) {
	    die('Content not set!');	
	}
	if(!isset($_POST['type'])) {
	    die('Type not set!');	
	}
	$contenv =  $_POST['content'];
	$typ3 =  $_POST['type'];
	$sql = "
	INSERT INTO announcements (content, type)
    VALUES ('$contenv', '$typ3'); 
	
	
	
	";
	mysqli_query($db, $sql);
} elseif ($_POST['baction'] == 'remove') {
	
} elseif ($_POST['baction'] == 'update') {
	if(!isset($_POST['content'])) {
	    die('Content not set!');	
	}
	if(!isset($_POST['type'])) {
	    die('Type not set!');	
	}
	$contenv =  $_POST['content'];
	$typ3 =  $_POST['type'];
	$sql = "";
} else {
	die('No action specified!');
}

?>