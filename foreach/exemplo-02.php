<form>

		<input type="text" name="nome">

		<input type="date" name="nascimento">

		<input type="submit" value="OK">

</form>

<?php

	if (isset($_GET)){
		

	foreach ($_GET as $key => $value) { //$key é o nome dos inputs e $value o valor que foi inserido pelo usuário
		
		echo "Nome do campo: ". $key. "<br>";

		echo "Valor do campo: " . $value;

		echo "<hr>"; //linha horizontal

		}

	}

?>