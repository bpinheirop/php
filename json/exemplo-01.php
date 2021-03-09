
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

echo json_encode($pessoas);

?>
