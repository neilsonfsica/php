<?php 

echo "<select>";
for ($i= date("y"); $i >= date("y")-100 ; $i--) { 
	echo '<option value="' .$i. '"> '.$i.'</option>';

	}

echo "</select>"
?>