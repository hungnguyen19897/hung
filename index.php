<?php
if(!empty($_GET))
	print_r($_GET);
     print_r("capcone project 2");
$myObj->result ="ok";
$myJSON = json_encode($myObj);
echo $myJSON;
?>