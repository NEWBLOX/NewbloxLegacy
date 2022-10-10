local ThumbnailService = game:GetService("ThumbnailGenerator")
local http = game:GetService("HttpService")
http.HttpEnabled = true
local plr = game.Players:CreateLocalPlayer(0)
function render(user)
	return("data:image/png;base64,"..ThumbnailService:Click("PNG", 420, 420, true).."")
end