<?php
if(!empty($_GET))
	print_r($_GET);
$myObj->research ="successful";
$myJSON = json_encode($myObj);
echo $myJSON;
?>