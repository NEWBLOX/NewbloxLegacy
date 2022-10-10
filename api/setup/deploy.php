<?php 
require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php'); 
if ($_SESSION['isadmin'] == 0) {
	die('You must be an admin to deploy a version!');	
}

$date = date("Y/m/d h:i:s A");
$app = $_POST['app'];
$id = rand();

file_put_contents('deployhistory.log', "New ${app} version-${id} at ${date}... Done!\n", FILE_APPEND);
file_put_contents("latest-${app}.log", "version-${id}");

header('Location: /projects/newblox/my/adminpanel/deploy');


// format: New BlaBlaBla version-BlaBlaBla at 12/12/2012 4:20:69 PM... Done!
?>