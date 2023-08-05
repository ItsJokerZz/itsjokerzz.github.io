<?php
$type = $_GET['action'];

if($type == "add")
{
	$rusers = fopen("userCount.txt","r") or die("Error!");
	$count = fread($rusers,filesize("userCount.txt"));
	$txt = $count += 1;
	
	$wusers = fopen("userCount.txt","w") or die("Error!");
	fwrite($wusers,$txt);
	fclose($wusers);
	fclose($rusers);
}
else if($type == "take")
{
	$rusers = fopen("userCount.txt","r") or die("Error!");
	$count = fread($rusers,filesize("userCount.txt"));
	$txt = $count -= 1;
	
	$wusers = fopen("userCount.txt","w") or die("Error!");
	fwrite($wusers,$txt);
	fclose($wusers);
	fclose($rusers);
}
?>