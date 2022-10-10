<?php
if ($_SESSION['isloggedin'] == true) {
?>
<a class="btn btn-primary btn-large" href="games"> Play cool gaems » </a>
<?php } else { ?>
<a class="btn btn-primary btn-large" href="signup"> Sign Up » </a>
<?php } ?>
