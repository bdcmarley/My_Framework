<?php

namespace Core;
// use \PDO;

class ORM
{
	private $bdd;
	public function __construct()
	{
		try
		{
			$this->bdd = new \PDO('mysql:host=localhost;dbname=piePHP', 'root', '');
		}
		catch (PDOException $e)
		{
			print "Erreur !: " . $e->getMessage() . "<br/>";
			die();
		}
	}

	public function create()
	{
		$fields = $this->getPublicvars();
		$i = 1;
		$quest = "(";
		$val = "(";

		foreach($fields as $key => $value)
		{
			if($i != count($fields))
			{
				$quest .= "" . $key . ", ";
				$val .= "':" . $key . "', ";
			}
			elseif($i == count($fields))
			{
				$quest .="" . $key . "";
				$val .= "':" . $key . "'";
			}
			$i++;
		}

		$quest .= ")";
		$val .= ")";

		$sentence = "INSERT INTO ". $this->table . $quest ." VALUES ". $val;
		$requete = $this->bdd->prepare($sentence);
		var_dump($fields);
		$requete->execute($fields);
		$id = $this->bdd->lastinsertId();
		$this->bdd = NULL;

		return $id;
	}  // retourne un id

	public function read ($id)
	{
		$i = 0;

		$sentence = "SELECT * FROM ". $this->table ." WHERE id = ".$id;
		$requete = $this->bdd->prepare($sentence);
		$requete->execute();
		$donnees = $requete->fetch();
		$donnees = array_unique($donnees);

		if (!empty($donnees['password']))
		{
			unset($donnees['password']);
		}
	}  // retourne un tableau associatif de l'enregistrement

	public function update ()
	{
		$fields = $this->getPublicvars();
		$table = $fields['table'];
		$sentence = "(";

		foreach($fields as $key => $value)
		{
			if($i != count($fields))
			{
				$quest .= "" . $key . ", ";
				$val .= "':" . $key . "', ";
			}
			elseif($i == count($fields))
			{
				$quest .="" . $key . "";
				$val .= "':" . $key . "'";
			}
			$i++;
		}

	}    // retourne un booléen

	public function delete ()
	{

	}    // retourne un booléen

	public function find ( $params = array('WHERE' => '1','ORDER BY' => 'id ASC','LIMIT' => ''))
	{
		if(count($params) >= 1)
		{
			$sentence = "SELECT ". $params
		}
	}   // retourne un tableau d'enregistrements

	public function getPublicvars()
	{
		function get($objet)
		{
			return get_object_vars($objet);
		}
		return get($this);
	}
}
