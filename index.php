<?php

$sonos_ip = "192.168.1.54";

require("sonos.class.php");

$sonos = new SonosPHPController($sonos_ip); 

//Duck the volume
$volumeBefore = $sonos->GetVolume();
echo "Current volume: " . $volumeBefore;
//$sonos = $sonos->SetVolume(10);
//$sonos = $sonos->SetVolume($volumeBefore);

?>