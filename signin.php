<?php require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php'); ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php print $wwwurl; ?>/body.css" rel="stylesheet"> 
<script src="/bootstrap/js/bootstrap.min.js"></script>
<title> <?php echo $site_name; ?> - Sign In </title>
<head>
</head>
<body>
<?php
include("$baseurl/api/site/topbar.php");
?>
<div class="container">
    <form action="api/accounts/signin.php" method="POST">
      <fieldset>
        <legend>Sign In</legend>
        <label>Username</label>
        <input type="text" name="username" placeholder="Type something…">
		<label>Password</label>
		<input type="password" name="password" placeholder="Type something…">
		<br>
        <button type="submit" class="btn">Submit</button>
      </fieldset>
    </form>
<?php include("$baseurl/api/site/footer.php"); ?>
</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
<html>