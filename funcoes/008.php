<?php
/*$ts = strtotime("2001-09-11");

echo date("l, d/m/Y", $ts);

?>*/
/*setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese");

echo strftime("%B %B");
*/

$dt = new datetime();
$periodo = new DateInterval("P15D");
echo $dt-> format("d/m/Y H:i:s");
$dt -> add($periodo);
echo "<br>";
echo $dt->format("d/m/Y H:i:s");



?>