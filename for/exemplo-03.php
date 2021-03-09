<?php

echo "<select>";

for ($i = date("Y"); $i >= date("Y")-100; $i--){

	//echo $i . "<br>";
	echo '<option value="'.$i.'">'.$i.'</option>';

}

echo "</select>";

//Retorna os ultimos 100 anos a partir do nosso "2021"

?>