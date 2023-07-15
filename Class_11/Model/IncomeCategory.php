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
			$this->name = $data['name'];
			$query = "UPDATE income_category SET name = '$this->name' WHERE id= $id";

			$DB = new Db();

			try {
				$DB->execute($query);
			} catch (Exception $e) {
				return $e->getMessage();
			}
		}

		public function delete()
		{
			// code...
		}

		public function deleteByPK($id)
		{
			$DB = new Db();

			$sql = "DELETE FROM income_category WHERE id = $id";

			$result = $DB->execute($sql);

			$DB->close();

			return $result;
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
			$DB = new Db();
			$sql = "SELECT * FROM income_category WHERE id = $id";

			$result = $DB->fetch_result($sql);

			$DB->close();

			return $result;
		}
	}

 ?>