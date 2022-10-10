<?php require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php');  ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php print $wwwurl; ?>/body.css" rel="stylesheet"> 
<script src="/bootstrap/js/bootstrap.min.js"></script>
<title> <?php echo $site_name; ?> - Sign Up </title>
<head>
</head>
<body>
<?php
include("$baseurl/api/site/topbar.php");
// this can probably be bypassed but the apis probably cant
if($_SESSION['isadmin'] == 0) {
		header('Location: /projects/newblox/error?t=You are not an admin.'); 
		exit();
}
?>
<div class="container">
    <form action="<?php print $wwwurl; ?>/api/admin/banners.php" method="POST">
      <fieldset>
        <legend>Banners</legend>
        <label>content</label>
        <input type="text" name="content" placeholder="Type something…">
		<label>type</label>
		<input type="text" name="type" placeholder="Type something…">
		<label>action</label>
		<input type="text" name="baction" placeholder="Type something…">
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