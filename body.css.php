<?php require_once(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/confdirectory.txt').'/api/conf/config.php'); header('content-type:text/css; charset:UTF-8;'); ?> 
body {
       padding-top: 60px;
       padding-bottom: 40px;
     }
.game {
padding-top: 15px;
width: 180px;
height: 180px;
background-image: url(<?php print $wwwurl; ?>/img/bg.png);
text-align: center;
margin-bottom: 10px;
}	
.item {
padding-top: 15px;
margin-bottom: 30px;
}	
.game2 {
margin-left: 20px;
}	
.game-img {
 height: 90px;
 width: 90px 
}

.user1 {
width: 370px;
height: 370px;
background-image: url(<?php print $wwwurl; ?>/img/bg.png);
text-align: center;
}	
.user2 {
width: 540px;
height: 370px;
background-image: url(<?php print $wwwurl; ?>/img/bg.png);
text-align: center;
}
.itm2 {
background-image: url(<?php print $wwwurl; ?>/img/bg.png);
width: 360px;
height: 60px;
}

    