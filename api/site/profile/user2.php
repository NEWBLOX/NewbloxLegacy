<?php
$sql = "SELECT description, title, id FROM games WHERE owner='$user' AND deleted=0 LIMIT 3";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) >= 1)  {
  // Fetch one and one row
  while ($row2 = mysqli_fetch_row($result)) {
  ?>
    <div class="media game2">
      <a class="pull-left" href="#">
        <img class="media-object img-polaroid" style="width: 64px; height: 64px;"src="<?php print $wwwurl; ?>/img/game<?php echo $row2[2]; ?>.png">
      </a>
      <div class="media-body">
        <h4 class="media-heading"><a href="<?php print $wwwurl; ?>/game?id=<?php echo $row2[2]; ?>"><?php echo $row2[1]; ?></a></h4>
        <?php echo $row2[0]; ?>
      </div>
    </div>
<?php
  }
  mysqli_free_result($result);
} else {
 echo 'This user has no games!<br>';	
}

?>