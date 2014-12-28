<?php 
	
	function myAutoload($class){
		include(__DIR__ . "/" .$class . '.php');
	}

	spl_autoload_register("myAutoload");
?>