<?php 
	/**
	 * DB Class
	 */
	class db
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

		public function execute($Query)
		{
			$Result = $this->Connection->query($Query);

			if ($Result) {
				return true;
			}
			else
			{
				return false;
			}

		}

		public function fetchData($Query){
			$Result = $this->Connection->query($Query);

			if(mysqli_num_rows($Result) == 0){
				return null;
			}
			else{
				while($Row = mysqli_fetch_assoc($Result)){
					$Data[] = $Row;
				}

				return $Data;
			}
		}

		public function close()
		{
			return $this->Connection->close();
		}
	}


 ?>