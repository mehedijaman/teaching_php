<?php
	class db
	{
		private $host = 'localhost';
		private $user = 'phpmyadmin';
		private $pass = 'Q1w2e3r4t5!';
		private $db   = 'personal_wallet_manager';

		private $connection;

		public function __construct()
		{
			$this->connection = new mysqli($this->host,$this->user,$this->pass,$this->db);

			if ($this->connection->connect_errno) {
				throw new Exception('Database Connection Error! Error Code is: '.$this->connection->connect_errno);
				exit();
			}
		}


		public function execute($query)
		{
			$result = mysqli_query($this->connection,$query);

			if (!$result) {
				throw new Exception('Error executing query');
			}
			else
				return true;
		}

		public function fetch_result($query)
		{
			$result = mysqli_query($this->connection,$query);

			if ($result) {
				while($row = mysqli_fetch_array($result))
				{
					$data[] = $row;
				}

				return $data;
			}
			else
			{
				return array();
			}
		}


		public function close()
		{
			// mysqli_close($this->conenction);
			$this->connection->close();
		}

	}

?>