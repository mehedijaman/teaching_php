<?php 
	
	/**
	 * DB Class
	 */
	class Db
	{
		private $Host = 'localhost';
		private $User = 'phpmyadmin';
		private $Pass = 'Q1w2e3r4t5!';
		private $Db   = 'demo';

		private $Connection;
		
		function __construct()
		{
			$this->Connection = new mysqli($this->Host, $this->User, $this->Pass, $this->Db);
		}


		function execute($Query)
		{
			$Result = $this->Connection->query($Query);

			if($Result)
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		function close()
		{
			$this->Connection->close();
		}
	}

 ?>