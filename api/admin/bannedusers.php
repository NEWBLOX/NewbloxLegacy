	<?php
      $sql = "SELECT description, username, isadmin, id FROM users WHERE isbanned='1' ORDER BY id DESC;";
        if ($result = mysqli_query($db, $sql)) {
            // Fetch one and one row
            while ($row = mysqli_fetch_row($result)) {
    ?>
    <div class="media">
      <div class="pull-left" href="#">
        <img class="media-object" style="width: 64px; height: 64px;"src="/projects/newblox/api/game/render.php?name=<?php echo $row[1]; ?>">
      </div>
	  <div class="pull-right"> 
        <a class="btn btn-success" href="/projects/newblox/api/admin/unban?u=<?php echo $row[1]; ?>"> Unban </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading"><a href="/projects/newblox/user.php?id=<?php echo $row[3]; ?>"><?php echo $row[1]; ?></a></h4>
        <?php echo $row[0]; ?>
      </div>
    </div>
    <?php
        }
    mysqli_free_result($result);
        }

    ?>