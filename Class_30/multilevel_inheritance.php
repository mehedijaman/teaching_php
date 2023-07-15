<?php 
	include('traits/ParentClass1.php');
	

	trait ParentClass2{

		public function setName()
		{
			return "Hello World";
		}

	}

	trait ParentClass3{

	}

	class ChildClass {
		use ParentClass1;
		use ParentClass2;
		use ParentClass3;

	}

	class ChildClass1{

		use traits/ParentClass1;
	}

	class ChildClass2{
		use ParentClass2;
		use ParentClass3;
	}

	$Object = new ChildClass();

	$Object->getPersonName();