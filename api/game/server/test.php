<?php
function load_model($class_name)
{
	$path_to_file = 'Assemblies/Roblox/Grid/Rcc/' . $class_name . '.php';

	if (file_exists($path_to_file)) {
		require $path_to_file;
	}
}

load_model('RCCServiceSoap');
load_model('Job');
load_model('LuaValue');
load_model('LuaType');
load_model('ScriptExecution');
load_model('Status');

$RCCServiceSoap = new Roblox\Grid\Rcc\RCCServiceSoap("localhost", 64989);

$job = new Roblox\Grid\Rcc\Job('idk');
$a = file_get_contents("functions.lua");
$scriptText = "${a} return render('a')";
$value = $RCCServiceSoap->BatchJob($job, new Roblox\Grid\Rcc\ScriptExecution('idk', $scriptText));
file_put_contents('funny.png', file_get_contents($value));
echo $value;
?>