<?php


$pessoas = array();

array_push($pessoas, array(
	'nome'=>'Bruno',
	'idade'=>23 
));

array_push($pessoas, array(
	'nome'=>'Luma',
	'idade'=>19
));

print_r($pessoas);
print_r($pessoas[0]);
print_r($pessoas[0]['nome']);

?>