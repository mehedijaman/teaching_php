<?php
	/**
	 * 
	 */
	class person 
	{
		
		public $name = 'Mehedi';
		public $age = '29';
		public $location = 'Location';


		public  function setName($name = 'Mehedi')
		{
			$this->name = $name;
		}

		public  function getName()
		{
			return $this->name;
		}

		public  function setAge($age)
		{
			$this->age = $age;
		}

		public  function getAge()
		{
			return $this->age;
		}

		public  function setLocation($location)
		{
			$this->location = $location;
		}

		public  function getLocation()
		{
			return $this->location;
		}

		public function getDetails()
		{
			echo $this->getName();
			echo $this->getAge();
			echo $this->getLocation();
		}
	}


	/**
	 * 
	 */
	class child1 extends person
	{
		public $education;

		public function setEducation($education)
		{
			$this->education = $education;
		}

		public function getEducation()
		{
			echo $this->education;
		}
		
	}

	class child2 extends child1 
	{
		public $height;
		public $weight;

		function __construct($className = 'Child 2' )
		{
			echo "This is a constructor from {$className}<br>";
		}

		public function setHeight($height)
		{
			$this->height = $height;
		}

		public function getHeight()
		{
			echo $this->height;
		}

		public function setWeight($weight)
		{
			$this->weight = $weight;
		}

		public function getWeight()
		{
			return $this->weight;
		}
	}



	// $ObjPerson = new person();
	// $ObjPerson->setName('Mehedi');
	// $ObjPerson->setAge('29');
	// $ObjPerson->setLocation('Khulna');
	// $ObjPerson->getDetails();
	
	$ObjChild = new child2("Child 4");
	// $ObjChild->setName();
	// $ObjChild->setAge('Another Age');
	// $ObjChild->setLocation('Another  Khulna');
	// $ObjChild->getDetails();
	// $ObjChild->setEducation("Bsc in CSE");
	// $ObjChild->getEducation();
	// $ObjChild->setHeight("5 fee 7 inch");
	// $ObjChild->getHeight();