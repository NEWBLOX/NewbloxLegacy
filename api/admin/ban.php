<?php
require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php'); 
$user = $_SESSION['username']; 
if($_SESSION['isadmin'] == 0) {
	header('Location: /projects/newblox/error?t=You are not an admin.'); 
	exit;
}
$persontoban = $_POST['persontoban'];
$sql = "UPDATE users SET isbanned='1' WHERE username='${persontoban}'";
mysqli_query($db, $sql);
header('Location: /projects/newblox/my/adminpanel/ban');
?>