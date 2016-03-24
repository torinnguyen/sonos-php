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
$volume = 10;
$message = NULL;
 
if (isset($_REQUEST['volume'])) 
	$volume = $_REQUEST['volume'];
if (isset($_REQUEST['unmute'])) 
	$volume = $_REQUEST['unmute'];
if (isset($_REQUEST['message'])) 
	$message = $_REQUEST['message'];

if (empty($message)) {
	die("Please provide 'message' parameter");
}

//-------------------------------------------------------------
 
$sonos = new SonosPHPController($sonos_ip);
$sonos->PlayTTS($message, $sambaShare, $volume, $unmute);

?>
