<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="/projects/newblox/"><?php echo $site_name ?></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php print $wwwurl; ?>"><i class="icon-home icon-white"></i> Home</a></li>
              <li><a href="<?php print $wwwurl; ?>/games"><i class="icon-play icon-white"></i> Games</a></li>
              <li><a href="<?php print $wwwurl; ?>/users"><i class="icon-user icon-white"></i> Users</a></li>
            </ul>
			
			
			
			
			<?php if ($_SESSION['isloggedin'] == true) { ?>
			<div class="navbar-form pull-right">  
			<div class="btn-group">
                  <a href="<?php print $wwwurl; ?>/user" class="btn"><?php echo $_SESSION['username']; ?></a>
                  <button class="btn dropdown-toggle" data-toggle="dropdown">
                  <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="<?php print $wwwurl; ?>/my/develop"><i class="icon-plus"></i> Create</a></li>
				  <?php if ($_SESSION['isadmin'] == true) { ?>
				  <li><a tabindex="-1" href="<?php print $wwwurl; ?>/my/adminpanel"><i class="icon-th"></i> Admin Panel</a></li>
				  <?php } ?>
				  <li class="divider"></li>
				  <li><a tabindex="-1" href="<?php print $wwwurl; ?>/api/accounts/logout.php"><i class="icon-minus-sign"></i> Log Out</a></li>
            </ul>
            </div>
            </div>
			<?php } else { ?>
            <div class="navbar-form pull-right">
              <a href="<?php print $wwwurl; ?>/signin.php"> <button class="btn">Sign In</button> </a>
			  <a href="<?php print $wwwurl; ?>/signup.php"> <button class="btn">Sign Up</button> </a>
            </div>
			<?php } ?>
			
          </div><!--/.nav-collapse -->
        </div>
      </div>
</div>
<div class="container">
<?php 
$sql = "SELECT content, type FROM announcements";
if ($result = mysqli_query($db, $sql)) {
  // Fetch one and one row
  while ($row = mysqli_fetch_row($result)) {  
 ?>
  <div class="alert alert-<?php echo $row[1]; ?>">
       <button type="button" class="close" data-dismiss="alert"></button>
       <?php echo $row[0]; ?>
  </div>
<?php
}
  mysqli_free_result($result);
}
?>
</div>
  