<?php

namespace Core;
require_once('routes.php');

class Core
{
	static public function run()
	{
		// var_dump($_SERVER['REQUEST_URI']);
		// echo __CLASS__ . " [OK]" . PHP_EOL;
		// $url = explode('/', $_SERVER["REQUEST_URI"]);
		session_start();

	 	// foreach($url as $donnees)
		// {
		// 	unset($url[0]);
		// 	unset($url[1]);
		// 	// unset($url[2]);
		// 	var_dump($url);
		// 	echo"</br>";
		// }
		// if($url[2] == "" || empty($url[2]))
		// {
		// 	$url[2] = '/';
		// }
		// if(isset($url[3]) && $url[3] == "")
		// {
		// 	$url[3] = 'index';
		// }

		// $url = implode('/',$url);
		$url = str_replace(BASE_URI, '', $_SERVER['REQUEST_URI']);
		$url = Router::get($url);

		echo '<pre><br>-----------TEST-------------<br>';
		var_dump($url);
		echo '<br>-----------TEST-------------<br></pre>';

		if(isset($url))
		{
			$controller = 'src\\Controller\\' .  ucfirst($url['controller']) . 'Controller';
			$action = $url['action'] . 'Action';

			$obj = new $controller();
			$obj->$action();
		}
		else
		{
			require_once("src/View/Error/404.php");
		}
	}
}
?>

<pre>
	<?php
		var_dump(BASE_URI);
		var_dump($_SERVER);
	?>
</pre>
