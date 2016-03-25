<?php

require("sonos.class.php");

$sonos_ip = "192.168.1.54";
$sambaShare = "192.168.1.111/sonostts"; 		// smb://xxxxxxxxxxxxx/audio/en

/*
Follow this guide to setup a Samba share for parent folder containing 'audio' folder
http://raspberrypihq.com/how-to-share-a-folder-with-a-windows-computer-from-a-raspberry-pi/
*/

//-------------------------------------------------------------

$unmute = true;
$volume = 50;
$message = NULL;
$lang = "en";
 
if (isset($_REQUEST['volume'])) 
	$volume = $_REQUEST['volume'];
if (isset($_REQUEST['unmute'])) 
	$unmute = $_REQUEST['unmute'];
if (isset($_REQUEST['message'])) 
	$message = $_REQUEST['message'];
if (isset($_REQUEST['lang'])) 
	$lang = $_REQUEST['lang'];

if (empty($message)) {
	die("Please provide 'message' parameter");
}

//-------------------------------------------------------------
 
$sonos = new SonosPHPController($sonos_ip);
$volumeBefore = $sonos->GetVolume();
$sonos->PlayTTS($message, $sambaShare, $volume, $unmute, $lang);
$sonos->SetVolume($volumeBefore);

?>
