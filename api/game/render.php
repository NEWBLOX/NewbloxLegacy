<?php
require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php'); 
// include_once("$baseurl/api/game/render2.php"
$user = mysqli_real_escape_string($db, $_GET['name']);
$sql = "SELECT * FROM users WHERE username='$user'";
$count = mysqli_query($db, $sql);
$username = $_SESSION['username'];

if (file_exists("$baseurl/img/renders/$user.png")) {
   	header("Location: $wwwurl/img/renders/$user.png");
} elseif (mysqli_num_rows($count) == 1) {
    header("Location: $wwwurl/img/renders/noob.png");
} else {
    header("Location: $wwwurl/img/renders/notfound.png");	
} 
?>