<?php
//Micetigri API PHP Source V.1//
//ONLY EDIT STUFF IN "" OMLY//

$Username= "Cheesezwheel"; // Insert yorn Transformice username //
//DO NOT EDIT//

$Mice = file_get_contents('http://api.micetigri.fr/json/player/'.$Username.''); 
$Stats = json_decode($Mice);

$Avatar = file_get_contents('http://cheesezwheel.cf/avatar.php?n='.$Username.'');
$Image = json_decode($Avatar);
 
//DO NOT EDIT//
?>
