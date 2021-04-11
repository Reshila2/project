<?php 
$input=file_get_contents('php://input');
parse_str($input,$props);
var_dump($props);
?>