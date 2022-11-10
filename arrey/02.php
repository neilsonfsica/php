
<?php 
/*$pessoas = array();
array_push($pessoas, array (
	'nome' => 'zé', 
	'idade' => 25));
array_push($pessoas, array (
	'nome' => 'jonas', 
	'idade' => 21));
print_r($pessoas[0]['nome']);

?>
*/

//jason 


/*$pessoas = array();
array_push($pessoas, array (
	'nome' => 'zé', 
	'idade' => 25));
array_push($pessoas, array (
	'nome' => 'jonas', 
	'idade' => 21));
echo json_encode($pessoas);

?>*/

$json = '[{"nome":"z\u00e9","idade":25},{"nome":"jonas","idade":21}]';
$data = json_decode($json, true);
var_dump($data);

?>