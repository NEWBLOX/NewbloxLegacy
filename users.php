<?php require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php');  ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php print $wwwurl; ?>/body.css" rel="stylesheet"> 
<title> <?php echo $site_name; ?> - Users </title>
<head>
</head>
<body>
<?php
include("$baseurl/api/site/topbar.php");
?>
<div class="container">
<?php
$sql = "SELECT description, username, isadmin, id, hasbadge, badgecontent, badgetype FROM users ORDER BY id DESC;";
if ($result = mysqli_query($db, $sql)) {
  // Fetch one and one row
  while ($row = mysqli_fetch_row($result)) {
?>
    <div class="media">
      <a class="pull-left" href="#">
        <img class="media-object" style="width: 64px; height: 64px;"src="<?php print $wwwurl; ?>/api/game/render.php?name=<?php echo $row[1]; ?>">
      </a>
      <div class="media-body">
        <h4 class="media-heading"><a href="<?php print $wwwurl; ?>/user.php?id=<?php echo $row[3]; ?>"><?php echo $row[1]; ?></a>
		<?php if ($row[4] == 1) { ?> 
		<span class="badge badge-<?php echo $row[6]; ?>"><?php echo $row[5]; ?></span>
		<?php } ?></h4>
        <?php echo $row[0]; ?>
      </div>
    </div>
<?php
  }
  mysqli_free_result($result);
}

?>
<?php include("$baseurl/api/site/footer.php"); ?>
<?php include("$baseurl/api/site/ads.php"); ?>

</div>

<script src="https://code.jquery.com/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
<html>