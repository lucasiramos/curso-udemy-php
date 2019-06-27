<?php

function controllers_autoload($classname){
	if(file_exists ('controllers/' . $classname . '.php')){
		include 'controllers/' . $classname . '.php';		
	}
}

spl_autoload_register('controllers_autoload');