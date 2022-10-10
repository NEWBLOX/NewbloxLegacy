<?php
// yall im sorry for shit code but no way on earth im givin out newblox 2013 stc
session_start();
// user config
$daily_currency = 25;
$signup_currency = 25;
$site_name = "NEWBLOX";
$site_currency = "old coins";

// system crap
$baseurl = 'C:/wamp64/newblox';
$wwwurl = '';
//mysql-related stuff
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'newblox';

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if(!isset($_SESSION['isloggedin'])) {
        $_SESSION['isloggedin'] = false;
		$_SESSION['username'] = "User Not Found";
}

$sessionusername = mysqli_real_escape_string($db, $_SESSION['username']);
$bannedsql = mysqli_query($db, "SELECT * FROM users WHERE username='$sessionusername' AND isbanned=1");
$adminsql = mysqli_query($db, "SELECT * FROM users WHERE username='$sessionusername' AND isadmin=1");
if (mysqli_num_rows($bannedsql) == 1) {
   header("Location: $wwwurl/api/accounts/logout?r=1");
} 
if (mysqli_num_rows($adminsql) == 1) {
   $_SESSION['isadmin'] = 1;
} else {
   $_SESSION['isadmin'] = 0;
}
$isa = $_SESSION['isadmin'];
$logged = $_SESSION['isloggedin'];

?>