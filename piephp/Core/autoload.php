<?php

class Autoloader
{
	function dow()
	{
		spl_autoload_register(function ($class)
		{
			$path = str_replace("\\",DIRECTORY_SEPARATOR, $class);
			include($path . ".php");
		});
	}
}

$charge = new Autoloader;
$charge->dow();
//
// function autoload($class)
// {
// 	require_once($class . '.php');
// }
// spl_autoload_register('autoload');
