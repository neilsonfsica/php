<?php
$condição = true;

while ($condição) {
	$numero = rand(1, 10);
	if ($numero === 3) {
		echo "tres";
		$condição = false;
	}
	echo $numero . " ";
}


?>