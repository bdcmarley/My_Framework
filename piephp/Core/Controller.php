<?php

namespace Core;

class Controller
{
	protected function render($view, $scope = [])
	{
		extract($scope);

		$controller = basename(get_class($this));
        $controller = explode("\\", $controller);
        $controller = end($controller);

        $f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View',
        str_replace('Controller', '', $controller), $view]) . '.php';
		// $f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View', 'User', $view]) . '.php';
		// $f = str_replace('Controller', '', basename(get_class($this)));

		// $f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View',
		// str_replace('src\Controller\UserController', 'User', basename(get_class($this))), $view]) . '.php';

		 if (file_exists($f))
		 {
			 ob_start();
			 include($f);
			 $view = ob_get_clean();

			 ob_start();
			 include(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View', 'index']) . '.php');
			 $this->_render = ob_get_clean();
			 return $this->_render;
		 }
		 else {
		 	echo "error de blanc";
		 }
	}
}
