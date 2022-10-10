<h3> <?php echo $user; if ($hasbadge == 1) {?> <span class="badge badge-<?php echo $badgetype; ?>"><?php echo $badgecontent; ?></span> <?php } ?>  </h3>
<img style="height: 250px; width: 250px;" src="<?php print $wwwurl; ?>/api/game/render.php?name=<?php echo $user; ?>" alt="<?php echo $user; ?>'s render">
</img>
<p> <?php echo $desc; ?> </p>
<a href="/projects/newblox/my/description.php">(change your description!) </a>