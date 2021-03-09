<?php


$nome = "Bruno";
$nome2 = "Pinheiro";

function teste(){
	global $nome;
	echo $nome;
	echo '<br>';
}

function teste2(){
	global $nome2;
	echo $nome2;



}

teste();
teste2();

?>