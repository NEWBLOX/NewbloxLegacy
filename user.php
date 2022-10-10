<?php require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php');  require("$baseurl/api/accounts/usertrue.php"); ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php print $wwwurl; ?>/body.css" rel="stylesheet"> 
<title> <?php echo $site_name; ?> - <?php echo $user; ?>'s Profile </title>
<head>
</head>
<body>
<?php
include("$baseurl/api/site/topbar.php");
?>
<div class="container">
<div class="row">
    <div class="span5">
        <div class="user1 img-rounded">
            <?php include("$baseurl/api/site/profile/user1.php"); ?>
        </div>
    </div>
    <div class="span5">
        <div class="user2 img-rounded">
            <h3> Places </h3>
            <?php include("$baseurl/api/site/profile/user2.php"); ?>
			<a class="label label-info" href="/projects/newblox/games">See more games</a>
        </div>
    </div>
</div>
<br>
<?php include("$baseurl/api/site/footer.php"); ?>
<?php include("$baseurl/api/site/ads.php"); ?>

</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
<html>