<?php

$nome = "Bruno Pinheiro";
//echo strtoupper($nome);
$nome = strtoupper($nome);
echo $nome;
//Retorna o texto em letra maiuscula

$nome = strtolower($nome);
echo "<br>";
echo $nome;
echo "<br>";
//Retorna o texto em letra minuscula

echo ucwords($nome);
echo "<br>";
//Primeira letra de cada palavra maiscula

echo ucfirst($nome);
echo "<br>";
echo $nome;
//Somente a primeira letra do texto em maiscula
?>