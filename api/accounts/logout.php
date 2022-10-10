<?php
require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php'); 
$redir[1] = "Location: $wwwurl/error?t=You are banned from being on newblox.";
$funny = $_GET['r'];
$_SESSION['isloggedin'] = false;
$_SESSION['username'] = 'User Not Found';
if ($_GET['r']) {
    header($redir[$funny]);
} else {
header("Location: /$wwwurl");
}
?>  