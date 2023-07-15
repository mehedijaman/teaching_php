<?php

	/**
	 * 
	 */
	trait Nation
	{
		
		public $name;

		public function getNationName()
		{
			return $this->name;
		}
	}

	/**
	 * 
	 */
	trait Bangladeshi 
	{
		
		public $properties

		public function getProperties()
		{
			return $this->properties;
		}
	}

	trait EducatedNation
	{

	}


	/**
	 * 
	 */
	class KhulnaCitizen
	{
		use Nation;
		use Bangladeshi;
		use EducatedNation;
	}