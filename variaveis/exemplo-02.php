<?php

/*
$anoNascimento = 1990;

$nomeCompleto = "";
*/

$nome1 = "Bruno";

$sobrenome = "Pinheiro";

$nomeCompleto = $nome1 . " " . $sobrenome;
// . " " .  - CONCATENA COM O ESPAÇO

echo $nomeCompleto;

//este comando para a execução do código, não executa nada para baixo.
exit;
 
 echo $nome1;

 echo "<br/>";

 //apagar variável
 unset($nome1);

 //echo $nome1;

 if(isset($nome1)){
 	echo$nome1;
 }

//isset siginficar * SE EXISTE *

?>