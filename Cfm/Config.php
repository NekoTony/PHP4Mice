<?php
//CheeseForMice API PHP Source V.1//
//ONLY EDIT STUFF IN "" OMLY//

$Username= "Cheesezwheel"; // Insert yorn Transformice username //
$Language= "en"; //Insert your langauge ()// 

//DO NOT EDIT//

$Cfm = file_get_contents('http://api.formice.com/mouse/stats.json?n='.$Username.'&l='.$Language.''); 
$Stats = json_decode($Cfm);

$Avatar = file_get_contents('http://cheesezwheel.cf/avatar.php?n='.$Username.'');
$Image = json_decode($Avatar);
 
//DO NOT EDIT//
?>
