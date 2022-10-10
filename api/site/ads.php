<?php 
$sql = "SELECT text, img, id, link FROM ads ORDER BY rand() LIMIT 1;";
if ($reslt = mysqli_query($db, $sql)) {
  // Fetch one and one row
  while ($adfetch = mysqli_fetch_row($reslt)) {
?>
<br>
<div class="text-center"><a href="<?php echo $adfetch[3]; ?>"><img alt="<?php echo $adfetch[0]; ?>" src="<?php echo $adfetch[1]; ?>"></img></a></div>
<br>
<?php
  }
  mysqli_free_result($reslt);
}
?>