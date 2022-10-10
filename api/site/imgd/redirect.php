<?php
// i dont fucking care about errors
// like who the fuck is PURPOSLY going to my redirect thing
// and causing errors
// nevermind someone actually using the site
// why did 2021 me even consider people using the site it wasnt even fucking public
$useradlink[1] = "/projects/newblox/userad/pizza.html";
$useradlink[2] = "/projects/newblox/user?username=Powdered";
$useradlink[3] = "https://dl.malwarewatch.org/software/useful/adobe/Photoshop2020.zip";
$the = $_GET['id'];
$redirect = $useradlink[$the];
header("Location: $redirect")
?>