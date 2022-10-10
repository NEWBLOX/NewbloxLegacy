<?php
require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php'); 
if($_SESSION['isloggedin'] == true) {
    $desc = $_POST['formdesc'];
	$sdesc = mysqli_real_escape_string($db, strip_tags($desc));
    $currentusername = $_SESSION['username'];
    $gamingsql = "UPDATE users SET description='$sdesc' WHERE username='$currentusername'";
    mysqli_query($db, $gamingsql);
	header('Location: $wwwurl/success?t=Successfully changed description.');
} else {
    header('Location: $wwwurl/error?t=You must be logged in to do that.');	
}
?>