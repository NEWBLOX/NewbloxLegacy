<?php require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php');  ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="/projects/newblox/body.css" rel="stylesheet"> 
<title> <?php echo $site_name; ?> - Change Description </title>
<head>
</head>
<body>
<?php
include("$baseurl/api/site/topbar.php");
?>
<div class="container">
<form action="/projects/newblox/api/accounts/changedescription.php" method="POST">
      <fieldset>
        <legend>Description</legend>
        <input type="text" name="formdesc" placeholder="Type something…">
		<br>
        <button type="submit" class="btn">Submit</button>
      </fieldset>
</form>
<?php include("$baseurl/api/site/footer.php"); ?>
<?php include("$baseurl/api/site/ads.php"); ?>

</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
<html>