<?php

namespace Core;

class Entity extends \Core\ORM
{
	public function __contruct($attributs)
	{
		parent::__construct();

		if(is_array($attributs))
		{
			foreach($attributs as $key => $value)
			{
				$this->{$key} = $value;
			}
		}
		elseif(is_int($attributs))
		{
			$attrib = $this->read($attributs);

			foreach($attrib as $key => $value)
			{
				$this->{$key} = $value;
			}
		}
		$relation = $this->Relation();
		if($relation ==! NULL)
		{
			if(array_key_exists("has many", $relation))
			{
				foreach($relation as $key => $value)
				{
					var_dump($key);
				}
			}
		}
	}
}
