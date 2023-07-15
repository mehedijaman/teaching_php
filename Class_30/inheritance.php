<?php
	
	// 1. Single Inheritance
	// 2. Multiple Inheritance
	// 3. Multilevel Inheritance


	class ParentClass{
		public $name;

		public function getPersonName()
		{
			return $this->name;
		}
	}

	class ChildClass extends ParentClass{

	}

	class GrandChildClass extends ChildClass{

	}


	$Object = new GrandChildClass();

	$Object->getPersonName();