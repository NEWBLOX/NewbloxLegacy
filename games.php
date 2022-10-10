<?php require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php');  ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php print $wwwurl; ?>/body.css" rel="stylesheet"> 
<title> <?php echo $site_name; ?> - Games </title>
<head>
</head>
<body>
<?php
include("$baseurl/api/site/topbar.php");
?>
<div class="container">
    <div class="page-header">
      <h1>Games</h1>
    </div>
    <div class="row">
	<?php
    $sql = "SELECT title, id FROM games WHERE deleted=0 AND hidden=0";
    if ($result = mysqli_query($db, $sql)) { 
	// Fetch one and one row
    while ($row = mysqli_fetch_row($result)) {
	?>
      <div class="span3">
	  <div class="game img-rounded">
	  <img src="img/game<?php echo $row[1]; ?>.png" class="game-img img-rounded"></img>
	  <h4> <?php echo $row[0]; ?> </h4>
	  <a href="game.php?id=<?php echo $row[1]; ?>" class="btn btn-success">Play</a> 
	  </div>
	  </div>
	<?php
    }
      mysqli_free_result($result);
    }
    ?>	
	  
    </div>
   <?php include("$baseurl/api/site/footer.php"); ?>
   <?php include("$baseurl/api/site/ads.php"); ?>
</div>
<script src="https://code.jquery.com/jquery.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
<html>