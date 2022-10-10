<?php 
$cooltext[1] = 'hey vsauce micheal here';
$cooltext[2] = 'finobe';
$cooltext[3] = '"This is the greatest ROBLOX revival of all time" - Mo1st_Cr1tikal';
$cooltext[4] = 'Funny';

$cooltextnum = mt_rand(1, 4);

if($_SESSION['isloggedin'] == true) { ?>
<div class="hero-unit">
<h1> Hio, <?php echo $_SESSION['username']; ?> </h1>
<p class="lead"> <?php echo $cooltext[$cooltextnum]; ?> </p>
<?php include("$baseurl/api/site/mainsitebutton.php"); ?>
</div>
<?php } else { ?>
<div class="hero-unit">
<h1> cool revival </h1>
<p class="lead"> <?php echo $cooltext[$cooltextnum]; ?> </p>
<?php include("$baseurl/api/site/mainsitebutton.php"); ?>
</div>
<?php } ?>