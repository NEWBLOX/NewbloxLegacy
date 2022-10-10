<?php $port = $_GET['port']; ?>
-- shit script, ik
local NetworkServer = game:service("NetworkServer")
NetworkServer:start(<?php echo $port ?>)

local RunService = game:service("RunService")
RunService:run()