<?php 
$user = $_GET['id'];
$count = mysqli_query($db, "SELECT * FROM users WHERE id='$user'");
$username = $_SESSION['username'];
$redir = mysqli_query($db, "SELECT id FROM users WHERE username='$username'");
$redir2 = mysqli_fetch_row($redir);
if (!mysqli_num_rows($count) == 1) {
   header("Location: $wwwurl/error?t=Invalid user!");	  
} else {
   $get = $_GET['id'];	
   $sql1 = mysqli_query($db, "SELECT description, username, isadmin, hasbadge, badgecontent, badgetype FROM users WHERE id='$get'");
   $sql2 = mysqli_fetch_row($sql1);
   $user = $sql2[1];
   $desc = $sql2[0];
   $isadmin = $sql2[2];
   $hasbadge = $sql2[3];
   $badgecontent = $sql2[4];
   $badgetype = $sql2[5];
   mysqli_free_result($sql1);
} if (!isset($_GET['id'])) {
   header("Location: $wwwurl/user?id=$redir2[0]");	
}
?>