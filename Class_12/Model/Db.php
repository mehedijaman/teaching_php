<?php 
	class Db
	{
		private $host = 'localhost';
		private $user = 'phpmyadmin';
		private $pass = 'Q1w2e3r4t5!';
		private $db   = 'personal_wallet_manager';

		private $conn;

		public function __construct()
		{
			$this->conn = new mysqli($this->host,$this->user,$this->pass,$this->db);

			if ($this->conn->connect_errno) {
				throw new exception('Database Connection Failed! Error : '.$this->conn->connect_errno);
			}
		}

		public function connect()
		{
			$this->connection = new mysqli($this->host,$this->user,$this->pass, $this->db);

			if($this->connection->connect_errno)
			{
				throw new exception('DB connection error ! Error code is :'.$this->connection->connect_errno);
			}
			else
			{
				return true;
			}
		}

		public function close()
		{
			$this->conn->close();
		}

		public function execute($query)
		{
			try {
				mysqli_query($this->conn,$query);
			} catch (Exception $e) {
				throw new Exception('Error in Executing Query!');
			}			
		}

		public function fetch_result($query)
		{
			$result = mysqli_query($this->conn,$query);

			if (!$result) 
			{
				throw new Exeption('Error in Fetching Results !');
			}
			else
			{
				while($row = mysqli_fetch_array($result))
				{
					$data[] = $row;
				}

				return $data;
			}
		}


	}

 ?>	