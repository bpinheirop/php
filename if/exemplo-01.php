<?php

$qualASuaIdade = 125;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

 if($qualASuaIdade < $idadeCrianca) {

 		echo "Criança";

 }else if ($qualASuaIdade < $idadeMelhor){

 		echo "Adulto";

 }else{

 		echo "Idoso";

 }

 echo "<br>";

 //forma alternativa de um simples if 
 echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de idade";
 
?>