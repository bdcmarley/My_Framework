<?php

namespace src\Controller;

class UserController extends \Core\Controller
{
	protected $params;

	public function __construct()
	{
		$secu = new \Core\Request();
		$this->params = $secu->getParams();
	}

	public function addAction()
	{
		echo "UserControler operationnel mamene";
	}

	public function indexAction()
	{
		echo "indexction UserController aussi beau que moi";
	}

	public function registerAction()
	{
			if(isset($this->params['email']) && isset($this->params['passe1']) && isset($this->params['passe2']))
			{
				if($this->verifPass() == TRUE)
				{
					$user = new \src\Model\UserModel();
					$user->verifMail();

					if($user->save($this->params) == TRUE)
					{
						$view = new \Core\Controller();
						$render = $view->render('User/login');
						echo $render;
					}
					else
					{
						$view = new \Core\Controller();
						$render = $view->render('User/register');
						echo $render;
					}
				}
			}
			else
			{
				$view = new \Core\Controller();
				$render = $view->render('User/register');
				echo $render;
			}
			// require('src/View/index.php');
	}

	public function verifPass()
	{
		if (isset($this->params['passe1']) && isset($this->params['passe2']))
		{
			$passe1 = $this->params['passe1'];
			$passe2 = $this->params['passe2'];

			if($passe1 === $passe2)
			{
				if(strlen($passe1) >= 5 && strlen($passe1) <= 25)
				{
					$this->params['passe1'] = password_hash($this->params['passe1'], PASSWORD_BCRYPT);
				}
			}
			return $this->params;
		}
		else
		{
			echo "Un probleme est survenue, veuillez recommencer 2";
			$this->params['passe1'] = NULL;
			return $this->params;
		}
	}

	public function loginAction()
	{
		if(isset($this->params['email']) && isset($this->params['password']))
		{
			$user = new \src\Model\UserModel();
			if($user->login($this->params) == TRUE)
			{
				$view = new \Core\Controller();
				$render = $view->render('User/accueil');
				echo $render;
			}
			else
			{
				$view = new \Core\Controller();
				$render = $view->render('User/login');
				echo $render;
			}
		}
		else
		{
			$view = new \Core\Controller();
			$render = $view->render('User/login');
			echo $render;
		}
	}

	public function accueilAction()
	{
		if(!isset($_SESSION['id']))
		{
			$view = new \Core\Controller();
			$render = $view->render('User/login');
			echo $render;
		}
		else
		{
			if(isset($this->params['valide']))
			{
				if($this->params['valide'] == "update")
				{
					if(isset($this->params['lastemail']) && isset($this->params['email']) && isset($this->params['emailc']) && $this->params['email'] == $this->params['emailc'])
					{
						$user = new \src\Model\UserModel();
						if($user->update($this->params) == TRUE)
						{
							echo "modifications prises en compte";
							$view = new \Core\Controller();
							$render = $view->render('User/accueil');
							echo $render;
						}
						else
						{
							$view = new \Core\Controller();
							$render = $view->render('User/accueil');
							echo $render;
						}
					}
					else
					{
						echo "les emails ne correspondent pas";
						$view = new \Core\Controller();
						$render = $view->render('User/accueil');
						echo $render;
					}
				}
				if(isset($this->params['passe1']) && isset($this->params['passe2']) && isset($this->params['lastpasse']) && $this->params['passe1'] == $this->params['passe2'])
				{
					$user = new \src\Model\UserModel();
					if($user->update($this->params) == TRUE)
					{
						echo "modifications prises en compte";
						$view = new \Core\Controller();
						$render = $view->render('User/accueil');
						echo $render;
					}
					else
					{
						$view = new \Core\Controller();
						$render = $view->render('User/accueil');
						echo $render;
					}
				}
				else
				{
					echo "les emails ne correspondent pas";
					$view = new \Core\Controller();
					$render = $view->render('User/accueil');
					echo $render;
				}
			}
			else
			{
				$view = new \Core\Controller();
				$render = $view->render('User/accueil');
				echo $render;
			}
		}
	}
}
