<?php require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php');  ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php print $wwwurl; ?>/body.css" rel="stylesheet"> 
<title> <?php echo $site_name; ?> - Admin Panel </title>
<head>
</head>
<body>
<?php
include("$baseurl/api/site/topbar.php");

if($_SESSION['isadmin'] == 0) {
		header('Location: /projects/newblox/error?t=You are not an admin.'); 
		exit();
}
?>
<div class="container">
    <div class="row">
	<div class="span3">
        <div class="well" style="max-width: 250px;">
            <ul class="nav nav-list">
                <li class="nav-header"> Admin Panel </li>
                <li><a href="/projects/newblox/my/adminpanel/"> Home </a></li>
                <li><a href="ban">Ban Panel</a></li>
				<li class="active"><a href="#">Deploy History</a>
            </ul>
	    </div>
	</div>	
    <div class="span9">
		<form method="POST" action="/projects/newblox/api/setup/deploy.php">
			<legend> Deploy Client </legend>
			<label class="radio">
				<input type="radio" name="app" value="RCCService" checked>
				RCCService
			</label>
			<label class="radio">
				<input type="radio" name="app" value="NewbloxClient">
				Game Client
			</label>
			<button class="btn" type="submit"> Submit </button>
			
		</form>
    </div>
	</div>
<?php include("$baseurl/api/site/footer.php"); ?>
<?php include("$baseurl/api/site/ads.php"); ?>

</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
<html>