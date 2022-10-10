<?php
if ($_SESSION['isloggedin'] == true) {
?>
<a class="btn btn-primary btn-large" href="<?php print $wwwurl; ?>/api/game/gamedetails?id=1"> Play » </a>
<?php } else { ?>
<a class="btn btn-primary btn-large" href="signup"> Sign up » </a>
<?php } ?>
