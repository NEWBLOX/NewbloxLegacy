
<?php 
require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php'); 
$lang = $_GET['lang'];
$_SESSION['lang'] = $lang;
header('Location: /projects/newblox');
?>