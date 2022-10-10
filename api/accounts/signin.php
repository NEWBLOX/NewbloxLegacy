<?php
// h
require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php'); 
$user = $_POST["username"];
$pass = $_POST["password"];
$suser = mysqli_real_escape_string($db, strip_tags($user));
$spass = mysqli_real_escape_string($db, strip_tags($pass));
if (empty($user)) {
	echo('No username!');
	exit();
}
if (empty($pass)) {
    echo('No password!');
	exit();
}



$sql = "SELECT * FROM users WHERE username='$suser' AND password='$spass'";
$signin = mysqli_query($db, $sql);

if (mysqli_num_rows($signin) == 1) {
    $_SESSION["isloggedin"] = true;
    $_SESSION["username"] = $suser;
	header("Location: /$wwwurl");
} else {
   	echo('Incorrect Password/Username!');
}
?>