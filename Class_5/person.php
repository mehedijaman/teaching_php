<?php

/**
 * This class defines a persons details
 */
class person
{
	public $name;
	public $age;
	public $religion;
	
	function __construct()
	{
		echo $name;
	}

	public function getName(){
		echo $this->name;
	}

	public function getAge(){
		echo $this->age;
	}

	public function getReligion(){
		echo $this->religion;
	}
}

?>