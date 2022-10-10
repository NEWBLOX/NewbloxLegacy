<?php 
require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php'); 
$game = $_GET['id']; 
$sql = "SELECT title, description FROM games WHERE id=$game AND deleted=0"; 
$gaemquery = mysqli_query($db, $sql);
$rowgamepage = mysqli_fetch_row($gaemquery);
?>
<!DOCTYPE html>
<html>
<title> <?php echo $site_name; ?> - <?php echo $rowgamepage[0]; ?>  </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php print $wwwurl; ?>/body.css" rel="stylesheet"> 
<script src="/bootstrap/js/bootstrap.min.js"></script>
<head>
</head>
<body>
<?php
include("$baseurl/api/site/topbar.php");
$gameinvalid1 = "SELECT * FROM games WHERE id='$game'";
$gameinvalid2 = mysqli_query($db, $gameinvalid1);
if (mysqli_num_rows($gameinvalid2) == 0) {
 header('Location: /projects/newblox/error?t=Invalid Game');
}
$gamedeleted1 = "SELECT * FROM games WHERE id='$game' AND deleted=1";
$gamedeleted2 = mysqli_query($db, $gamedeleted1);
if (mysqli_num_rows($gamedeleted2) == 1) {
 header('Location: /projects/newblox/error?t=Deleted Game');
}	
?>
<div class="container">
<div class="hero-unit">
<h1> <?php echo $rowgamepage[0]; ?> </h1>
<p class="lead"> <?php echo $rowgamepage[1]; ?> </p>
<?php include("$baseurl/api/site/gamebutton.php"); ?>
</div>
<?php include("$baseurl/api/site/footer.php"); ?>
<?php include("$baseurl/api/site/ads.php"); ?>
</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
<html>