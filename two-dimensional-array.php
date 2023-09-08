<?php

	$oxo = array( array('x','','o'),	// Grupo array 1  
			  array('o','o','x'),	// Grupo array 2
			  array('x','o',''));	// Grupo array 3
	
	echo "Este valor pertenece al 2do Grupo de Array";
	echo "<br />";
	echo $oxo[1][2]; // Despliega el 3er valor del segundo grupo de array
?>