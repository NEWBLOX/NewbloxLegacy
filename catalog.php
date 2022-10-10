<?php 
require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php'); 
$g = array(
"shirt" => "Shirts",
"pants" => "Pants",
"hat" => "Hats",
"package" => "Packages",
);

?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php print $wwwurl; ?>/body.css" rel="stylesheet"> 
<title> <?php echo $site_name; ?> - Catalog </title>
<?php 
	if (isset($_GET['type'])) {
	$type = mysqli_real_escape_string($db, $_GET['type']);
    $sqlg = "SELECT title, id, img FROM assets WHERE deleted=0 AND catalog=1 AND type='$type'";	
    } else {
	$sqlg = "SELECT title, id, img FROM assets WHERE deleted=0 AND catalog=1 AND featured='1'";
    } ?>
<head>
</head>
<body>
<?php
include("$baseurl/api/site/topbar.php");
?>
<div class="container">
    <div class="page-header">
		  <div class="pull-right">
	          <div class="btn-group">
                <?php if(isset($type)) { ?> 
				<button class="btn"><?php echo $g[$type]; ?></button> 
				<?php } else { ?>
				<button class="btn">Featured</button>
				<?php } ?>
                <button class="btn dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li> <a href="catalog?type=shirt"> Shirts </a> </li>
					<li> <a href="catalog?type=pants"> Pants </a> </li>
					<li> <a href="catalog?type=hat"> Hats </a> </li>
					<li> <a href="catalog?type=package"> Packages </a> </li>
                </ul>
            </div>
	      </div>
    <h1>Catalog</h1>

    </div>
    <div class="row">
	<?php
    if ($result = mysqli_query($db, $sqlg)) { 
	// Fetch one and one row
    while ($row = mysqli_fetch_row($result)) {
	?>
      <div class="span3">
	  <div class="game img-rounded">
	  <img src="<?php echo $row[2]; ?>" class="game-img img-rounded"></img>
	  <h4> <?php echo $row[0]; ?> </h4>
	  <a href="item.php?id=<?php echo $row[1]; ?>" class="btn btn-success">View</a> 
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