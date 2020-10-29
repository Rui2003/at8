<?php

$pararLoop = 9;

//este for é executado indefinidamente
for ($numero = 0 ; ; $numero++) {
if($numero == $pararLoop){
	//este break obriga o ciclo for
break;
	}
	echo $numero.'<br>';
	}
?>