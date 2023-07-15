<?php 
	class Income
	{
		private $category_id;
		private $amount;
		private $description;
		private $incnome_date;
		
		public function store($data)
		{
			$this->category_id = $data['category_id'];
			$this->amount 	   = $data['amount'];
			$this->description = $data['description'];
			$this->income_date = $data['incnome_date'];

			$DB = new Db();

			$query  = "INSERT INTO incomes (category_id,amount,description,income_date)";
			$query .= " VALUES($this->category_id,$this->amount,'$this->description','$this->income_date')";

			$result = $DB->execute($query);

			$DB->close();

			return $result;
		}

		public function update($data,$id)
		{

		}

		public function delete()
		{
			// code...
		}

		public function deleteByPK($id)
		{
			// code...
		}

		public function getAll()
		{
			$query = "SELECT incomes.*,income_category.name AS category_name FROM incomes JOIN income_category ON incomes.category_id = income_category.id";

			$DB = new Db();
			$Incomes = $DB->fetch_result($query);

			$DB->close();
			return $Incomes;
		}

		public function show($id)
		{
			$sql = "SELECT * FROM incomes WHERE id = $id";
			$DB = new Db();
			$Data = $DB->fetch_result($sql);
			$DB->close();

			return $Data;
		}
	}

 ?>