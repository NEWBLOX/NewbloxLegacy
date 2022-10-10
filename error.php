<?php require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php');  ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php print $wwwurl; ?>/body.css" rel="stylesheet"> 
<script src="/bootstrap/js/bootstrap.min.js"></script>
<title> <?php echo $site_name; ?> - Error </title>
<head>
</head>
<body>
<?php
include("$baseurl/api/site/topbar.php");
?>
<div class="container">
<?php if(isset($_GET['t'])) { ?>
    <div class="alert alert-error">
       <button type="button" class="close" data-dismiss="alert"></button>
       <strong>Error!</strong> <?php echo $_GET['t']; ?>
    </div>
<?php } ?>
<?php include("$baseurl/api/site/homeherounit.php"); ?>
<?php include("$baseurl/api/site/footer.php"); ?>
<?php include("$baseurl/api/site/ads.php"); ?>
</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
<html>