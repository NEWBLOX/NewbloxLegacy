<?php
// h
require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php'); 
$user = $_POST["username"];
$pass = $_POST["password"];
$suser = mysqli_real_escape_string($db, strip_tags($user));
$spass = mysqli_real_escape_string($db, strip_tags($pass));
// my dumbass didnt know die existed
if (empty($user)) {
	echo('No username!');
	exit();
}
if (empty($pass)) {
    echo('No password!');
	exit();
}
$sql = "INSERT INTO users (username, password, isadmin) 
VALUES ('$suser', '$spass', '0')";

$sql2 = "SELECT * FROM users WHERE username='$suser'";
$noreg = mysqli_query($db, $sql2);

if (mysqli_num_rows($noreg) == 1) {
    die('Username has already been taken!');
} else {
   	mysqli_query($db, $sql);
	$_SESSION["isloggedin"] = true;
    $_SESSION["username"] = $suser;
	header("Location: /$wwwurl");
}

//Webhook for guilded
//Why isn't there a better way to do this
$url = 'http://media.guilded.gg/webhooks/180d75d9-2929-4fec-9563-54673438be64/oVSYYln85i6cKCYGIwAcMi2IQKgIoOGCUS0SOwO8M6K4WQWEISIegu8cI4i4Ewa22I6EOEwqSsUEQIouuoCAmS';
$ch = curl_init($url);
$cooltext[1] = 'hey vsauce micheal here';
$cooltext[2] = 'finobe';
$cooltext[3] = '"This is the greatest ROBLOX revival of all time" - Mo1st_Cr1tikal';
$cooltext[4] = 'Funny';
$cooltextnum = mt_rand(1, 4);
$jsonData = array(
    'content' => null,
	'embeds' => [
	[
		'title' => $suser.' has joined the site!!',
		'description' => 'Epic',
		'color' => 16711680,
		'footer' => [
			'text' => $cooltext[$cooltextnum],
		]
		
		
	]
	]
);
$jsonDataEncoded = json_encode($jsonData);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($ch);
// end
?>