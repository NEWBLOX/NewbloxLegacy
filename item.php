<?php 
	require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php'); 
	$id = mysqli_escape_string($db, $_GET['id']);
	$sql = "SELECT title, description, creator, img, type, id, created FROM assets WHERE id='${id}' ";
	$query = mysqli_query($db, $sql);
	$fetch = mysqli_fetch_row($query);
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php print $wwwurl; ?>/body.css" rel="stylesheet"> 
<title> <?php echo $site_name; ?> - Item </title>
<head>
</head>
<body>
<?php
include("$baseurl/api/site/topbar.php");
?>
<div class="container">
    <h1> <?php echo $fetch[0]; ?> </h1>
	<div class="row">
		<div class="span5">
			<div class="user1 img-rounded">
				<br>
				<img class="img-rounded item" width="215" height="215" src="<?php echo $fetch[3]; ?>"> </img>
				<br>
				<?php if ($fetch[4] == 'audio') { ?>
					<audio controls src="/asset/?id=<?php echo $fetch[5]; ?>&audio=ye"> </audio>
				<?php } ?>
			</div>
		</div>
		<div class="span5">
			<div class="itm2 img-rounded">
				<img width="64" height="64" src="/projects/newblox/api/game/render.php?name=<?php echo $fetch[2]; ?>" class="pull-left"> </img>
				<p> By: <?php echo $fetch[2]; ?> </h5>
				<p> Created: <?php echo $fetch[6]; ?> </h5>
			</div>
			<br>
			<?php echo $fetch[1]; ?>
		</div>
	</div>
<?php include("$baseurl/api/site/footer.php"); ?>
<?php include("$baseurl/api/site/ads.php"); ?>
</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
<html>