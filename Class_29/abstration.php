<?php 

	abstract class ParentClass {

		public function printLine()
		{
			echo "SOmething";
		}
	}

	class ChildClass extends ParentClass{
		public function EchoSomething()
		{
			echo "Hello World";
		}
	}

	// $Object  = new ParentCLass();
	// $Object->printLine();

	$NewObject = new ChildClass();
	$NewObject->printLine();