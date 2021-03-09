
<?php



$json = '[{"nome": "Bruno","idade": 23},{"nome": "Luma","idade": 19}]';

$data = json_decode($json, true);

var_dump($data);

?>
