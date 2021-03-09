<?php


$nome = (int)$_GET["a"];
//var_dump($nome);

// PEGO O IP DO USER/ AMBIENTE
//$ip = $_SERVER["REMOTE_ADD	R"];

//$ip = $_SERVER["REMOTE_ADDR"];
//echo $ip;

$ip = $_SERVER["SCRIPT_NAME"];
echo $ip;


?>