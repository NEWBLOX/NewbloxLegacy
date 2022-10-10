<?php require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php');  $user = $_SESSION['username'];  ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php print $wwwurl; ?>/body.css" rel="stylesheet"> 
<title> <?php echo $site_name; ?> - Ban Someone </title>
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
                <li class="active"><a href="ban"> Ban Panel </a></li>
            </ul>
	    </div>
	</div>	
    <div class="span9">
    <form action="/projects/newblox/api/admin/ban.php" method="POST">
      <fieldset>
        <legend> Admin Panel </legend>
        <input type="text" name="persontoban" placeholder="Type something…">
		<br>
        <button type="submit" class="btn btn-danger"> Ban </button>
      </fieldset>
    </form>
	<hr>
	<p>Banned People:</p>
	<hr>
    <?php include("${baseurl}/api/admin/bannedusers.php"); ?>
    </div>
	</div>
<?php include("$baseurl/api/site/footer.php"); ?>
<?php include("$baseurl/api/site/ads.php"); ?>

</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
<html>