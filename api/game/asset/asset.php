<?php
$barackobama = $_GET['id'];
if ( ( file_exists("store/$barackobama") ) && ( $_GET['audio'] == 'ye' ) ) {
    readfile("store/${barackobama}");
} elseif(file_exists("store/$barackobama")) {
	header("Content-Type: application/octet-stream");
    header("Content-Transfer-Encoding: Binary");
    header("Content-disposition: attachment; filename=${barackobama}"); 
    readfile("store/${barackobama}");
} else {
    header("Location: http://assetdelivery.roblox.com/v1/asset/?id=${barackobama}");
}
?>