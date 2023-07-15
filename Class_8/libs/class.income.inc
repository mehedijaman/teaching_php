<?php
	class income
	{
		private $category_id;
		private $amout;
		private $description;
		private $income_date;

		public function create($data)
		{
			$this->category_id = htmlspecialchars($data['category_id']);
			$this->amount  	   = htmlspecialchars($data['amount']);
			$this->description = htmlspecialchars($data['description']);
			$this->income_data = htmlspecialchars($data['income_date']);

			$query = "INSERT INTO income(category_id,amount,description,income_date) ";
			$query.="  VALUES($this->category_id,$this->amount,'$this->description','$this->income_date')";

			$DB = new db();
			try {
				$DB->execute($query);
			} catch (Exception $e){
				$error = "Error in creating new Income !";
				throw new Exeption($error);
			}

			$DB->close();


		}

		public function update($data,$id)
		{

		}

		public function delete()
		{

		}

		public function delete_by_pk($id)
		{

		}

		public function get_all()
		{

		}

		public function get_by_pk($id)
		{

		}
	}
?>