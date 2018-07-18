<?php

namespace src\Model;

class UserModel extends \Core\Entity
{
	protected $table = "users";
	private static $relations = ['has many' => ['articles', 'comments']];

	public function save(array $params)
	{
		if($this->create())
		{
			echo "ok";
			return false;
		}
		else {
			echo "ya un pb";
			return false;
		}
	}

	public function verifMail()
	{
		
	}

	public function Relation()
	{
		return self::$relations;
	}
}


	// public function login($POST)
	// {
	// 	$this->email = $POST['email'];
	// 	$this->password = $POST['password'];
	// 	$requete = $this->bdd->prepare("SELECT * FROM users WHERE email LIKE :email;");
	// 	$requete->bindParam(':email', $this->email);
	// 	$requete->execute();
	// 	if(!empty($donnees = $requete->fetch(PDO::FETCH_ASSOC)))
	// 	{
	// 		$pass = $donnees['password'];
	// 		if(password_verify($this->password, $pass))
	// 		{
	// 			$_SESSION['id'] = $donnees['id'];
	// 			return TRUE;
	// 		}
	// 		else
	// 		{
	// 			echo "mauvais mot de passe";
	// 			return FALSE;
	// 		}
	// 	}
	// 	else
	// 	{
	// 		echo "mauvais mot de passe";
	// 		return FALSE;
	// 	}
	// }
	// public function verifMail($email)
	// {
	// 	if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	// 	{
	// 		echo "mail non valide";
	// 		return FALSE;
	// 	}
	// 	$requete = $this->bdd->prepare('SELECT email FROM users WHERE email LIKE :email');
	// 	$requete->bindParam(':email', $email);
	// 	$requete->execute();
	// 	$donnees = $requete->fetchAll(PDO::FETCH_ASSOC);
	// 	foreach($donnees as $key => $value)
	// 	{
	// 		foreach($value as $minivalue)
	// 		{
	// 			if($minivalue == $email)
	// 			{
	// 				echo "mail deja utilise";
	// 				return FALSE;
	// 			}
	// 		}
	// 	}
	// 	return TRUE;
	// }
	// public function update($POST)
	// {
	// 	$this->id = $_SESSION['id'];
    //
	// 	if(isset($POST['email']))
	// 	{
	// 		$email = $POST['email'];
	// 		$lastemail = $POST['lastemail'];
	// 		$requete = $this->bdd->prepare("SELECT * FROM users WHERE id LIKE '$this->id';");
	// 		$requete->execute();
	// 		$donnees = $requete->fetch();
	// 		if($lastemail != $donnees['email'])
	// 		{
	// 			echo "Votre email n'est pas valide";
	// 			return FALSE;
	// 		}
	// 		else
	// 		{
	// 			if($this->verifMail($email) == TRUE)
	// 			{
    //
	// 					echo"c bon ca";
	// 					$requete = $this->bdd->prepare("UPDATE users SET email = :email WHERE id LIKE ".$this->id.";");
	// 					$requete->bindParam(':email', $email);
	// 					var_dump($requete->execute());
	// 					return TRUE;
	// 			}
	// 			else
	// 			{
	// 				echo "email deja utiliser";
	// 				return FALSE;
	// 			}
	// 		}
	// 	}
	// 	if(isset($POST['passe1']))
	// 	{
	// 		$passe1 = $POST['passe1'];
	// 		$passe2 = $_POST['passe2'];
	// 		$lastemail = $POST['lastepasse'];
    //
	// 		$requete = $this->bdd->prepare("SELECT * FROM users WHERE id LIKE '$this->id';");
	// 		$requete->execute();
	// 		$donnees = $requete->fetch();
	// 		if($lastemail != $donnees['email'])
	// 		{
	// 			echo "Votre email n'est pas valide";
	// 			return FALSE;
	// 		}
	// 		if($this->verifPass($passe1, $passe2) == TRUE)
	// 		{
	// 			echo"c bon ca";
	// 			$requete = $this->bdd->prepare("UPDATE users SET password = :password WHERE id LIKE ".$this->id.";");
	// 			$requete->bindParam(':password', $this->password);
	// 			var_dump($requete->execute());
	// 			return TRUE;
	// 		}
	// 	}
	// }
