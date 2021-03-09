<?php

//include "exemplo-01.php";
// inclui a função do exemplo-01 para este pagina, sem ter que criar a função de novo.

require "exemplo-01.php"; //
require_once "exemplo-01.php";
 
//usando o once, ele traz somente 1 vez o arquivo, impedindo que de um erro falta
//isso também se aplica ao include

//OBS, para usar o require, obrigatoriamente o arquivo deve existe e funcionar, já o include, ele pode tentar buscar o arquivo em uma pasta que se chama include path, que pode não acabar retornando o erro no código

$resultado = somar(10, 20);

echo $resultado;

?>