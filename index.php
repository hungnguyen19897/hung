<?php
if(!empty($_GET))
	print_r($_GET);
$myObj->result ="ok";
$myJSON = json_encode($myObj);
echo $myJSON;
?>