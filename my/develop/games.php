<?php require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php');  $user = $_SESSION['username']; if(!$logged == true){header('Location: /projects/newblox/error?t=You must be logged in to do that.');} ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="/projects/newblox/body.css" rel="stylesheet"> 
<title> <?php echo $site_name; ?> - Develop </title>
<head>
</head>
<body>
<?php
include("$baseurl/api/site/topbar.php");
?>
<div class="container">
    <div class="row">
	<div class="span3">
        <div class="well" style="max-width: 250px;">
            <ul class="nav nav-list">
                <li class="nav-header">DEVELOP</li>
                <li><a href="<?php print $wwwurl; ?>/my/develop/">Home</a></li>
                <li class="active"><a href="games">Games</a></li>
            </ul>
	    </div>
	</div>	
    <div class="span9">
    <?php include("$baseurl/api/site/profile/user2.php"); ?>
    </div>
	</div>
<?php include("$baseurl/api/site/footer.php"); ?>
<?php include("$baseurl/api/site/ads.php"); ?>

</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
<html>