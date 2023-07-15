<?php 
	/**
	 * 
	 */
	class IncomeCategory
	{
		
		private $name;

		public function store($data)
		{
			$this->name = $data['name'];

			$Db = new Db();

			$query = "INSERT INTO income_category(name)";
			$query.= " VALUES('$this->name')";

			try {
				$Db->execute($query);
			} catch (Exception $e) {
				return $e->getMessage();
			}

			$Db->close();
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

			$DB = new Db();

			$sql = "SELECT * FROM income_category";

			$result = $DB->fetch_result($sql);

			$DB->close();

			return $result;
		}

		public function show($id)
		{

		}
	}

 ?>